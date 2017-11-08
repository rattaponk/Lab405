// =======================
// get the packages we need ============
// =======================
var express = require('express');
var app = express();
var bodyParser = require('body-parser');
var morgan = require('morgan');
var mongoose = require('mongoose');

var jwt = require('jsonwebtoken'); // used to create, sign, and verify tokens
var config = require('./config.js'); // get our config file
var User = require('./models/users'); // get our mongoose model
var Users = require('./controllers/userController.js');
var Posts = require('./controllers/postController.js');
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

// =======================
// routes ================
// =======================
// basic route
app.get('/', function(req, res) {
    res.send('Hello! The API is at http://localhost:' + port + '/api');
});

// API ROUTES -------------------
// we'll get to these in a second

// =======================
// start the server ======
// =======================
app.listen(port, hostname, () => {
    console.log('Magic happens at http://' + hostname + ':' + port);
});
app.get('/api/users', (req, res) => {
    // res.send('/api/users endpoint');
    Users.getUsers(req, res);
});
app.get('/api/posts', (req, res) => {
    // res.send('/api/posts endpoint');
    Posts.getPosts(req, res);
});
app.get('/api/users/:id', (req, res) => {
    var id = req.params.id;
    // res.send('/api/users/' + req.params.id);
    Users.getUserByID(id, function(err, user) {
        if (err) throw err;
        res.json(user);
    })
});
app.get('/api/users/oid/:oid', (req, res) => {
    res.send('/api/users/' + req.params.id);
});
app.get('/api/posts/:id', (req, res) => {
    // res.send('/api/posts/' + req.params.id);
    var pid = req.params.id;
    Posts.getPostByID(pid, function(err, user) {
        if (err) throw err;
        res.json(user);
    });
});
app.get('/api/posts/user/:id', (req, res) => {
    // res.send('/api/posts endpoint');
    var uid = req.params.id;
    Posts.getPostsByUID(uid, req, res);
});

app.get('/api/login', function(req, res) {
    var uname = req.params.username;
    var pw = req.params.password;
    if (err) throw err
    if (user && user.length != 0) {
        Users.login(uname, pw, function(err, user) {
            const payload = {
                id: user.id,
                email: user.email,
                admin: user.admin,
            };

            var token = jwt.sign(payload, config.secret, {
                expiresIn: 86400 //in24 hours
            });
        });
    } else {
        return res.json({
            success: false,
            message: 'User not found!',
            token: token
        });
    }
    return res.json({
        success: true,
        message: 'Success',
        token: token
    });
});