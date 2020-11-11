const mongoose = require('mongoose');
const { collection } = require('./result');

const SupplierSch = new mongoose.Schema({
    supplierName: {
        type: String,
        required: true
    },
    address: {
        type: String,
        required: true
    },
    contactNum: {
        type: Number,
        required: true
    }
},{
    collection: 'suppliers'
}
);
    
module.exports = mongoose.model('Supplier', SupplierSch);