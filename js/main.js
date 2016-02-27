$(document).foundation();

$(function(){

  $('.selectpicker').selectpicker();

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

    $('body').on('click', '.js-show-meal', function(){
      $('body').addClass('noscroll');
      var meal = $(this).data('show');
      $('#sm'+meal).show();
    });

    $('body').on('click', '.js-close-meal', function(){
      $('body').removeClass('noscroll');
      var meal = $(this).data('meal');
      $('#sm'+meal).hide();
    });

    $('form.login input').focus(function(){
      $(this).attr('placeholder','Type here...');
    }).blur(function(){
      $(this).attr('placeholder','');
    });

    //
    $('.js-plan-chooser').on('click','button',function(){
      $('.js-plan-chooser button').html('SELECT').removeClass('inverted').addClass('inverted');
      $(this).html('SELECTED').removeClass('inverted');
    });

    $("#login").submit(function (event) {
        event.preventDefault();
        var form_data = {
            email: $('#email').val(),
            pwd: $('#pwd').val()
        };

        $.ajax({
            url: '/login/check_user',
            type: 'POST',
            data: form_data,
            success: function (result) {
              
               if (result == 'true') {
                
                    window.location.replace('/');
                } else {
                  
                    $('#error').show();
                }
            }
        });
    });


});