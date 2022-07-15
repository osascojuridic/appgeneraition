
$(document).ready(function(){
	
	$.fn.Ajax = function(identificador , parametros){
		
		return $.ajax({
		  type: "POST",
		  url: "webserver.php",
		  dataType: "json",
		  async : false,
		  beforeSend : function(){

			console.log("antes de enviar");

		  },
		  complete : function(){

			console.log("depois de enviado");

		  },
		  data: { identificador: identificador , parametros: parametros }
		  
		});
		
	};
	
	$.fn.verificarStatus = function(){
		
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
		  data: { identificador: "verificarStatus" , parametros: { id : $("#id").val() } },
		  success : function(data){
			  
			  var item = data[0];
			  
			  if(item.informe.length == 0){
				 
				setTimeout(function(){ $.fn.verificarStatus(); }, 500);
				  
			  } else {
				  
				  $("#formInfo").attr("action", '../' + item.informe +'.php');
				  $("#formInfo").submit();
				 //document.location = '_' + item.informe +'.php';
				  
			  }
			  
		  }
		  
		});
		
	}
	
	
	$.fn.verificarStatus();


});