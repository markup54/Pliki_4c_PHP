const express = require('express');
const res = require('express/lib/response');
const app = express();
const port = 5556;

app.use('/',express.static("public"));

app.get('/hello', (req, res) => {
 res.send('Hello World!!!!');
});
app.get('/hello/:user', (req, res) => {
    const user =req.params.user;
    res.cookie('user_cookie', user);
    res.send('Hello '+user);
   });
app.get('/ciastko/:numer',(req,res)=>{
    const numer = req.params.numer;
    res.cookie('numer_cookie', numer,{maxAge: 60*60*24*7*1000});
    res.send('Ciastko na 1 sekundę');
});
app.get('/logout',(req,res)=>
{
    res.clearCookie('user_cookie');
    res.redirect('/');
});
app.get('/login', (req,res) =>{
    const {imie,nazwisko} = req.query;
    console.log(`Witaj ${imie} ${nazwisko}`);
    res.send(`Witaj ${imie}`);
});
app.listen(port, () => {
    console.log('Adres serwera http://localhost: %s',port);
});
