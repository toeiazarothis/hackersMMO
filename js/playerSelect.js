document.getElementById("playerSelect").onchange = function(){
	var value = document.getElementById("playerSelect").value;

	//Si on n'est pas sur Selectionner un joueur
	if (value != ""){

		//On affiche le tableau
		document.getElementById("playerSelect-table").style.display = "";

		//On get les info
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'getplayer.php?pseudo=' + encodeURIComponent(value));
		xhr.send(null);

		//Quand XHR a terminé
		xhr.addEventListener('readystatechange', function() {
				//Si le retour et 200 = OK
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
					//On parse le JSON
					var parsed = JSON.parse(xhr.responseText)

					//Fonction temporaire pour definir le texte
					var set = function(toSet, value){
						document.getElementById(toSet).innerText = value;
					}

					//On met toute les valeurs
					set("playerSelect-table-pseudo", parsed.Pseudo);
					set("playerSelect-table-ip", parsed.IP);
					set("playerSelect-table-reputation", parsed.Reputation);
					set("playerSelect-table-rang_particulier", parsed.Rang_Special);
					set("playerSelect-table-information_bonus", parsed.Informations_Sup);
					set("playerSelect-table-nom_de_guilde", parsed.Nom_De_Guilde);
					set("playerSelect-table-blason_guilde", parsed.Blason_Guilde);
				}

    });

	}
	//Sinon on masque le tableau
	else {
		document.getElementById("playerSelect-table").style.display = "none";
	}
}
