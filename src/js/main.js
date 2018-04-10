Waves.attach('.btn:not(.btn-link), .page-link', ['waves-float', 'waves-light']);
Waves.attach('.btn.btn-link', ['waves-float', 'waves-effect']);
Waves.init();

$('[data-toggle="tooltip"]').tooltip();

$('[data-toggle="popover"]').popover();
$("[data-toggle='popover']").on('shown.bs.popover', function(){
    var id = $(this).attr('aria-describedby');
    $(this).data('color') != undefined && ($('#' + id).addClass('popover-' + $(this).data('color') ));
});



"use strict";

/* FLoat Label */

// var fl_input = document.querySelectorAll('.form-control-fl');

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
				addClass(value, el);
				el.addEventListener("keyup", function(){ addClass(event.target.value, el) });
				break;

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


// function materialForm(action){
// 	this.action = action;

// 	switch(this.action) {
// 		case 'new':
// 	        var f_group = document.querySelectorAll('.form-group'),
// 				f_control = document.querySelectorAll('.form-control');

// 			function changeClass(array){
// 				array.forEach(function(els, i){

// 					array[i].forEach(function(el, index){

// 						el.classList.contains('form-group') && (
// 							el.classList.remove('form-group'),
// 							el.classList.add('form-group-fl')
// 						);

// 						el.classList.contains('form-control') && (
// 							el.classList.remove('form-control'),
// 							el.classList.add('form-control-fl')
// 						);

// 					})

// 				})
// 			}
// 			changeClass( [f_group, f_control] );
// 	        break;

// 	    case 'destroy':
// 	        console.log('destroy')
// 	        break;
// 	}
// }

// var test = new materialForm('new');
