const express = require("express");
const app = express();

//Estou dizendo para o Express usar o EJS como renderizador!
app.set("view engine", "ejs");
app.use(express.static("public"));

app.get("/", (req, res) => {
    res.render("index");
});


app.get("/perguntar", (req, res) => {
    res.render("perguntar");
});

app.listen(3030, () => {
    console.log("App rodando!");
});