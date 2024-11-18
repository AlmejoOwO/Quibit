class Cliente {
    constructor(nombre, identificacion, password, direccion, correo) {
      this.nombre = nombre;
      this.identificacion = identificacion;
      this.password = password;
      this.direccion = direccion;
      this.correo = correo;
    }
  }
  
  // para exportar en caso de necesitarlo en otro script  
  export default Cliente

  console.log(cliente)