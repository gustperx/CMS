rules: {
  email: {
    required: true,
    email:true
  },
  password:{
  	required: true
  }
},
messages: {
  email: {
    required: 'Debe ingresar el email ',
    email: 'Ingrese un correo valido'
  },
  password:{
  	required: 'Debe ingresar su contraseña'
  }
}
