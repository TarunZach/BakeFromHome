
var express = require("express");
const bodyParser = require("body-parser");
var mysql = require("mysql");
const bcrypt = require("bcrypt");
const session = require("express-session");
var localStorage = require("local-storage");
const md5 = require("md5");
//localStorage.backend(sessionStorage);
var app = express();
var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'mysql',
    multipleStatements: true
});
connection.connect((err) => {
    if (!err) {
        console.log("Connected");
    }
    else {
        console.log("Not Connected,", err);
    }
});
app.use(express.static(__dirname + '/public'));
app.use(bodyParser.urlencoded({ extended: true }));
/*app.use(session({
    secret: 'bruh moment',
    resave: false,
    saveUninitialized: true,
}));*/

app.set("view engine", "ejs");
app.get("/", function (req, res) {
    res.sendFile(__dirname + '/public/final.html');
});
app.get("/desserts", function (req, res) {
    var auth2 = localStorage.get('loginstat');
    if (auth2) {
        console.log("User Succesfully logged in");
        res.sendFile(__dirname + '/public/desserts.html');
    }
    else {
        console.log("User not logged in");
        res.redirect("/login");
    }
});
app.get("/login", function (req, res) {
    res.render("login", { error1: "" });
});
app.post("/login", function (req, res) {
    var auth = false;
    var em = req.body.emaillogin;
    var pass = req.body.passlogin;
    var sql = "SELECT * FROM userinfo WHERE email='" + em + "'";
    connection.query(sql, (err, result) => {
        var userPass = md5(result[0].pass);

        if (result.length === 0) {
            console.log(err);
            res.render("login", { error1: "Invalid email" });
        } else {
            bcrypt.compare(pass, userPass, function (err, ress) {
                console.log(ress);
                if (!ress) {
                    res.render("login", { error1: "Invalid password" });
                } else if (err) {
                    console.log("Error: ", err);
                } else {
                    res.redirect("/");
                    auth = true;

                    localStorage.set('loginstat', auth);
                }
            });
        }
    });
});
app.post("/signup", function (req, res) {
    var em = req.body.email;
    var pass = req.body.pass;
    bcrypt.genSalt(10, function (err, salt) {
        bcrypt.hash(pass, salt, function (err, hash) {
            var sql = "INSERT INTO userinfo (pass, email) VALUES ('" + hash + "','" + em + "')";
            connection.query(sql, (err, ress) => {
                if (err) {
                    console.log("error: ", err);
                } else {
                    console.log("Input successful!");
                    res.redirect("/login");

                }
            });
        })
    })
});
app.get("/logout", function (req, res) {
    localStorage.clear();
    res.redirect("/");
});
app.listen(3000);