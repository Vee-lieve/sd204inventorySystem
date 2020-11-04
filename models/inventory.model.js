const { Int32 } = require('bson');
var mongoose = require('mongoose');

var INVENTORYSch = new mongoose.Schema({
    inventory_id: {
        type: Int32,
        required: true
    },
    product_id: {
        type: Int32,
        required: true
    },
    stock_id: {
        type: Int32,
        required: null
    },
    product_name: {
        type: String,
        required: true
    }, 
    desc: {
        type: String,
        required: true
    },
    price: {
        type: Int32,
        required: true
    },
    status: {
        type: String,
        required: true
    }, 
    date_created: {
        type: Date,
        required: true
    },
    date_updated: {
        type: Date,
        required: true
    },
    date_deleted: {
        type: Date,
        required: true
    }
});

var Inventory = mongoose.model('Inventory', INVENTORYSch);

module.exports = Inventory;