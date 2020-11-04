const express = require("express");
const router = express.Router();

// const Authorization = require('../middleware/authorization');
// const auth = new Authorization();
const CASHFLOW = require("../controllers/cashflow.controller")

router.get("/cashflow", /*auth.authorized,*/ CASHFLOW.GetProduct)
router.get("/cashflow/:id", /* auth.authorized, */ CASHFLOW.GetProductById)
router.post("/cashflow", /* auth.authorized, */ CASHFLOW.SaveProduct)
router.put("/cashflow", /* auth.authorized, */ CASHFLOW.UpdateProduct)
router.delete("/cashflow/:id", /* auth.authorized, */ CASHFLOW.DeleteProduct)

module.exports = router;    