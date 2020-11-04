const Suppliers = require("../models/suppliers.model")
const Result = require("../models/result")

module.exports = {
    GetSupplier(req, res) {
        let result = new Result()
        Suppliers.find({}, { __v: false }).then(response => {
            result.message = "List of all suppliers."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, something went wrong."
            result.body = err
            res.json({result})
        })
    },
    GetSupplierById(req, res) {
        let result = new Result()
        Suppliers.find({_id: req.params.id}, { __v: false }).then(response => {
            result.message = "Get supplier by id."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, supplier not found."
            result.body = err
            res.json({result})
        })
    },
    SaveSupplier(req, res) {
        let result = new Result()
        console.log(req.body)
        let newSupplier = new Suppliers(req.body)
        newSupplier.save().then(response => {
            result.message = "Successfully added new supplier."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful adding of supplier."
            result.body = err
            res.json({result})
        })
    },
    UpdateSupplier(req, res) {
        let result = new Result()
        let data = req.body
        Suppliers.findByIdAndUpdate(data.id, data).then(response => {
            result.message = "Successfully updated supplier."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful update of supplier."
            result.body = err
            res.json({result})
        })
    },
    DeleteSupplier(req, res) {
        let result = new Result()
        let id = req.params.id
        Suppliers.findByIdAndRemove(id).then(response => {
            result.message = "Supplier sucessfully deleted."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful deletion of supplier."
            result.body = err
            res.json({result})
        })
    }
};