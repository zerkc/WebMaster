$(document).ready(function(){
    $('#title').html((MM_USER.sexo?'Bienvenido':'Bienvenida')+' '+MM_USER.name+' a cursos online');
    $('.thumbnail img').each(function(i,e){
        var exit =true;
        $(e).mouseover(function(){
            $('.description',$(this).parent()).css('display','block');
        });
        $('.description',$(e).parent()).mouseout(function(){
            $("h3, p",e).mouseout(function(){
                exit = true;
            });
            $("h3, p",e).mouseover(function(){
                exit = false;
            });
            console.log("se ejecuto");
            if(exit) $(this).fadeOut();
        });
    });
    $('a[pagelink]').each(function(i,e){
        $(e).click(function(){
            $(".container").hide( "explode" ,1000);
            location.href = $(e).attr('pagelink')+'.html';
        });
    });
    if($('.activity').length>0){
        for(var i=0;i<10;i++) {
            $('.activity').append($('<li></li>').append('Actividad '+(i+1)));
        }
    }
    $( ".sortable" ).sortable();
    $( ".sortable" ).disableSelection();
    $(".container").show("blind",2000);
});
