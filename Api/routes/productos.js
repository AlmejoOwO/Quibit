const express = require("express");
const router = express.Router();

// Ejemplo de una ruta
router.get("/", (req, res) => {
  res.json({ message: "Lista de productos" });
});

router.post("/", (req, res) => {
  const { name, price } = req.body;
  res.json({ message: "Producto creado", data: { name, price } });
});

module.exports = router;
