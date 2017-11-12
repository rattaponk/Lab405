// =======================
// get the packages we need ============
// =======================
var express = require('express');
var app = express();
var path = require('path')
var bodyParser = require('body-parser');
var morgan = require('morgan');

var mongoose = require('mongoose');

var jwt = require('jsonwebtoken'); // used to create, sign, and verify tokens
var config = require('./config.js'); // get our config file
var User = require('./models/users'); // get our mongoose model
var Users = require('./controllers/userController.js');
var Posts = require('./controllers/postController.js');
var hash = require('./hash');
// =======================
// configuration =========
// =======================
var port = process.env.PORT || config.port; // used to create, sign, and verify tokens
var hostname = config.hostname
mongoose.connect(config.database); // connect to database
app.set('superSecret', config.secret); // secret variable

// use body parser so we can get info from POST and/or URL parameters
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// use morgan to log requests to the console
app.use(morgan('dev'));
// app.use(express.static(path.join(__dirname, 'public')));

/* setup view engine */
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));
// =======================
// routes ================
// =======================
// basic route
var data = [];
app.get('/', (req, res) => {
    User.find((err, users) => {
        data = users;
        if (err) throw err;
        res.render('index', { // render ‘views/index.ejs’
            title: "Customer List:",
            users: data
        });
    });
});


// API ROUTES -------------------
// we'll get to these in a second

// =======================
// start the server ======
// =======================


app.listen(port, hostname, () => {
    console.log('Magic happens at http://' + hostname + ':' + port);
});

app.get('/user', (req, res) => {
    // res.send('/api/users endpoint');
    Users.getUsers(req, res);
});

app.get('/user/:id', (req, res) => {
    var id = req.params.id;
    // res.send('/api/users/' + req.params.id);
    Users.getUserByID(id, function(err, user) {
        if (err) throw err;
        res.json(user);
    })
});
// app.post('/signup', function(req, res) {
//     Users.signup(req, res);
// });

app.post('/login', function(req, res) {
    Users.login(req, res);
});

app.post('/user', function(req, res) {
    var newUser = {
        name: req.body.name,
        age: parseInt(req.body.age),
        email: req.body.email
    }
    Users.insert(req, res, newUser)
        // data.push(newUser);
        // res.render('index', { // render ‘views/index.ejs’
        //     title: "Customer List:",
        //     users: data
        // });
});

app.post('/user/add', function(req, res) {
    var newUser = {
        name: req.body.name,
        age: parseInt(req.body.age),
        email: req.body.email
    }
    Users.insert2(req, res, newUser);
    data.push(newUser);
    res.render('index', { // render ‘views/index.ejs’
        title: "Customer List:",
        users: data
    });
});
app.delete('/user/:id', function(req, res) {
    var uid = req.params.id;
    Users.delete2(req, res, uid)
});
app.put('/user/:id', function(req, res) {
    var uid = req.params.id;
    Users.put2(req, res, uid)
});