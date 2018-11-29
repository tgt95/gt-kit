'use strict';
/* Float Labels*/
var FloatLabels = function(el){
    this.selector = el;
    this.init(el);
}

FloatLabels.prototype.destroy = function(){
    var self = this, classEl = [document.querySelectorAll('.form-group-fl'), document.querySelectorAll('.form-control-fl')];
    classEl.forEach(function(el, index){
        self.removeClass(el);
    });
}

FloatLabels.prototype.init = function(els){
    var self = this;
    els.forEach(function(el, index){
        self.bindClass(el, el.value);
        self.onFocus(el);
    });
}

FloatLabels.prototype.onFocus = function(el){
    var self = this, eventListener;
    // Event Listener is Change then Select can Bind Class
    el.tagName == 'SELECT' ? eventListener = 'change' : eventListener = 'keyup';
    el.addEventListener(eventListener, function(event){ 
        self.bindClass(el, event.target.value);
    });
}

FloatLabels.prototype.bindClass = function(el, value){
    var label = el.closest('.form-group-fl').querySelector('label');
    value == undefined || value == null || value.length == 0  || value.length == '' ? label.classList.remove('active') : label.classList.add('active');
    if (el.nodeName == 'SELECT'){
        var placeholder = el.options[0].getAttribute('placeholder');
        el.options[el.selectedIndex].getAttribute('value') != null && el.options[el.selectedIndex].selected ? ( el.options[0].innerHTML = placeholder, label.classList.add('active') ) : ( el.options[0].innerHTML = '', label.classList.remove('active') );
    }
}

FloatLabels.prototype.removeClass = function(el){
    el.forEach(function(el, index){
        el.classList.forEach(function(item, index){
            if(item.includes('-fl')){
                var result = item.replace('-fl', '');
                el.classList.remove(item);
                el.classList.add(result);
            }
        });
    });
}


/* Core Init */
var body = $('body'),
    sidebar = $('.sidebar'),
    pageInner = $('.page-inner'),
    navTop = $('.navbar-top');

var Core = {
    Basic : {
        wavesEffect: function() {
            Waves.attach('.btn:not(.btn-link), .page-link', ['waves-float', 'waves-light']);
            Waves.attach('.btn.btn-link, .navbar-top .btn-nav, .side-nav .sidebar-menu a', ['waves-float', 'waves-effect']);
            Waves.init();
        },
        sidebar : function(){
            $('.sidebar .user-info').on('click', function() {
                sidebar.toggleClass('user-info-open');  
            }); 

            $('.sidebar-menu > ul li.has-children > a').on('click', function(event) {
                var parent = $(this).parent(),
                    child = $('.sidebar-menu > ul > li.expand .submenu'),
                    childFirst = parent.find('.submenu').first(),
                    isSubmenu = $(this).closest('.submenu').length;

                isSubmenu > 0 ? isSubmenu = true : isSubmenu = false;

                // Not submenu then go to URL
                !parent.hasClass('submenu') && (event.preventDefault());

                // Collapse all submenu
                !parent.hasClass('expand')&& !$(this).closest('ul').hasClass('submenu') && !isSubmenu && (
                    child.slideToggle(),
                    $('.sidebar-menu > ul li.has-children').removeClass('expand'),
                    $('.sidebar-menu > ul li.has-children .submenu').hide(400)
                );
                
                // Toggle submenu
                parent.toggleClass('expand');
                childFirst.slideToggle();
            });

            $('.sidebar-toggle').on('click', function(event) {
                event.preventDefault();
                body.toggleClass('sidebar-open'); 
            });
        },
        pageInner : function(){
            pageInner.css('min-height', window.innerHeight - navTop.height());
        },
        init : function(){
            this.wavesEffect();
            this.sidebar();
            this.pageInner();
        }
    },
    Component : {
        floatLabels: function() {
            var fl_input = new FloatLabels(document.querySelectorAll('.form-control-fl'));
        },
        tooltip: function() {
            $('[data-toggle="tooltip"]').tooltip();

            $('[data-toggle="popover"]').popover();
            $('[data-toggle="popover"]').on('shown.bs.popover', function(){
                var id = $(this).attr('aria-describedby');
                $(this).data('color') != undefined && ($('#' + id).addClass('popover-' + $(this).data('color') ));
            });
        },
        dateTimePicker: function() {
            /* Datetime Picker */
            $('.datetimepicker').datetimepicker({
                format: 'DD/MM/YYYY',
                icons: {
                    time: "zmdi zmdi-time",
                    date: "zmdi zmdi-calendar",
                    up: "zmdi zmdi-chevron-up",
                    down: "zmdi zmdi-chevron-down",
                    previous: 'zmdi zmdi-chevron-left',
                    next: 'zmdi zmdi-chevron-right',
                    // today: 'fa fa-screenshot',
                    clear: 'zmdi zmdi-delete',
                    close: 'zmdi zmdi-close'
                }
            }).on('dp.change', function(event) {
                // debugger
                // addClass(event.target.value, this);
            });
        },
        init : function(){
            this.floatLabels();
            this.tooltip();
            this.dateTimePicker();
        }
    },
    init : function() {
        this.Basic.init();
        this.Component.init();
    }
}

Core.init();

$(window).resize(function(event) {
    Core.Basic.pageInner();
});

