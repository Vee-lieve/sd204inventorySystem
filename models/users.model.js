const mongoose = require('mongoose');
const { collection } = require('./result');

const UserSch = new mongoose.Schema({
    user: {
        type: String,
        required: true
    },
    email: {
        type: String,
        required: true
    },
    password: {
        type: String,
        required: true
    }
},{
    collection: 'users'
}
);


module.exports =  mongoose.model('User', UserSch)