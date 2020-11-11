var mongoose = require('mongoose');

var ProductSch = new mongoose.Schema({
    category: {
        type: String,
        required: true
    },
    brand: {
        type: String,
        required: true
    },
    productName: {
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
    collection: 'products'
}
);

ProductSch.pre('save', function(next){
    now = new Date();
    this.updatedAt = now;
    this.deletedAt = now;

    if(!this.createdAt) {
        this.createdAt = now
    }
    next();
});

var Product = mongoose.model('Product', ProductSch);

module.exports = Product;