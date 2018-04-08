 $(document).ready(function(){
	$("#invia").click(function(){
	
	//Recuperiamo tutte le variabili
		var valid = '';
		var isr = ' richiesto.</p>';
		var name = $("#nome").val();
		var mail = $("#email").val();
		var messaggio = $("#messaggio").val();
	//Eseguiamo una serie di controlli
		if (name.length<1) {
			valid += '<p>- Nome valido'+isr;
		}
		
		if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
			valid += '<p>- E-mail valida'+isr;
		}
		
		
	//Se i controlli non vengono superati, appare il messaggio di errore.
		if (valid!='') {
			$("#risposta").fadeIn("slow");
			$("#risposta").html("<p><b></b></p>"+valid);
		}
		//Se i controlli vengono superati, compare un messaggio di invio in corso
		else {
			var datastr ='nome=' + name + '&email=' + mail + '&messaggio=' + encodeURIComponent(messaggio);
			$("#risposta").css("display", "block");
			$("#risposta").html("<p>Invio in corso..</p>");
			$("#risposta").fadeIn("slow");
			setTimeout("send('"+datastr+"')",2000);
		}
		return false;
	});
});
//Creazione della funzione di invio. Si baserà sul nostro file php "mail.php".
function send(datastr){
	$.ajax({	
		type: "POST",
		url: "mail.php",
		data: datastr,
		cache: false,
		success: function(html){
		$("#risposta").fadeIn("slow");
		$("#risposta").html(html);
		setTimeout('$("#risposta").fadeOut("slow")',2000);
	}
	});
}

	