var mongoose = require('mongoose');

var InventorySch = new mongoose.Schema({
    productId: {
        type: mongoose.Schema.Types.ObjectId,
        ref: 'Product'
    },
    stockId: {
        type: mongoose.Schema.Types.ObjectId,
        ref: 'Stock'
    },
    productName: {
        type: String,
        required: true
    },
    description: {
        type: Number,
        required: true
    },
    price: {
        type: Number,
        required: true
    },
    status: {
        type: String,
        required: true
    },
    createdAt: {
        type: Date,
        default: Date.now
    },
    updatedAt: {
        type: Date,
        default: Date.now
    },
    deletedAt: {
        type: Date,
        default: Date.now
    }
},{
    collection: 'inventories'
}
);

InventorySch.pre('save', function(next){
    now = new Date();
    this.updatedAt = now;
    this.deletedAt = now;

    if(!this.createdAt) {
        this.createdAt = now
    }
    next();
});

var Inventory = mongoose.model('Inventory', InventorySch);

module.exports = Inventory;
var mongoose = require('mongoose');

var StockSch = new mongoose.Schema({
    productId: {
        type: mongoose.Schema.Types.ObjectId,
        ref: 'Product'
    },
    supplierId: {
        type: mongoose.Schema.Types.ObjectId,
        ref: 'Supplier'
    },
    description: {
        type: String,
        required: true
    },
    quantity: {
        type: Number,
        required: true
    },
    totalPrice: {
        type: Number,
        required: true
    },
    createdAt: {
        type: Date,
        default: Date.now
    },
    updatedAt: {
        type: Date,
        default: Date.now
    },
    createdAt: {
        type: Date,
        default: Date.now
    },
    deletedAt: {
        type: Date,
        default: Date.now
    }
});

StockSch.pre('save', function(next){
    now = new Date();
    this.updatedAt = now;
    this.deletedAt = now;

    if(!this.createdAt) {
        this.createdAt = now
    }
    next();
});
