const Orders = require("../models/order.model")
const Result = require("../models/result")

module.exports = {
    GetOrder(req, res) {
        let result = new Result()
        Orders.find({}, { __v: false }).then(response => {
            result.message = "List of all orders."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, something went wrong."
            result.body = err
            res.json({result})
        })
    },
    GetOrderById(req, res) {
        let result = new Result()
        Orders.find({_id: req.params.id}, { __v: false }).then(response => {
            result.message = "Get order by id."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, order not found."
            result.body = err
            res.json({result})
        })
    },
    SaveOrder(req, res) {
        let result = new Result()
        console.log(req.body)
        let newOrder = new Orders(req.body)
        newOrder.save().then(response => {
            result.message = "Successfully added new order."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful adding of order."
            result.body = err
            res.json({result})
        })
    },
    UpdateOrder(req, res) {
        let result = new Result()
        let data = req.body
        Orders.findByIdAndUpdate(data.id, data).then(response => {
            result.message = "Successfully updated order."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful update of order."
            result.body = err
            res.json({result})
        })
    },
    DeleteOrder(req, res) {
        let result = new Result()
        let id = req.params.id
        Orders.findByIdAndRemove(id).then(response => {
            result.message = "Order sucessfully deleted."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful deletion of order."
            result.body = err
            res.json({result})
        })
    }
};