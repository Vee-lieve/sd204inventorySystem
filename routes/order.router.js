const express = require("express");
const router = express.Router();

// const Authorization = require('../middleware/authorization');
// const auth = new Authorization();
const ORDERS = require("../controllers/order.controller")

router.get("/order", /*auth.authorized,*/ ORDERS.GetOrder)
router.get("/order/:id", /* auth.authorized, */ ORDERS.GetOrderById)
router.post("/order", /* auth.authorized, */ ORDERS.SaveOrder)
router.put("/order", /* auth.authorized, */ ORDERS.UpdateOrder)
router.delete("/order/:id", /* auth.authorized, */ ORDERS.DeleteOrder)

module.exports = router;    