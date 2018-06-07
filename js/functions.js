url_coches 	= "testirontec/coches/coches_resource?_format=json";

$(function(){
	
    $('#todos').click(function() {
		$('#metodo').val("1");
		$('#campoId').addClass("nodisplay");
		$('#campoColor').addClass("nodisplay");
	});		
    $('#porId').click(function() {
		$('#metodo').val("2");
		$('#campoId').removeClass("nodisplay");
		$('#campoColor').addClass("nodisplay");
	});
    $('#porColor').click(function() {
		$('#metodo').val("3");
		$('#campoId').addClass("nodisplay");
		$('#campoColor').removeClass("nodisplay");
	});	
    $('#submitConsulta').click(function() {
		$.ajax({
		  url: url_coches,
		  data: $('#formCoches').serialize(),
			dataType:"json",
		  success: function(data) 
		  {
			data=JSON.parse(data);

			if (data.length>0){
				$('#index').addClass("nodisplay");
				$('#resultado').removeClass("nodisplay");
				for (i=0;i<data.length;i++){
					unCoche="<div class='uncoche'>";
					unCoche+="<p>ID: "+data[i].id_coche+"</p>";
					unCoche+="<p>Matricula: "+data[i].matricula+"</p>";
					unCoche+="<p>Color: "+data[i].color+"</p>";
					unCoche+="<p>Kilometros: "+data[i].kilometros+"</p>";
					unCoche+="<p>Propietario: "+data[i].propietario+"</p>";
					unCoche+="<p><img src='"+data[i].foto+"' /></p>";
					unCoche+="</div>";
					$('#cochesResultado').append(unCoche);
				}
				
			}else{
				alert("NO HAY DATOS");
			}

		  },
		  error:function(e)
		  {
			 alert("ERROR");
		  }
			  
		});
	});	
	
    $('#nuevaConsulta').click(function() {
		$('#cochesResultado').html("");
		$('#index').removeClass("nodisplay");
		$('#resultado').addClass("nodisplay");
	});	
	
});
