require('dotenv').config();
const express = require('express');
const bodyParser = require('body-parser');
const { exec } = require('child_process');
const fs = require('fs');
const path = require('path');
const morgan = require('morgan');

// Configuración
const app = express();
const PORT = process.env.PORT || 3002;
const TEMP_DIR = path.join(__dirname, 'temp');
const LOGS_DIR = path.join(__dirname, 'logs');

// 1. VERIFICACIÓN INICIAL DE DIRECTORIOS (NUEVO)
function ensureDirectories() {
    try {
        [LOGS_DIR, TEMP_DIR].forEach(dir => {
            if (!fs.existsSync(dir)) {
                fs.mkdirSync(dir, { recursive: true });
                console.log(`Directorio creado: ${dir}`);
            }
        });
        return true;
    } catch (err) {
        console.error('Error creando directorios:', err);
        return false;
    }
}

// 2. SETUP CON MANEJO DE ERRORES (MODIFICADO)
if (!ensureDirectories()) {
    console.error('No se pudieron crear los directorios necesarios');
    process.exit(1);
}

// Configuración de middleware con verificación
try {
    app.use(bodyParser.json({ limit: '10mb' }));
    
    // Solo configurar morgan si el directorio de logs existe
    if (fs.existsSync(LOGS_DIR)) {
        app.use(morgan('common', {
            stream: fs.createWriteStream(path.join(LOGS_DIR, 'access.log'), { flags: 'a' })
        }));
    } else {
        console.warn('LOGS_DIR no existe, usando consola para logs');
        app.use(morgan('common'));
    }
} catch (err) {
    console.error('Error configurando middlewares:', err);
}

// [El resto del código permanece igual hasta app.listen...]

// 3. SERVIDOR CON MANEJO DE ERRORES MEJORADO (MODIFICADO)
const server = app.listen(PORT, () => {
    console.log(`\n=== SERVIDOR INICIADO ===`);
    console.log(`URL: http://localhost:${PORT}`);
    console.log(`Temp: ${TEMP_DIR}`);
    console.log(`Logs: ${LOGS_DIR}\n`);
})
.on('error', (err) => {
    console.error('\n❌ ERROR AL INICIAR:', err.message);
    console.log('Posibles soluciones:');
    console.log('1. Verifica que el puerto no esté en uso:');
    console.log('   netstat -ano | findstr :3002');
    console.log('2. Prueba con otro puerto cambiando PORT en .env');
    process.exit(1);
});

// Verificación adicional
server.on('listening', () => {
    console.log('✔ Servidor escuchando correctamente');
});



async function executeScala(code, context = 'default') {
    return new Promise((resolve, reject) => {
        const fileName = `codigo_${Date.now()}.scala`;
        const filePath = path.join(TEMP_DIR, fileName); // USAR DIRECTORIO EXISTENTE

        fs.writeFile(filePath, code, (err) => {
            if (err) return reject(`Error escribiendo archivo: ${err.message}`);

            exec(`scala-cli run ${filePath}`, (error, stdout, stderr) => {
                if (error) {
                    reject(stderr || error.message);
                } else {
                    const fullOutput = stdout + stderr;
                    resolve(fullOutput);
                }
            });
            
        }); 
    });
}




// Endpoint único (usa solo este)
app.post('/execute', async (req, res) => {
    try {
        const { code, context } = req.body;
        if (!code || typeof code !== 'string') {
            return res.status(400).json({ 
                success: false, 
                error: 'Código no proporcionado o formato inválido' 
            });
        }

        const result = await executeScala(code, context || 'default');
        res.json({ success: true, output: result });
        
    } catch (error) {
        console.error('Error en /execute:', error);  // ← Log adicional
        res.status(500).json({ 
            success: false, 
            error: error.toString(),
            stack: process.env.NODE_ENV === 'development' ? error.stack : undefined
        });
    }
});