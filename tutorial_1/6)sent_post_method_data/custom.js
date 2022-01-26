$('#button').click(function(){

    var uname = $('#name').val();
    
   
    $.ajax({
        type: 'post',
        url: 'page.php',
        data: 'user='+uname,
        
        success:function(data){
            $('#contain').html(data);
        }

    });


});