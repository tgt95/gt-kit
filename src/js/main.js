"use strict";

/* FLoat Label */
function FloatLabels(selector){

	selector.forEach(function(el, index){
		var value = el.value, sl_value;

		function addClass(value, el){
			var selector;

			el.nodeName == 'SELECT' ? selector = el.parentNode : selector = el;

			// Wrong <label> position
			if (selector.previousElementSibling != null){
				console.warn("You must move <label> tag in <input> next element");
				return
			};

			if (el.nodeName == 'SELECT'){
				el.options[el.selectedIndex].hasAttribute('selected') || el.selectedIndex != null ? selector.nextElementSibling.classList.add('active') : selector.nextElementSibling.classList.remove('active');
			}
			else{
				value == undefined || value == null || value.length == 0 ? selector.nextElementSibling.classList.remove('active') : selector.nextElementSibling.classList.add('active');
			}
		}

		switch(el.nodeName){

			case 'INPUT':
			case 'TEXTAREA':
				addClass(value, el);
				el.addEventListener("keyup", function(){ addClass(event.target.value, el) });
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
$("[data-toggle='popover']").on('shown.bs.popover', function(){
    var id = $(this).attr('aria-describedby');
    $(this).data('color') != undefined && ($('#' + id).addClass('popover-' + $(this).data('color') ));
});