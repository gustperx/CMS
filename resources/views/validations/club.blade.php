rules: {
  club_name: {
    required: true
  },
  name: {
    required: true
  },
  lastname: {
    required: true
  },

  email: {
    required: true,
    email :true
  },
  city_id: {
    required: true
  }
},
messages: {
  club_name: {
    required: 'Debe ingresar el Nombre del Usuario'
  },
  name: {
    required: 'Debe ingresar el Nombre'
  },
  lastname: {
    required: 'Debe ingresar el Apellido'
  },
  email: {
    required: 'Debe ingresar el email',
    email :'Debe ingresar un email valido'
  },
  city_id: {
    required: 'Debe seleccionar un Estado'
  }
}
