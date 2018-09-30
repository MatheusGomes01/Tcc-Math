 
$("#tb_infoAnalfabestismo").hide()
$("#obsPvBrasileiro").hide()
$("#imgEstastisticasRazoes").hide()

$("#infoAnalfabestismo" ).click(() => {
	$( "#tb_infoAnalfabestismo" ).toggle( "slow", function() {
    // Animation Tabela de informações sobre o analfabetismo.
});
});

$("#pvBrasileiro" ).click(() => {
	$( "#obsPvBrasileiro" ).toggle( "slow", function() {
    // Animation O Brasil.
});
});


$("#estastisticasRazoes" ).click(() => {
	$( "#imgEstastisticasRazoes" ).toggle( "slow", function() {
    // Animation Motivo por não irem a escola.
});
});

