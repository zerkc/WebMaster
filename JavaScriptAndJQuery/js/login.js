$('#login').click(login);
$('input').each(function(i,e){
    $(e).keyup(function(e){
        if(e.keyCode == 13)login();
    });
});
function login(){
    if($('#user').val() == ''){
        alert('Usuario no puede estar vacio');
        $('#user').focus();
        return;
    }
    if($('#pass').val() == ''){
        alert('pass no puede estar vacio');
        $('#pass').focus();
        return;
    }
    var usuarios = {};
    if(getCookie('ALL_USERS') != null) {
        usuarios = JSON.parse(getCookie('ALL_USERS'));
    }
    if(usuarios[$('#user').val()] != undefined){
        if(usuarios[$('#user').val()].pass == $('#pass').val()) {
            setCookie('MM_USER',$('#user').val());

            alert((usuarios[$('#user').val()].sexo?'Bienvenido ':'Bienvenida ') + usuarios[$('#user').val()].name);
            location.href = 'index.html';
        }else{
            alert('Error en contraseña');
        }
    }else{
        alert('Usuario no existente');
    }
}