class Carrito {
    constructor() {
      this.productos = [];
    }
  
    agregarProducto(producto, cantidad) {
      this.productos.push({ producto, cantidad });
    }
  
    calcularTotal() {
      return this.productos.reduce((total, item) => total + item.producto.precio * item.cantidad, 0);
    }
  }
  