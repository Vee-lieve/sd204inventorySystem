const { Int32 } = require('bson');
var mongoose = require('mongoose');

var SUPPLIERSSch = new mongoose.Schema({
    supplier_id: {
        type: Int32,
        required: true
    },
    supplier_name: {
        type: String,
        required: true
    },
    supplier_add: {
        type: String,
        required: null
    },
    supplier_num: {
        type: Int32,
        required: true
    }
});

var Suppliers = mongoose.model('Suppliers', SUPPLIERSSch);

module.exports = Suppliers;