var mongoose = require('mongoose');

var CustomerSch = new mongoose.Schema({
    customerName: {
        type: String,
        required: true
    },
    address: {
        type: String,
        required: true
    },
    contactNum: {
        type: String,
        required: true
    }

});

var Customer = mongoose.model('Customer', CustomerSch);

module.exports = Customer;