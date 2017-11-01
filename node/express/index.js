// app.js – entry point for Node.js application
var express = require('express');
var bodyParser = require('body-parser');

var path = require('path')
var data = require('./users.js')

var app = express();

/* Body Parser Middleware */
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));


app.use(express.static(path.join(__dirname, 'public')));

/* setup view engine */
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));

/* handle GET request */
app.get('/', function(req, res) {
    // res.send('Root URL'); //ถ้าไม่มี Index จะแสดง Root URL
    res.render('index', { // render ‘views/index.ejs’
        title: "Customer List:",
        users: data.users

    });
});
// console.log(users)

app.get('/user', function(req, res) {
    res.json(data.users);
});
app.get('/sotus', function(req, res) {
    res.send('GET Request: Hello World..');
});

app.post('/sotus', function(req, res) {
    res.send('POST Request: Hello World..');
});

app.listen(3000, function() {
    console.log('Server Started on Port 3000…');
});

/* handle POST request */
app.post('/user/add', function(req, res) {
    var newUser = {
        name: req.body.name,
        age: parseInt(req.body.age),
        email: req.body.email
    }
    console.log(newUser);
    data.users.push(newUser);
    res.render('index', { // redirect to ‘/’
        title: 'Customer List',
        users: data.users
    });
});