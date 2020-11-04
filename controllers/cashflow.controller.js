const Cashflow = require("../models/cashflow.model")
const Result = require("../models/result")

module.exports = {
    GetCashflow(req, res) {
        let result = new Result()
        Cashflow.find({}, { __v: false }).then(response => {
            result.message = "List of all sales."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, something went wrong."
            result.body = err
            res.json({result})
        })
    },
    GetCashflowById(req, res) {
        let result = new Result()
        Cashflow.find({_id: req.params.id}, { __v: false }).then(response => {
            result.message = "Get cashflow by id."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, cashflow not found."
            result.body = err
            res.json({result})
        })
    },
    SaveCashflow(req, res) {
        let result = new Result()
        console.log(req.body)
        let newCashflow = new Cashflow(req.body)
        newCashflow.save().then(response => {
            result.message = "Successfully added new cashflow."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful adding of cashflow."
            result.body = err
            res.json({result})
        })
    },
    UpdateCashflow(req, res) {
        let result = new Result()
        let data = req.body
        Cashflow.findByIdAndUpdate(data.id, data).then(response => {
            result.message = "Successfully updated cashflow."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful update of cashflow."
            result.body = err
            res.json({result})
        })
    },
    DeleteCashflow(req, res) {
        let result = new Result()
        let id = req.params.id
        Cashflow.findByIdAndRemove(id).then(response => {
            result.message = "Cashflow sucessfully deleted."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful deletion of cashflow."
            result.body = err
            res.json({result})
        })
    }
};