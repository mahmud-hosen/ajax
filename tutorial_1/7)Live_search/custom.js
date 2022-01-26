$('#search').keyup(function(){

    var s = $('#search').val();
    
   
    $.ajax({
        url: 'page.php',
        data: 'Usearch='+s,
        
        success:function(data){
            $('#feedback').html(data);
        }

    });


});