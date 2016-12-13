$(document).ready(function(){
    $("#registro").click(save);
    $("#pais").change(changePais);
    $("#tel").keyup(deltext);
    $("#tel").keydown(deltext);
    $("#tel").keypress(isNumberKey);
});
function validar(){
    var campos = [
        {
            name:'name',
            pattern:'[a-zA-Z\']{3,}[ ]{0,1}',
            message:'Solo Letras'
        },
        {
            name:'email',
            pattern:'[a-zA-Z0-9\\._\\-]{2,}[@][a-zA-Z0-9\\-]{2,}([\\.][a-zA-Z]{2,}){1,2}',
            message:'Correo Electronico'
        },
        {
            name:'username',
            pattern:'([a-zA-Z]{1,}[a-zA-Z0-9]{0,}){5,}',
            message:'minimo 5 caracteres, debe empezar en letra,no puede contener carecteres especiales'
        },
        {
            name:'tel',
            pattern:'\\(\\+[0-9]{2,3}\\)[ ]{0,}[0-9]{5,}',
            message:'no cumple con el formato de telefono (+000) 999999'
        }
    ]
    for(i in campos){
        if(!validateRegex($("#"+campos[i].name).value,campos[i].pattern)){
            alertValidate(campos[i].name,campos[i].message);
            return false;
        }
    }

    if($('#password').val() != ""){
        if($('#password').val() != $('#confirm').val()){
            alert('las contraseñas no son iguales');
            return false;
        }
    }else{
        alert('la contraseña esta vacia');
        return false;
    }

    return true;
}

function save(){
    var usuarios = {};
    if(getCookie('ALL_USERS') != null) {
        usuarios = JSON.parse(getCookie('ALL_USERS'));
    }
    if(usuarios[$('#username').val()] != undefined){
        alert('nombre de usuario ya existente');
        return;
    }
    if(validar()){
        usuarios[$('#username').val()] = {};
        usuarios[$('#username').val()]['name'] = $('#name').val();
        usuarios[$('#username').val()]['username'] = $('#username').val();
        usuarios[$('#username').val()]['email'] = $('#email').val();
        usuarios[$('#username').val()]['intereses'] = {
            'html':$('#html').checked,
            'css':$('#css').checked,
            'js':$('#js').checked
        };
        usuarios[$('#username').val()]['sexo'] = $('#sexoh').checked?'h':'m';
        usuarios[$('#username').val()]['pais'] = $('#pais').val();
        usuarios[$('#username').val()]['tel'] = $('#tel').val();
        usuarios[$('#username').val()]['pass'] = $('#password').val();
        setCookie('ALL_USERS',JSON.stringify(usuarios),5);
        location.href ='login.html';
    }
}

function changePais(){
    $('#tel').disabled = false;
    $('#tel').val($('#tel').val().replace(new RegExp('\\(\\+[0-9]{2,3}\\)[ ]{0,1}'),""));
    switch (this.val()){
        case "ar":
            $('#tel').val('(+54) '+$('#tel').val());
            break;
        case "ve":
            $('#tel').val('(+58) '+$('#tel').val());
            break;
        default :
            $('#tel').val('');
            $('#tel').disabled = true;
    }
}
function deltext(){
    this.val(this.val().replace(new RegExp('[a-zA-ZÁ-Źá-ź]{1,}'),""));
}
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 46 && charCode > 31
        && (charCode < 48 || charCode > 57))
        return false;

    return true;
}