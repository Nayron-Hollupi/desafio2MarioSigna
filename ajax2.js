$(function(){
    $('#form').on('submit', function(e){
        e.preventDefault();
        
        var txt = $(this).serialize();
       console.log(txt);
        
        $.ajax({
            type:'GET',
            url:'ajax2.php',
            data:txt,
            
            success: function(resultado){
                $('.div').html(resultado);
            },
            error: function(){
                alert("Ocorreu um erro");
            }
        });
    });
});