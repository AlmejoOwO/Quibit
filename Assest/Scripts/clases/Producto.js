// Producto.js
export default class Producto {
    constructor(id, nombre, precio, stock) {
      this.id = id;
      this.nombre = nombre;
      this.precio = precio;
      this.stock = stock;
    }
  
    actualizarStock(cantidad) {
      this.stock -= cantidad;
    }
  
    mostrarInfo() {
      return `Producto: ${this.nombre}, Precio: ${this.precio}`;
    }
  }
  