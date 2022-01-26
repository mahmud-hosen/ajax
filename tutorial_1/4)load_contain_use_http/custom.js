$('#button').click(function(){

    $.ajax({
        url: 'page.php',
        
        // data return page.php page value & #contain load data in contain page 
        success:function(data){
            $('#contain').html(data);
        }

    });

   


});