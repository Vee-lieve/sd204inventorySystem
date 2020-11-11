const express = require("express");
const router = express.Router();

// const Authorization = require('../middleware/authorization');
// const auth = new Authorization();
const SUPPLIERS = require("../controllers/suppliers.controller")

router.get("/supplier", /*auth.authorized,*/ SUPPLIERS.GetSupplier)
router.get("/supplier/:id", /* auth.authorized, */ SUPPLIERS.GetSupplierById)
router.post("/supplier", /* auth.authorized, */ SUPPLIERS.SaveSupplier)
router.put("/supplier", /* auth.authorized, */ SUPPLIERS.UpdateSupplier)
router.delete("/supplier/:id", /* auth.authorized, */ SUPPLIERS.DeleteSupplier)

module.exports = router;    