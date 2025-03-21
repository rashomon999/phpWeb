const express = require("express");
const bodyParser = require("body-parser");
const { exec } = require("child_process");
const fs = require("fs");

const app = express();
app.use(bodyParser.json());

// Nueva ruta para probar que el servidor funciona
app.get("/", (req, res) => {
    res.send("Servidor funcionando correctamente");
});

// Ruta para ejecutar código Scala
app.post("/ejecutar", (req, res) => {
    const codigo = req.body.codigo;
    const archivoScala = "codigo.scala";

    // Guardar el código en un archivo
    fs.writeFileSync(archivoScala, codigo);

    // Ejecutar Scala
    exec(`scala ${archivoScala}`, (error, stdout, stderr) => {
        if (error) {
            res.json({ error: stderr || error.message });
        } else {
            res.json({ salida: stdout });
        }
    });
});


app.post("/ejecutar2", (req, res) => {
    const codigo2 = req.body.codigo2; // Extraer el código enviado
    const archivoScala2 = "codigo2.scala";

    fs.writeFileSync(archivoScala2, codigo2);

    exec(`scala ${archivoScala2}`, (error, stdout, stderr) => {
        if (error) {
            res.json({ error: stderr || error.message });
        } else {
            res.json({ salida2: stdout });
        }
    });
});


app.listen(3000, () => {
    console.log("Servidor corriendo en http://localhost:3000");
});
