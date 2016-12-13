var MM_USER = null;
NodeList.prototype.each = function(fn){
    for (var i = 0; i < this.length; i++){
            fn(i,this[i]);
    }
    return this;
};
NodeList.prototype.focus = function(){
        $(this[0]).focus();
};
NodeList.prototype.click = function(fn){
        $(this[0]).click(fn);
};
NodeList.prototype.off = function(fn){
        $(this[0]).off(fn);
};
NodeList.prototype.keyup = function(fn){
        $(this[0]).keyup(fn);
};
NodeList.prototype.keydown = function(fn){
    $(this[0]).keydown(fn);
};
NodeList.prototype.keypress = function(fn){
    $(this[0]).keypress(fn);
};
NodeList.prototype.mouseover = function(fn){
    $(this[0]).mouseover(fn);
};
NodeList.prototype.mouseout = function(fn){
    $(this[0]).mouseout(fn);
};
NodeList.prototype.css = function (property,name) {
    $(this).each(function(i,e){
        $(e).css(property,name);
    });
};
NodeList.prototype.val = function (value) {
    return $(this[0]).val(value);
};
NodeList.prototype.attr = function (name,value) {
    return $(this[0]).attr(name,value);
};
NodeList.prototype.html = function (value) {
    return $(this[0]).html(value);
};
NodeList.prototype.append = function (value){
    $(this[0]).append(value);
    return this;
};
NodeList.prototype.prepend = function (value){
    $(this[0]).prepend(value);
    return this;
};
Object.prototype.toString = function(){
    if(this.isGObject){
        return this.outerHTML;
    }
    return this;
};
function alertValidate(campo,validacion){
    alert("El Campo ["+campo+"] no cumple la validacion ["+validacion+"]")
}
function validateRegex(value,regex){
    var rex = new RegExp(regex);
    if(value == "") return false;
    return value.replace(rex,"") == "";
}

function validateSession(){
    var user = getCookie("MM_USER");
    if(user == null) location.href ='login.html';
    var usuarios = JSON.parse(getCookie('ALL_USERS'));
    MM_USER = usuarios[user];
}

function $(selector,object){
    var el = null;
    if(selector.isGObject){
        return selector;
    }
    if(typeof selector == 'object'){
        el = selector;
    }else if(new RegExp('<[a-zA-Z]{1,}><\\/[a-zA-Z]{1,}>').test(selector)){
        var element = selector.replace(new RegExp('<\\/[a-zA-Z]{1,}>'),'');
        element = element.replace(new RegExp('<'),'');
        element = element.replace(new RegExp('>'),'');
        el = document.createElement(element);
    }else {
        if(object == undefined) object = document;
        var element = object.querySelectorAll(selector);
        el = element;
    }
    return addEventsAndFunctions(el);
}

function addEventsAndFunctions(elements){
    if((elements) instanceof NodeList){
        for(k in elements){
            addEventsAndFunctions(elements[k]);
        }
    }else{
        if(elements.addEventListener) {
            if(elements == document){
                elements.ready = function(fn){
                    if (this.readyState !== 'loading') {
                        fn()
                    } else {
                        $(document).addEventListener('DOMContentLoaded', fn);
                    }
                };
            }else {
                elements.click = function (fn) {
                    if(fn == undefined){
                        this.click();
                        return;
                    }
                    this.addEventListener('click', fn, false);
                };
            }
            elements.keyup = function(fn){
                this.addEventListener('keyup',fn,false);
            };
            elements.mouseover = function(fn){
                this.addEventListener('mouseover',fn,false);
            };
            elements.mouseout = function(fn){
                this.addEventListener('mouseout',fn,false);
            };
            elements.keydown = function(fn){
                this.addEventListener('keydown',fn,false);
            };
            elements.keypress = function(fn){
                this.addEventListener('keypress',fn,false);
            };
            elements.change = function(fn){
                this.addEventListener('change',fn,false);
            };
            elements.off = function(event){
                if(event == undefined){
                    var el = $(this);
                    var elClone = el.cloneNode(true);
                    el.parentNode.replaceChild(elClone, el);
                }else{
                    this.removeEventListener(event);
                }
            }
        }
        elements.isGObject = true;

        elements.css = function (property,name) {
            this.style = property+':'+name;
        };
        elements.val = function (value) {
            if(value == undefined){
                return this.value;
            }
            this.value = value;
        };
        elements.attr = function (name,value) {
            if(value == undefined){
                return this.getAttribute(name);
            }
             this.setAttribute(name,value);
        };
        elements.html = function (value) {
            if(value == undefined){
                return this.innerHTML;
            }
            this.innerHTML = value;
        };
        elements.append = function (value){
            this.innerHTML += value;
            return this;
        };
        elements.prepend = function (value){
            this.innerHTML = value + this.innerHTML;
            return this;
        };
    }
    return (elements);
}

function setCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        var date = new Date();
        date.setTime(date.getTime() + (3 * 60 * 1000));
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