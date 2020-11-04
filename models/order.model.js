var mongoose = require('mongoose');

var OrdersSch = new mongoose.Schema({
    orderId: {
        type: Number,
        required: true
    },
    customerName: {
        type: String,
        required: true
    },
    total: {
        type: Number,
        required: null
    },
    paymentStat: {
        type: String,
        required: true
    }, 
    orderStat: {
        type: String,
        required: true
    }
});

var Orders = mongoose.model('Orders', OrdersSch);

module.exports = Orders;