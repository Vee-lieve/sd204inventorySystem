const { Int32 } = require('bson');
var mongoose = require('mongoose');

var CUSTOMERSSch = new mongoose.Schema({
    customer_id: {
        type: Int32,
        required: true
    },
    customer_name: {
        type: String,
        required: true
    },
    customer_add: {
        type: String,
        required: null
    },
    customer_num: {
        type: String,
        required: true
    }
});

var Customers = mongoose.model('Customers', CUSTOMERSSch);

module.exports = Customers;