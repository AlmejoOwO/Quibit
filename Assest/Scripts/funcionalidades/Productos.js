// src/models/producto.js
const Sequelize = require('Sequelize');

const productoSchema = new mongoose.Schema({
  nombre: { type: String, required: true },
  precio: { type: Number, required: true },
  categoria: { type: String, required: true },
  stock: { type: Number, default: 0 },
  descripcion: { type: String },
}, { timestamps: true });

module.exports = Sequelize.model('Producto', productoSchema);

 

 

 

 