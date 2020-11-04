var mongoose = require('mongoose');

var SupplierSch = new mongoose.Schema({
    supplierName: {
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

var Supplier = mongoose.model('Supplier', SupplierSch);

module.exports = Supplier;