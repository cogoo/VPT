$(document).foundation();

$(function(){

	console.log('Callum, I know this has to be you lol, by the time Im done with this it will be completely unhackable. but due to testing and debug, ive left some stuff open :)');

	$('.menu').on('click', function(){
		$('.body').toggleClass('show-menu');
		$('.off-canvas').toggleClass('menu');
	});

	$("#cd-gallery-items").on('click','.js-change', function() {
        //need to fix
        $('.cd-item-front .cd-i-item > div').hide(200);
        var id = $(this).attr('id');
       
        $.ajax({
          url: "/changemeal/"+id
        })
          .done(function( html ) {

          	setTimeout(function(){
	          	$('.cd-item-front .cd-i-item > div').html( html );
		        $('.cd-item-front .cd-i-item > div').show(300);
	          },600);

          });
          
    });

    $(".js-day-complete").on('click', function() {

        var id = $(this).next('input').val();
        var btn = $(this);
       
        $.ajax({
          url: "/day/"+id
        })
          .done(function() {
            btn.addClass('clicked-complete');
            btn.html('<i class="fa fa-check-square-o"></i>');
          });

          if (id == 7) {
          	window.location.href = '/complete/diet';
          }

    });

});