const Products = require("../models/products.model")
const Result = require("../models/result")

module.exports = {
    GetProduct(req, res) {
        let result = new Result()
        Products.find({}, { __v: false }).then(response => {
            result.message = "List of all products."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, something went wrong."
            result.body = err
            res.json({result})
        })
    },
    GetProductById(req, res) {
        let result = new Result()
        Products.find({_id: req.params.id}, { __v: false }).then(response => {
            result.message = "Get product by id."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, product not found."
            result.body = err
            res.json({result})
        })
    },
    SaveProduct(req, res) {
        let result = new Result()
        console.log(req.body)
        let newProduct = new Products(req.body)
        newProduct.save().then(response => {
            result.message = "Successfully added new product."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful adding of product."
            result.body = err
            res.json({result})
        })
    },
    UpdateProduct(req, res) {
        let result = new Result()
        let data = req.body
        Products.findByIdAndUpdate(data.id, data).then(response => {
            result.message = "Successfully updated product."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful update of product."
            result.body = err
            res.json({result})
        })
    },
    DeleteProduct(req, res) {
        let result = new Result()
        let id = req.params.id
        Products.findByIdAndRemove(id).then(response => {
            result.message = "Product sucessfully deleted."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful deletion of product."
            result.body = err
            res.json({result})
        })
    }
};