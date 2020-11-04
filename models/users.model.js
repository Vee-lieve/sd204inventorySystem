var mongoose = require('mongoose');

var USERSSch = new mongoose.Schema({
    name: {
        type: String,
        required: false
    },
    username: {
        type: String,
        required: null
    },
    pass: {
        type: String,
        required: true
    },
    email: {
        type: String,
        required: true
    }
});

var Users = mongoose.model('Users', USERSSch);

module.exports = Users;