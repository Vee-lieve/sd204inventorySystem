var mongoose = require('mongoose');

var ProductSch = new mongoose.Schema({
    name: {
        type: String,
        required: false
    },
    brand: {
        type: String,
        required: null
    }
});

var Products = mongoose.model('Products', ProductSch);

module.exports = Products;