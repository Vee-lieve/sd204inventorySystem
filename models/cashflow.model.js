var mongoose = require('mongoose');

var CASHFLOWSch = new mongoose.Schema({
    cashflow_id: {
        type: Number,
        required: true
    },
    category: {
        type: String,
        required: true
    },
    brand: {
        type: String,
        required: null
    },
    product_name: {
        type: String,
        required: true
    }, 
    quantity: {
        type: Number,
        required: true
    },
    price: {
        type: Number,
        required: true
    }
});

var Cashflow = mongoose.model('Cashflow', CASHFLOWSch);

module.exports = Cashflow;