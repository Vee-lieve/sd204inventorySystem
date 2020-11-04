const Inventory = require("../models/inventory.model")
const Result = require("../models/result")

module.exports = {
    GetInventory(req, res) {
        let result = new Result()
        Inventory.find({}, { __v: false }).then(response => {
            result.message = "List of all inventories."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, something went wrong."
            result.body = err
            res.json({result})
        })
    },
    GetInventoryById(req, res) {
        let result = new Result()
        Inventory.find({_id: req.params.id}, { __v: false }).then(response => {
            result.message = "Get inventory by id."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, inventory not found."
            result.body = err
            res.json({result})
        })
    },
    SaveInventory(req, res) {
        let result = new Result()
        console.log(req.body)
        let newInventory = new Inventory(req.body)
        newInventory.save().then(response => {
            result.message = "Successfully added new inventory."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful adding of inventory."
            result.body = err
            res.json({result})
        })
    },
    UpdateInventory(req, res) {
        let result = new Result()
        let data = req.body
        Inventory.findByIdAndUpdate(data.id, data).then(response => {
            result.message = "Successfully updated inventory."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful update of inventory."
            result.body = err
            res.json({result})
        })
    },
    DeleteInventory(req, res) {
        let result = new Result()
        let id = req.params.id
        Inventory.findByIdAndRemove(id).then(response => {
            result.message = "Inventory sucessfully deleted."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful deletion of inventory."
            result.body = err
            res.json({result})
        })
    }
};