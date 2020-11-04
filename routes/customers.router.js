const express = require("express");
const router = express.Router();

// const Authorization = require('../middleware/authorization');
// const auth = new Authorization();
const CUSTOMERS = require("../controllers/customers.controller")

router.get("/customers", /*auth.authorized,*/ CUSTOMERS.GetCustomer) 
router.get("/customers/:id", /* auth.authorized, */ CUSTOMERS.GetCustomerById)
router.post("/customers", /* auth.authorized, */ CUSTOMERS.SaveCustomer)
router.put("/customers", /* auth.authorized, */ CUSTOMERS.UpdateCustomer)
router.delete("/customers/:id", /* auth.authorized, */ CUSTOMERS.DeleteCustomer)

module.exports = router;    