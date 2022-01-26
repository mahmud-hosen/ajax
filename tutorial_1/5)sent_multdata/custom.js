$('#button').click(function(){

    var uname = $('#name').val();
    
   
    $.ajax({
        url: 'page.php',
        data: 'user='+uname,
        
        success:function(data){
            $('#contain').html(data);
        }

    });


});