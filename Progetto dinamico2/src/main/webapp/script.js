function validateForm() {
	let x = document.forms["myForm"]["email"].value;
	if (x == "") {
		alert("Inseire un utente");
		return false;
	}
}

//non utilizzato salvato per ricordarlo
$(document).ready(
	function() {
		$("#tabstudenti tr").click(
			function() // ---------  click sulla riga per la modifica dei dati cliente
			{
				var indiceriga = $(this).index(); // ---- indice riga cliccata	    	
				var codice = $("#tabstudenti").find(
					"tr:eq(" + indiceriga + ")").find(
						"td:eq(0)").text(); 
				document.getElementById("inid").value = codice;
			});
	});