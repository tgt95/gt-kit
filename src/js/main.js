'use strict';
/* FLoat Label */
function validateInput(value, el){
    var selector;

    el.nodeName == 'SELECT' ? selector = el.parentNode : selector = el;

    if(!selector.hasAttribute('required')) return;
    if(value == undefined || value == null || value.length == 0  || value.length == ''){
        selector.classList.add('is-invalid');
        selector.parentNode.classList.add('has-error');
        selector.parentNode.querySelector('.invalid-feedback') != null && (selector.parentNode.querySelector('.invalid-feedback').style.display = 'block');
    }
    else{
        selector.classList.remove('is-invalid');
        selector.parentNode.classList.remove('has-error');
        selector.parentNode.querySelector('.invalid-feedback') != null && (selector.parentNode.querySelector('.invalid-feedback').style.display = 'none');
    }
}

function addClass(value, el){
    var selector;

    el.nodeName == 'SELECT' ? selector = el.parentNode : selector = el;

    // Wrong <label> position
    if (selector.previousElementSibling != null && selector.previousElementSibling.nodeName == 'LABEL'){
        console.warn("You must move <label> tag in <input> next element");
        return
    };

    if (el.nodeName == 'SELECT'){
        var placeholder = el.options[0].getAttribute('placeholder');
        el.options[el.selectedIndex].getAttribute('value') != null && el.options[el.selectedIndex].selected ? ( el.options[0].innerHTML = placeholder, selector.children[1].classList.add('active') ) : ( el.options[0].innerHTML = '', selector.children[1].classList.remove('active') );
    }
    else{
        if(value == undefined || value == null || value.length == 0  || value.length == ''){

            selector.nextElementSibling.classList.contains('bootstrap-datetimepicker-widget') ?
            selector.nextElementSibling.nextElementSibling.classList.remove('active')
            :
            selector.nextElementSibling.classList.remove('active');

        }
        else{
            selector.nextElementSibling.classList.add('active');
            validateInput(selector.value, selector);
        }
    }
}

function FloatLabels(selector){

    selector.forEach(function(el, index){
        var value = el.value, sl_value;


        switch(el.nodeName){

            case 'INPUT':
            case 'TEXTAREA':
                addClass(value, el);
                el.addEventListener("keyup", function(){ addClass(event.target.value, el), validateInput(event.target.value, el) });
                el.addEventListener("change", function(){ addClass(event.target.value, el), validateInput(event.target.value, el) });
                break;

            case 'SELECT':
                addClass(value, el);
                el.addEventListener("change", function(){ addClass(event.target.value, el) });
                break;
        }

    });

}
var fl_input = new FloatLabels(document.querySelectorAll('.form-control-fl')); 


/* Waves Effect */
Waves.attach('.btn:not(.btn-link), .page-link', ['waves-float', 'waves-light']);
Waves.attach('.btn.btn-link', ['waves-float', 'waves-effect']);
Waves.init();

/* Data Toggle */
$('[data-toggle="tooltip"]').tooltip();

$('[data-toggle="popover"]').popover();
$('[data-toggle="popover"]').on('shown.bs.popover', function(){
    var id = $(this).attr('aria-describedby');
    $(this).data('color') != undefined && ($('#' + id).addClass('popover-' + $(this).data('color') ));
});

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
    addClass(event.target.value, this);
});
