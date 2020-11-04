const express = require("express");
const router = express.Router();

// const Authorization = require('../middleware/authorization');
// const auth = new Authorization();
const SUPPLIERS = require("../controllers/suppliers.controller")

router.get("/suppliers", /*auth.authorized,*/ SUPPLIERS.GetSupplier)
router.get("/suppliers/:id", /* auth.authorized, */ SUPPLIERS.GetSupplierById)
router.post("/suppliers", /* auth.authorized, */ SUPPLIERS.SaveSupplier)
router.put("/suppliers", /* auth.authorized, */ SUPPLIERS.UpdateSupplier)
router.delete("/suppliers/:id", /* auth.authorized, */ SUPPLIERS.DeleteSupplier)

module.exports = router;    