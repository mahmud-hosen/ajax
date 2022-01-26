
$(document).ready(function(){
    
$('#loadButton1').click(function(){

    $('#contain1').show();
    $('#contain1').load('page.php');
});



$("#hide").click(function(){
    $("#contain1").hide();
});
});