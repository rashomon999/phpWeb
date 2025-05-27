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

app.post("/ejecutar2_2", (req, res) => {
    const codigo2_2 = req.body.codigo2_2; // Extraer el código enviado
    const archivoScala2_2 = "codigo2_2.scala";

    fs.writeFileSync(archivoScala2_2, codigo2_2);

    exec(`scala ${archivoScala2_2}`, (error, stdout, stderr) => {
        if (error) {
            res.json({ error: stderr || error.message });
        } else {
            res.json({ salida2_2: stdout });
        }
    });
});


 

app.post("/ejecutar3_2", (req, res) => {
    const codigo3_2 = req.body.codigo3_2; // Extraer el código enviado
    const archivoScala3_2 = "codigo3_2.scala";

    fs.writeFileSync(archivoScala3_2, codigo3_2);

    exec(`scala ${archivoScala3_2}`, (error, stdout, stderr) => {
        if (error) {
            res.json({ error: stderr || error.message });
        } else {
            res.json({ salida3_2: stdout });
        }
    });
});


app.post("/ejecutar4", (req, res) => {
    const pregunta_4 = req.body.pregunta_4;
    const archivoScala4 = "pregunta_4.scala";

    fs.writeFileSync(archivoScala4, pregunta_4);

    exec(`scala ${archivoScala4}`, (error, stdout, stderr) => {
        if (error) {
            res.json({ error: stderr || error.message });
        } else {
            res.json({ salida_4: stdout });
        }
    });
});

app.post("/ejecutar5", (req, res) => {
    const pregunta_5 = req.body.pregunta_5;
    const archivoScala5 = "pregunta_5.scala";

    fs.writeFileSync(archivoScala5, pregunta_5);

    exec(`scala ${archivoScala5}`, (error, stdout, stderr) => {
        if (error) {
            res.json({ error: stderr || error.message });
        } else {
            res.json({ salida_5: stdout });
        }
    });
});

 


 

app.listen(3000, () => {
    console.log("Servidor corriendo en http://localhost:3000");
});



 