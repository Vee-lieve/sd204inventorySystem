const Supplier = require("../models/suppliers.model")
const Result = require("../models/result")

module.exports = {
    GetSupplier(req, res) {
        let result = new Result()
        Supplier.find().then(response => {
            result.message = "List of all suppliers."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, something went wrong."
            result.body = err
            res.json({result})
        })

        //   try{
        //     Supplier.find({},(err,data)=>{
        //         if(err){
        //             return err;
        //         }
            
               
        //     })
        // }catch(err){
        //     console.log(err)
        // }
    },
    GetSupplierById(req, res) {
        let result = new Result()
        Supplier.find({_id: req.params.id}, { __v: false }).then(response => {
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
        let newSupplier = new Supplier(req.body)
        
        newSupplier.save((err,data)=>{
            if(err){
                return err;
            }
            res.redirect('/suppliers')
        })
        // newSupplier.save().then(response => {
        //     result.message = "Successfully added new supplier."
        //     result.body = response
        //     res.json({result})
        // }).catch(err => {
        //     result.message = "Opps!, Unsuccessful adding of supplier."
        //     result.body = err
        //     res.json({result})
        // })
    },
    UpdateSupplier(req, res) {
        let result = new Result()
        let data = req.body
        Supplier.findByIdAndUpdate(data.id, data).then(response => {
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
        Supplier.findByIdAndRemove(id).then(response => {
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