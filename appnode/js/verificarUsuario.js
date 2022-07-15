// JavaScript Document

$(document).ready(function(){
	
	$.fn.verificarUsuario = function(){
		
		var id = $("#id").val();
		
		$.ajax({
		  type: "POST",
		  url: "webserver.php",
		  dataType: "json",
		  async : true,
		  beforeSend : function(){

			console.log("antes de enviar");

		  },
		  complete : function(){

			console.log("depois de enviado");

		  },
		  data: { identificador: "verificarUsuario" , parametros: id },
		  success : function(data){
			  
			  setTimeout(function(){ $.fn.verificarUsuario(); }, 500);
			  
		  }
		  
		});
		
	};
	
	
	$.fn.verificarUsuario();


});





