const { Int32 } = require('bson');
var mongoose = require('mongoose');
const { stringify } = require('querystring');

var ORDERSSch = new mongoose.Schema({
    order_id: {
        type: Int32,
        required: true
    },
    customer_name: {
        type: String,
        required: true
    },
    total: {
        type: Int32,
        required: null
    },
    payment_stat: {
        type: String,
        required: true
    }, 
    order_stat: {
        type: String,
        required: true
    }
});

var Orders = mongoose.model('Orders', ORDERSSch);

module.exports = Orders;