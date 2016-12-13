$(document).ready(function(){
    $('#title').html((MM_USER.sexo?'Bienvenido':'Bienvenida')+' '+MM_USER.name+' a cursos online');
    $('.thumbnail').each(function(i,e){
        $(e).mouseover(function(){
            $('.description',this).css('display','block');
        });
        $(e).mouseout(function(){
            $('.description',this).css('display','none');
        });
    });
    $('a[pagelink]').each(function(i,e){
        $(e).click(function(){
            location.href = $(e).attr('pagelink')+'.html';
        });
    });
    if($('.activity').length>0){
        for(var i=0;i<10;i++) {
            $('.activity').append($('<li></li>').append('Actividad '+(i+1)));
        }
    }
});
