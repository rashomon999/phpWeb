const express = require('express');
const bodyParser = require('body-parser');
const { exec } = require('child_process');
const fs = require('fs');
const path = require('path');
const os = require('os');

const app = express();
app.use(bodyParser.json());

// Configuración CORS
app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Headers', 'Content-Type');
    next();
});

// Directorio temporal
const tempDir = path.join(os.tmpdir(), 'scala-temp-3');
if (!fs.existsSync(tempDir)) {
    fs.mkdirSync(tempDir);
}

// Función para ejecutar código Scala
const ejecutarScala = (codigo, res, nombreArchivo) => {
    const archivoPath = path.join(tempDir, nombreArchivo);
    
    try {
        fs.writeFileSync(archivoPath, codigo);
        
        exec(`scala-cli run ${archivoPath}`, { timeout: 5000 }, (error, stdout, stderr) => {
            // Limpiar archivo temporal
            try { fs.unlinkSync(archivoPath); } catch (e) {}
            
            if (error) {
                res.json({ 
                    error: stderr || error.message,
                    salida: stdout 
                });
            } else {
                const salidaLimpia = stdout.split('\n')
                    .filter(line => !line.includes("Compiling") && !line.includes("Compiled"))
                    .join('\n');
                res.json({ salida: salidaLimpia.trim() });
            }
        });
    } catch (err) {
        res.status(500).json({ error: "Error al procesar el código" });
    }
};

// Rutas específicas para tercero.php
app.post('/tercero/ejecutar', (req, res) => {
    let codigo = req.body.codigo;
    if (!codigo.includes('object') && !codigo.includes('@main')) {
        codigo = `object Main extends App {\n${codigo}\n}`;
    }
    ejecutarScala(codigo, res, 'ejecutar_temp.scala');
});

app.post('/tercero/ejecutar2', (req, res) => {
    let codigo = req.body.codigo;
    if (!codigo.includes('object') && !codigo.includes('@main')) {
        codigo = `object Main extends App {\n${codigo}\n}`;
    }
    ejecutarScala(codigo, res, 'ejecutar2_temp.scala');
});

app.post('/tercero/ejecutar2_2', (req, res) => {
    let codigo = req.body.codigo;
    if (!codigo.includes('object') && !codigo.includes('@main')) {
        codigo = `object Main extends App {\n${codigo}\n}`;
    }
    if (codigo.includes('@tailrec') && !codigo.includes('import scala.annotation.tailrec')) {
        codigo = 'import scala.annotation.tailrec\n' + codigo;
    }
    ejecutarScala(codigo, res, 'ejecutar2_2_temp.scala');
});

app.post('/tercero/ejecutar3_2', (req, res) => {
    let codigo = req.body.codigo;
    if (!codigo.includes('object') && !codigo.includes('@main')) {
        codigo = `object Main extends App {\n${codigo}\n}`;
    }
    if (codigo.includes('@tailrec') && !codigo.includes('import scala.annotation.tailrec')) {
        codigo = 'import scala.annotation.tailrec\n' + codigo;
    }
    ejecutarScala(codigo, res, 'ejecutar3_2_temp.scala');
});

app.post('/tercero/ejecutar4', (req, res) => {
    let codigo = req.body.codigo;
    if (!codigo.includes('object') && !codigo.includes('@main')) {
        codigo = `object Main extends App {\n${codigo}\n}`;
    }
    ejecutarScala(codigo, res, 'ejecutar4_temp.scala');
});

app.post('/tercero/ejecutar5', (req, res) => {
    let codigo = req.body.codigo;
    if (!codigo.includes('object') && !codigo.includes('@main')) {
        codigo = `object Main extends App {\n${codigo}\n}`;
    }
    ejecutarScala(codigo, res, 'ejecutar5_temp.scala');
});

// Iniciar servidor
const PORT = 3001; // Puerto diferente al original
app.listen(PORT, () => {
    console.log(`Servidor Tercero corriendo en http://localhost:${PORT}`);
});