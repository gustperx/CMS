rules: {
  name: {
    required: true
  },
  user_name: {
    required: true
  },
  user_lastname: {
    required: true
  },

  email: {
    required: true,
    email :true
  },
  city_id: {
    required: true
  },
  file:{
    required: true
  }
},
messages: {
  name: {
    required: 'Debe ingresar el Nombre del club'
  },
  user_name: {
    required: 'Debe ingresar el Nombre'
  },
  user_lastname: {
    required: 'Debe ingresar el Apellido'
  },
  email: {
    required: 'Debe ingresar el email',
    email :'Debe ingresar un email valido'
  },
  city_id: {
    required: 'Debe seleccionar un Estado'
  },
  file:{
    required: 'Debe seleccionar el Logo del Club'
  }
}
