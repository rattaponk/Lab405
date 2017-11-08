var mongoose = require('mongoose');
var config = require('../config'); // get our config file
var User = require('../models/users'); // get our mongoose model

exports.getUsers = function(req, res) {
    User.find((err, users) => {
        if (err) throw err;
        res.json(users);
    });
};

exports.getUserByID = function(uid, callback) {

    User.find({ id: uid }, callback);
};

exports.getOID = function(req, res) {
    User.find((err, users) => {
        if (err) throw err;
        res.json(users);
    });
};

exports.login = function(username, password, callback) {
    User.find({ email: username }, callback);
};