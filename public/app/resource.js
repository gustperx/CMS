	
function ajaxPost(route,data)
{
	//console.log(route +" " + data )
	$.ajax(
	{

		beforeSend: function()
		{ 
		
			$("#loader").removeClass('hide')

			$("#submit").addClass('hide')

		},

		cache: false,

		type: "POST",

		url: route,

		data: data,

		success: function(data)
		{
			console.log(data)
			$("#loader").addClass('hide')

			$("#submit").removeClass('hide')

			if(data.reset==1)
			{

				$('#form')[0].reset()

			}

			if(data.redirect== null){

				simpleAlert(data.title,data.text,data.type,data.button)

			}
			else
			{

				window.location.replace(data.redirect);				

			}
		},
		error:function()
		{
			$("#loader").addClass("hide")

			$("#submit").removeClass('hide')

			simpleAlert('Malas Noticias','Encontramos problemas con la conexión a Internet','error','Volver a intentar')

		}

	});             

}

function ajaxSelect(route,origin,destination){

	$.ajax(
	{

		beforeSend: function()
		{ 
			origin.prop('disabled',true)

			destination.prop('disabled',true)

			$("#loader").removeClass('hide')

		},

		cache: false,

		type: "GET",

		url: route,

		success: function(data)
		{

			origin.prop('disabled',false)
			
			destination.prop('disabled',false)

			$("#loader").addClass("hide")

			destination.html(data)
			
		},
		error:function()
		{
			$("#loader").addClass("hide")

			origin.prop('disabled',false)

			destination.prop('disabled',false)

			simpleAlert('Malas Noticias','Encontramos problemas con la conexión a Internet','error','Volver a intentar')

		}

	});             


}
function ajaxDelete(route,row)
{
	$.ajax(
	{

		beforeSend: function()
		{ 
		
			$("#loader").removeClass('hide')

			$("#submit").addClass('hide')

		},

		cache: false,

		type: "GET",

		url: route,

		success: function(data)
		{
			simpleAlert(data.title,data.text,data.type,data.button)
			
			row.remove()
		},
		error:function()
		{
			$("#loader").addClass("hide")

			$("#submit").removeClass('hide')

			simpleAlert('Malas Noticias','Encontramos problemas con la conexión a Internet','error','Volver a intentar')

		}

	});             

}


function simpleAlert(title,text,type,button)
{
	swal({

	  title: title,

	  text: text,

	  type: type,

	  confirmButtonText: button

	});
}

function deleteAlert(id,route,row)
{
	swal({
	  title: "Estas Seguro?",
	  text: "Una vez eliminado no podra recuperar la información",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonColor: "#DD6B55",
	  confirmButtonText: "Si, Borralo",
	  cancelButtonText: "No, cancelalo por favor!",
	  closeOnConfirm: false,
	  closeOnCancel: false
	},
	function(isConfirm){
	  if (isConfirm) {
	  	ajaxDelete(id,route,row)
	  } else {
	    swal("Cancelado", " ", "error")
	  }
	});
}
$(document).ready(function(){

    $('.btn-delete').click(function(e){

        e.preventDefault();

        var row = $(this).parents('tr');

        var id = row.data('id');

        var form = $('#form');

        var route = form.attr('action').replace(':ID', id);

        //console.log(route)
        deleteAlert(route,row)

   });

    $('.btn-ajax').change(function(e){

        e.preventDefault();

        origin = $(this);

        destination = $('#'+origin.data('destination'))

        var route = origin.data('route').replace(':ID',origin.val());

       	ajaxSelect(route,origin,destination)

   });

});
