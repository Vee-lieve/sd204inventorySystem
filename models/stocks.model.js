const { Int32 } = require('bson');
var mongoose = require('mongoose');

var STOCKSSch = new mongoose.Schema({
    stock_id: {
        type: Int32,
        required: true
    },
    product_id: {
        type: Int32,
        required: true
    },
    supplier_id: {
        type: Int32,
        required: true
    },
    stock_date: {
        type: String,
        required: true
    },
    desc: {
        type: String,
        required: null
    },
    quantity: {
        type: Int32,
        required: true
    },
    total: {
        type: Int32,
        required: true
    },
    date_created: {
        type: Date,
        required: null
    },
    date_updated: {
        type: Date,
        required: null
    },
    date_deleted: {
        type: Date,
        required: null
    }
});

var Stocks = mongoose.model('Stocks', STOCKSSch);

module.exports = Stocks;