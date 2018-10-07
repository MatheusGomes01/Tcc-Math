 
$("#tb_infoAnalfabestismo").hide()
$("#obsPvBrasileiro").hide()
$("#imgEstastisticasRazoes").hide()


$("#infoAnalfabestismo" ).click(() => {
	$( "#tb_infoAnalfabestismo" ).toggle( "slow", () => {
    // Animation Tabela de informações sobre o analfabetismo.
});
});

$("#pvBrasileiro" ).click(() => {
	$( "#obsPvBrasileiro" ).toggle( "slow", () => {
    // Animation O Brasil.
});
});


$("#estastisticasRazoes" ).click(() => {
	$( "#imgEstastisticasRazoes" ).toggle( "slow", () => {
    // Animation Motivo por não irem a escola.
});
});
