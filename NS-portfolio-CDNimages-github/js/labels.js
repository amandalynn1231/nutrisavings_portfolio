	
// $('.label').on('focus blur', function (e) {
//     $(this).parents('.input').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
// }).trigger('blur');


/*

This is the pure javascript equivalent for the following JQuery.

var inputs = document.getElementsByClassName('input');

var i;

for (i = 0; i < inputs.length; i++) {
	inputs[i].addEventListener('keyup', manageLabel);
}

*/


$('.input-wrapper').on('blur', manageLabel);

function manageLabel (e) {
	var label = e.target.parentNode.getElementsByTagName('label')[0];
	e.target.value ? label.className = 'hasValue' : label.className = '';
}

$('.dateNeeded').on('blur', keepDate);

function keepDate (e) {
	e.target.value ? e.target.style.opacity = '0.7' : e.target.style.opacity = '0';
}


// $('#checkbox-wrapper').on('blur', manageFieldset);

// function manageFieldset () {
// 	$('legend').addClass('hasValue');
// }

// $(function(){

// 	$('legend').blur(function(){
//     	$(this).addClass('hasValue');
// 			});
// });

$(function(){

	$('#new-request-form').addClass('hide');
	$('#edits-request-form').addClass('hide');

	$('.new-request').click(function(){
		$('#new-request-form').removeClass('hide');
		$('#edits-request-form').addClass('hide');
		$(this).addClass('selected');
		$('.edits').removeClass('selected')
		$('.new').addClass('selected');
		$('.edit').removeClass('selected');
		// $('.options').addClass('hide');
	})

	// 	$('.new-request').click(function(){
	// 	$('#new-request-form').load('new-request.html');
	// 	$('#edits-request-form').addClass('hide');
	// 	$('#edits-request').addClass('hide');
	// 	// $('.options').addClass('hide');
	// })s

	$('.edits').click(function(){
		$('#edits-request-form').removeClass('hide');
		$('#new-request-form').addClass('hide');
		$(this).addClass('selected');
		$('.new-request').removeClass('selected')
		$('.edit').addClass('selected');
		$('.new').removeClass('selected');
		// $('.options').addClass('hide');
	})

	$('.sliders').addClass('hide');


    $('legend').click(function(){  
        $(this).nextAll('div').toggleClass("hide");
        $(this).hasClass("hasValue")?($(this).attr("class", " ")):($(this).attr("class", "hasValue"));
        $(this).parents('.checkbox-wrapper').toggleClass('noLine');
    });

//     $('.input-wrapper').keyup(function(){
//     	$(this).addClass('focus');
//     })

})
























