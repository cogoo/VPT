$(function(){
    
	$('.selectpicker').selectpicker();

	$("#login").submit(function (event) {
        event.preventDefault();
        var form_data = {
            email: $('#email').val(),
            pwd: $('#pwd').val()
        }

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


    $("ul.js-log-header").on('click', 'li', function(e) {
    
    $(this).siblings().removeClass('current');
    $(this).addClass('current');
    $('.'+this.id).siblings().not('.circle-title').hide();
    $('.'+this.id).show();

});


$(".js-activity-item").on('click', function(e) {

    var id = this.id;
    $.ajax({
      url: "/getex/"+id
    })
      .done(function( html ) {
        $( '#ex'+id).html( html );
      });
    $('.activity-list-item-dropdown').hide();
    $('.js-activity-item').removeClass('active blue');
    $(this).addClass('active blue');
    $(this).next('.activity-list-item-dropdown').show();

});

$("ul.js-meal-breakdown").on('click', 'li', function(e) {
    
    $(this).siblings().removeClass('current');
    $(this).addClass('current');
    var id = this.id;
    $.ajax({
      url: "/getmeal/"+id
    })
      .done(function( html ) {
        $( '.diet-box').html( html );
      });

});

/*$("ul.js-sub-log-header").on('click', 'li', function(e) {
    
    $(this).siblings().addBack().removeClass('current complete');
    $(this).addClass('current');
    $(this).prevAll().not('.current').addClass('complete');

});*/


})




