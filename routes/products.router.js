const express = require("express");
const router = express.Router();

// const Authorization = require('../middleware/authorization');
// const auth = new Authorization();
const PRODUCTS = require("../controllers/products.controller")

router.get("/products", /*auth.authorized,*/ PRODUCTS.GetProduct)
router.get("/products/:id", /* auth.authorized, */ PRODUCTS.GetProductById)
router.post("/products", /* auth.authorized, */ PRODUCTS.SaveProduct)
router.put("/products", /* auth.authorized, */ PRODUCTS.UpdateProduct)
router.delete("/products/:id", /* auth.authorized, */ PRODUCTS.DeleteProduct)

module.exports = router;    