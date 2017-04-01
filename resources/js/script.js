// JavaScript Document

window.onload = function () {

	// supprime le contenu des div suivantes
	function clear() {
		$('#lundi').html('');
		$('#mardi').html('');
		$('#mercredi').html('');
		$('#jeudi').html('');
		$('#vendredi').html('');
		$('#samedi').html('');
		$('#dimanche').html('');
	};

	$('.Jiraya').on('click', function(e) {
		 // Dans la classe programmation charge le contenu de la page exemple1.php
		$('.programmation').load('../php/pages/streamers/jiraya.php');
		clear();
	});

	$('.Zerator').click(function() {
		// Dans la classe programmation charge le contenu de la page exemple2.php
		$('.programmation').load('../php/pages/streamers/zerator.php');
		clear();
	});
};
