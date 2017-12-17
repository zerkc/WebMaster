NodeList.prototype.each = function(fn) {
  for (var i = 0; i < this.length; i++) {
    fn(i, this[i]);
  }
  return this;
};
NodeList.prototype.focus = function() {
  gQuery(this).each(function(i, e) {
    gQuery(e).focus();
  });
};
NodeList.prototype.click = function(fn) {
  gQuery(this).each(function(i, e) {
    gQuery(e).click(fn);
  });
};
NodeList.prototype.change = function(fn) {
  gQuery(this).each(function(i, e) {
    gQuery(e).change(fn);
  });
};
NodeList.prototype.off = function(fn) {
  gQuery(this).each(function(i, e) {
    gQuery(e).off(fn);
  });
};
NodeList.prototype.keyup = function(fn) {
  gQuery(this).each(function(i, e) {
    gQuery(e).keyup(fn);
  });
};
NodeList.prototype.keydown = function(fn) {
  gQuery(this).each(function(i, e) {
    gQuery(e).keydown(fn);
  });
};
NodeList.prototype.keypress = function(fn) {
  gQuery(this).each(function(i, e) {
    gQuery(e).keypress(fn);
  });
};
NodeList.prototype.mouseover = function(fn) {
  gQuery(this).each(function(i, e) {
    gQuery(e).mouseover(fn);
  });
};
NodeList.prototype.mouseout = function(fn) {
  gQuery(this).each(function(i, e) {
    gQuery(e).mouseout(fn);
  });
};
NodeList.prototype.css = function(property, name) {
  gQuery(this).each(function(i, e) {
    gQuery(e).css(property, name);
  });
};
NodeList.prototype.val = function(value) {
  if(value){
    gQuery(this).each(function(i, e) {
      gQuery(e).val(value);
    });
    return;
  }
  return gQuery(this[0]).val();
};
NodeList.prototype.attr = function(name, value) {
  if(value){
    gQuery(this).each(function(i, e) {
      gQuery(e).attr(name, value);
    });
    return;
  }
  return gQuery(this[0]).attr(name, value);
};
NodeList.prototype.html = function(value) {
  if(value){
    gQuery(this).each(function(i, e) {
      gQuery(e).html(value);
    });
    return;
  }
  return gQuery(this[0]).html();
};
NodeList.prototype.text = function(value) {
  if(value){
    gQuery(this).each(function(i, e) {
      gQuery(e).text(value);
    });
    return;
  }
  return gQuery(this[0]).text();
};
NodeList.prototype.append = function(value) {
  if(value){
    gQuery(this).each(function(i, e) {
      gQuery(e).append(value);
    });
  }
  return this;
};
NodeList.prototype.prepend = function(value) {
  if(value){
    gQuery(this).each(function(i, e) {
      gQuery(e).prepend(value);
    });
  }
  return this;
};
Object.prototype.toString = function() {
  if (this.isGObject) {
    return this.outerHTML;
  }
  return this;
};

gQuery = function(selector, object) {
  var el = null;
  if (selector.isGObject) {
    return selector;
  }
  if (typeof selector == 'object') {
    el = selector;
  } else if (new RegExp('<[a-zA-Z]{1,}>(<\\/[a-zA-Z]{1,}>){0,1}').test(selector)) {

    var element = selector.match(new RegExp("<([a-zA-Z]{1,})>"))[1];
    el = document.createElement(element);
  } else {
    if (object == undefined) object = document;
    var element = object.querySelectorAll(selector);
    el = element;
    if (element.length == 1) {
      el = element[0];
    }
  }
  return addEventsAndFunctions(el);
}

function addEventsAndFunctions(elements) {
  if ((elements) instanceof NodeList) {
    for (k in elements) {
      addEventsAndFunctions(elements[k]);
    }
  } else {
    if (elements.addEventListener) {
      if (elements == document) {
        elements.ready = function(fn) {
          if (this.readyState !== 'loading') {
            fn()
          } else {
            gQuery(document).addEventListener('DOMContentLoaded', fn);
          }
        };
      } else {
        elements.click = function(fn) {
          if (fn == undefined) {
            this.click();
            return;
          }
          this.addEventListener('click', fn, false);
        };
      }
      elements.keyup = function(fn) {
        this.addEventListener('keyup', fn, false);
      };
      elements.mouseover = function(fn) {
        this.addEventListener('mouseover', fn, false);
      };
      elements.mouseout = function(fn) {
        this.addEventListener('mouseout', fn, false);
      };
      elements.keydown = function(fn) {
        this.addEventListener('keydown', fn, false);
      };
      elements.keypress = function(fn) {
        this.addEventListener('keypress', fn, false);
      };
      elements.change = function(fn) {
        this.addEventListener('change', fn, false);
      };
      elements.off = function(event) {
        if (event == undefined) {
          var el = gQuery(this);
          var elClone = el.cloneNode(true);
          el.parentNode.replaceChild(elClone, el);
        } else {
          this.removeEventListener(event);
        }
      }
    }
    elements.isGObject = true;

    elements.css = function(property, name) {
      this.style[property] = name;
    };
    elements.hide = function() {
      gQuery(this).css("display", "none");
    };
    elements.show = function() {
      gQuery(this).css("display", "block");
    };
    elements.val = function(value) {
      if (value == undefined) {
        return this.value;
      }
      this.value = value;
    };
    elements.attr = function(name, value) {
      if (value == undefined) {
        return this.getAttribute(name);
      }
      this.setAttribute(name, value);
    };
    elements.html = function(value) {
      if (value == undefined) {
        return this.innerHTML;
      }
      this.innerHTML = value;
    };
    elements.text = function(value) {
      if (value == undefined) {
        return this.textContent;
      }
      this.textContent = value;
    };
    elements.append = function(value) {
      if (typeof value == 'object') {
          this.appendChild(value);
      } else {
          this.innerHTML += value;
      }
      return this;
    };
    elements.prepend = function(value) {
      this.innerHTML = value + this.innerHTML;
      return this;
    };
  }
  return (elements);
}

window.$g = gQuery;
