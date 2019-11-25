
const express = require("express");
const app = express();

app.use(express.static(__dirname + '/public'));

app.get("/", inicio);
app.get("/cursos",cursos);

function inicio(req, res)
{
    res.sendFile(__dirname + '/index.html');
}
function cursos(peticion, res)
{
    res.send("Estos son los cursos");
}
app.listen(8989);