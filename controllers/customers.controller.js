const Customers = require("../models/customers.model")
const Result = require("../models/result")

module.exports = {
    GetCustomer(req, res) {
        let result = new Result()
        Customers.find({}, { __v: false }).then(response => {
            result.message = "List of all customers."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, something went wrong."
            result.body = err
            res.json({result})
        })
    },
    GetCustomerById(req, res) {
        let result = new Result()
        Customers.find({_id: req.params.id}, { __v: false }).then(response => {
            result.message = "Get customer by id."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, customer not found."
            result.body = err
            res.json({result})
        })
    },
    SaveCustomer(req, res) {
        let result = new Result()
        console.log(req.body)
        let newCustomer = new Customers(req.body)
        newCustomer.save().then(response => {
            result.message = "Successfully added new customer."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful adding of customer."
            result.body = err
            res.json({result})
        })
    },
    UpdateCustomer(req, res) {
        let result = new Result()
        let data = req.body
        Customers.findByIdAndUpdate(data.id, data).then(response => {
            result.message = "Successfully updated customer."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful update of customer."
            result.body = err
            res.json({result})
        })
    },
    DeleteCustomer(req, res) {
        let result = new Result()
        let id = req.params.id
        Customers.findByIdAndRemove(id).then(response => {
            result.message = "Customer sucessfully deleted."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful deletion of customer."
            result.body = err
            res.json({result})
        })
    }
};