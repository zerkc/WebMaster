NodeList.prototype.each = function(fn){
    for (var i = 0; i < this.length; i++){
            fn(i,this[i]);
    }
    return this;
};
NodeList.prototype.focus = function(){
        gQuery(this[0]).focus();
};
NodeList.prototype.click = function(fn){
        gQuery(this).each(function(i,e){
            gQuery(e).click(fn);
        });0
};
NodeList.prototype.change = function(fn){
        gQuery(this).each(function(i,e){
            gQuery(e).change(fn);
        });0
};
NodeList.prototype.off = function(fn){
        gQuery(this[0]).off(fn);
};
NodeList.prototype.keyup = function(fn){
        gQuery(this[0]).keyup(fn);
};
NodeList.prototype.keydown = function(fn){
    gQuery(this[0]).keydown(fn);
};
NodeList.prototype.keypress = function(fn){
    gQuery(this[0]).keypress(fn);
};
NodeList.prototype.mouseover = function(fn){
    gQuery(this[0]).mouseover(fn);
};
NodeList.prototype.mouseout = function(fn){
    gQuery(this[0]).mouseout(fn);
};
NodeList.prototype.css = function (property,name) {
    gQuery(this).each(function(i,e){
        gQuery(e).css(property,name);
    });
};
NodeList.prototype.val = function (value) {
    return gQuery(this[0]).val(value);
};
NodeList.prototype.attr = function (name,value) {
    return gQuery(this[0]).attr(name,value);
};
NodeList.prototype.html = function (value) {
    return gQuery(this[0]).html(value);
};
NodeList.prototype.append = function (value){
    gQuery(this[0]).append(value);
    return this;
};
NodeList.prototype.prepend = function (value){
    gQuery(this[0]).prepend(value);
    return this;
};
Object.prototype.toString = function(){
    if(this.isGObject){
        return this.outerHTML;
    }
    return this;
};

gQuery = function(selector,object){
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
        if(element.length == 1){
            el = element[0];
        }
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
                        gQuery(document).addEventListener('DOMContentLoaded', fn);
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
                    var el = gQuery(this);
                    var elClone = el.cloneNode(true);
                    el.parentNode.replaceChild(elClone, el);
                }else{
                    this.removeEventListener(event);
                }
            }
        }
        elements.isGObject = true;

        elements.css = function (property,name) {
            this.style[property] = name;
        };
        elements.hide = function(){
            gQuery(this).css("display","none");
        };
        elements.show = function(){
            gQuery(this).css("display","block");
        };
        elements.fadeOut = function(){
        	var e = gQuery(this);
        	e.css("-moz-transition", "All 0.8s");
        	e.css("-webkit-transition", "All 0.8s");
        	e.css("transition","All 0.8s");
        	e.css("opacity","0");
        	setTimeout(function(){
        		e.hide();
        		e.css("opacity","1");
        		e.css("-moz-transition", "");
        		e.css("-webkit-transition", "");
        		e.css("transition","");
        	},2000);
        }
        elements.fadeIn = function(){

        }
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

window.$g = gQuery;