var MM_USER = null;
$(document).ready(function(){
    $('a').click(function(){
        console.log("se ejecuto");
        $(".container").hide("blind",2000);
    });
});
function alertValidate(campo,validacion){
    msgbox("El Campo ["+campo+"] no cumple la validacion ["+validacion+"]");
}
function msgbox(message){
    $( "#dialogMessage" ).text(message);
    $( "#dialog" ).dialog({
        resizable: false,
        modal:true
    });
}
function validateRegex(value,regex){
    var rex = new RegExp(regex);
    if(value == undefined || value == "") return false;
    return value.replace(rex,"") == "";
}

function validateSession(){
    var user = getCookie("MM_USER");
    if(user == null) location.href ='login.html';
    var usuarios = JSON.parse(getCookie('ALL_USERS'));
    MM_USER = usuarios[user];
}

function setCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        var date = new Date();
        date.setTime(date.getTime() + (30 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}
function delCookie( name ) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return null;
}