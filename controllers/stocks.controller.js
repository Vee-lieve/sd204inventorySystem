const Stocks = require("../models/stocks.model")
const Result = require("../models/result")

module.exports = {
    GetStock(req, res) {
        let result = new Result()
        Stocks.find({}, { __v: false }).then(response => {
            result.message = "List of all stocks."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, something went wrong."
            result.body = err
            res.json({result})
        })
    },
    GetStockById(req, res) {
        let result = new Result()
        Stocks.find({_id: req.params.id}, { __v: false }).then(response => {
            result.message = "Get stock by id."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, stock not found."
            result.body = err
            res.json({result})
        })
    },
    SaveStock(req, res) {
        let result = new Result()
        console.log(req.body)
        let newStock = new Stocks(req.body)
        newStock.save().then(response => {
            result.message = "Successfully added new stock."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful adding of stock."
            result.body = err
            res.json({result})
        })
    },
    UpdateStock(req, res) {
        let result = new Result()
        let data = req.body
        Stocks.findByIdAndUpdate(data.id, data).then(response => {
            result.message = "Successfully updated stock."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful update of stock."
            result.body = err
            res.json({result})
        })
    },
    DeleteStock(req, res) {
        let result = new Result()
        let id = req.params.id
        Stocks.findByIdAndRemove(id).then(response => {
            result.message = "Stock sucessfully deleted."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful deletion of stock."
            result.body = err
            res.json({result})
        })
    }
};