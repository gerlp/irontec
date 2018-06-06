url_coches 	= "testirontec/coches/coches_resource?_format=json";

$(function(){
	
    $('#todos').click(function() {
		jQuery('#metodo').val("1");
		jQuery('#campoId').addClass("nodisplay");
		jQuery('#campoColor').addClass("nodisplay");
	});		
    $('#porId').click(function() {
		jQuery('#metodo').val("2");
		jQuery('#campoId').removeClass("nodisplay");
		jQuery('#campoColor').addClass("nodisplay");
	});
    $('#porColor').click(function() {
		jQuery('#metodo').val("3");
		jQuery('#campoId').addClass("nodisplay");
		jQuery('#campoColor').removeClass("nodisplay");
	});	
    $('#submitConsulta').click(function() {
		jQuery.ajax({
		  url: url_coches,
		  data: jQuery('#formCoches').serialize(),
			dataType:"json",
		  success: function(data) 
		  {
			data=JSON.parse(data);

			if (data.length>0){
				jQuery('#index').addClass("nodisplay");
				jQuery('#resultado').removeClass("nodisplay");
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
			 console.log("ERROR"); 
		  }
			  
		});
	});	
	
    $('#nuevaConsulta').click(function() {
		$('#cochesResultado').html("");
		jQuery('#index').removeClass("nodisplay");
		jQuery('#resultado').addClass("nodisplay");
	});	
	
});
