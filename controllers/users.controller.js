const User = require("../models/users.model")
const Result = require("../models/result")

module.exports = {
    GetUser(req, res) {
        let result = new Result()
        User.find().then(response => {
            result.message = "List of all users."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, something went wrong."
            result.body = err
            res.json({result})
        })
        // try{
        //     User.find({},(err,data)=>{
        //         if(err){
        //             return err;
        //         }
        //         data = [
        //             {"name":"test"}
        //         ]
        //         res.json({users:data})
        //     })
        // }catch(err){
        //     console.log(err)
        // }
        
    },
    GetUserById(req, res) {
        let result = new Result()
        User.find({_id: req.params.id}, { __v: false }).then(response => {
            result.message = "Get user by id."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, user not found."
            result.body = err
            res.json({result})
        })
    },
    SaveUser(req, res) {
        let result = new Result()
        console.log(req.body)
        let newUser = new User(req.body)
        newUser.save().then(response => {
            result.message = "Successfully added new user."
            result.body = response
            // res.json({result})
            return res.redirect("/home")
        }).catch(err => {
            result.message = "Opps!, Unsuccessful adding of user."
            result.body = err
            res.json({result})
            return res.redirect("/home?error=true")
        })
    },
    UpdateUser(req, res) {
        let result = new Result()
        let data = req.body
        User.findByIdAndUpdate(data.id, data).then(response => {
            result.message = "Successfully updated user."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful update of user."
            result.body = err
            res.json({result})
        })
    },
    DeleteUser(req, res) {
        let result = new Result()
        let id = req.params.id
        User.findByIdAndRemove(id).then(response => {
            result.message = "User sucessfully deleted."
            result.body = response
            res.json({result})
        }).catch(err => {
            result.message = "Opps!, Unsuccessful deletion of user."
            result.body = err
            res.json({result})
        })
    }
};