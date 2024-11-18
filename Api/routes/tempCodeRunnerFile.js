const { Router } = require("express");
const router = Router();

const productos = require("../productos.json"); // Asegúrate de que la ruta a productos.json sea correcta
console.log("Lista de productos cargada correctamente");

// Ruta para obtener los productos
router.get("/productos", (req, res) => {
  res.json(productos); // Responde con el contenido del archivo JSON
});

module.exports = router;
