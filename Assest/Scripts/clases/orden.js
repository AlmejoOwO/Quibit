class Orden {
    constructor(id, usuario, productos, total) {
      this.id = id;
      this.usuario = usuario;
      this.productos = productos;
      this.total = total;
      this.fecha = new Date();
    }
  }
  