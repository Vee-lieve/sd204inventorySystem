const { Int32 } = require('bson');
var mongoose = require('mongoose');

var PRODUCTSSch = new mongoose.Schema({
    product_id: {
        type: Int32,
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
        type: Int32,
        required: true
    },
    price: {
        type: Int32,
        required: true
    }
});

var Products = mongoose.model('Products', PRODUCTSSch);

module.exports = Products;