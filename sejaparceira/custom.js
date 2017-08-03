
$(document).ready(function(){

	$('#saiba-mais,.saiba-mais').on('click', function(){
		var body = $(this);
		var top = $('.about').offset().top;
		$('html, body').animate({
		       scrollTop: $(".about").offset().top - 20
		}, 2000);
	});
	$('#teste,.teste').on('click', function(){
		var body = $(this);
		var top = $('.about').offset().top;
		$('html, body').animate({
		       scrollTop: $("form").offset().top - 20
		}, 2000);
	});

	

	$('#enviar-seja-parceira').on('click', function(){

	  //mostra o GIF1 animado de loading(item 4)
		$('#enviar-seja-parceira').html('<img src="imgs/loader.gif" />');

		var valido = true;
		if($('#cidade').val() == ""){
			valido = false;
			$('#cidade').css('border-color','red');
		}else{
			$('#cidade').css('border-color','#222');
		}
		if($('#telefone').val() == ""){
			valido = false;
			$('#telefone').css('border-color','red');
		}else{
			$('#telefone').css('border-color','#222');
		}
		if($('#preco').val() == ""){
			valido = false;
			$('#preco').css('border-color','red');
		}else{
			$('#preco').css('border-color','#222');
		}
		if($('#ano').val() == ""){
			valido = false;
			$('#ano').css('border-color','red');
		}else{
			$('#ano').css('border-color','#222');
		}
		if($('#nome').val() == ""){
			valido = false;
			$('#nome').css('border-color','red');
		}else{
			$('#nome').css('border-color','#222');
		}
		if($('#email').val() == ""){
			valido = false;
			$('#email').css('border-color','red');
		}else{
			$('#email').css('border-color','#222');
		}
		/*if($('#prova').val() == "" || $('#prova').val() == '2'){
			valido = false;
			$('#prova').css('border-color','red');
		}else{
			$('#prova').css('border-color','#222');
		}*/

		if(valido == false){
			$('#enviar-seja-parceira').html('Preencha os campos que faltam e envie novamente por aqui!');
			return false;
		}else{
			$('#enviar-seja-parceira').html('<img src="imgs/loader.gif" />');
		}

		var heightForm = $("#enviar-seja-cliente").height();
		if($("#avise").prop( "checked") == true ){
			var avise = 'sim';
		}else{
			var avise = 'não';
		}

		//armazena os valores dentro de uma variavel json
		post_data = {
		  'cidade' : $('#cidade').val(),
		  'nome' : $('#nome').val(),
		  'email' : $('#email').val(),
		  'genero' : $('#genero').val(),
		  'conheceu' : $('#conheceu').val(),
		  'telefone' : $('#telefone').val(),
		  'acessa' : $('#acessa').val(),
		  'ano' : $('#ano').val(),
		  'preco' : $('#preco').val(),
		  'avise' : avise
		};

		var request = $.ajax({
		  url: "envio-parceira.php",
		  method: "POST",
		  data: post_data,
		  dataType: "html"
		});
		 
		request.done(function( msg ) {
		 $('#enviar-seja-parceira').html('Recebemos o seu contato. Aguarde e assim que possível entraremos em contato com você!');
		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  $('#enviar-seja-parceira').html('Nosso servidor está em manutenção. Aguarde enquanto trabalhamos e envie seu contato novamente!');
		});

	 
	});
});

