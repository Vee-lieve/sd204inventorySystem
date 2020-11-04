const express = require("express");
const router = express.Router();

// const Authorization = require('../middleware/authorization');
// const auth = new Authorization();
const STOCKS = require("../controllers/stocks.controller")

router.get("/stocks", /*auth.authorized,*/ STOCKS.GetStock)
router.get("/stocks/:id", /* auth.authorized, */ STOCKS.GetStockById)
router.post("/stocks", /* auth.authorized, */ STOCKS.SaveStock)
router.put("/stocks", /* auth.authorized, */ STOCKS.UpdateStock)
router.delete("/stocks/:id", /* auth.authorized, */ STOCKS.DeleteStock)

module.exports = router;    