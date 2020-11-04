const express = require("express");
const router = express.Router();

// const Authorization = require('../middleware/authorization');
// const auth = new Authorization();
const INVENTORY = require("../controllers/inventory.controller")

router.get("/inventory", /*auth.authorized,*/ INVENTORY.GetInventory)
router.get("/inventory/:id", /* auth.authorized, */ INVENTORY.GetInventoryById)
router.post("/inventory", /* auth.authorized, */ INVENTORY.SaveInventory)
router.put("/inventory", /* auth.authorized, */ INVENTORY.UpdateInventory)
router.delete("/inventory/:id", /* auth.authorized, */ INVENTORY.DeleteInventory)

module.exports = router;    