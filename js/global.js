$(function(){

    startTime();
    
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

    $(".js-activity-item.meal").on('click', function(e) {

        if ($(this).next('.activity-list-item-dropdown').is(':visible')) {
            $('.activity-list-item-dropdown').slideUp(500);
            $('.js-activity-item').removeClass('active blue');
        } else {
            $('.activity-list-item-dropdown').hide();
            $('.js-activity-item').removeClass('active blue');
            $(this).addClass('active blue');
            $(this).next('.activity-list-item-dropdown').slideDown(500);
        };

    });

    $(".js-activity-item.exercise").on('click', function(e) {

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
        var id = this.id;
        var split_id = id.split('-');
        
        $('.diet-info.diet'+split_id[1]+' > div').removeClass();
        $('.diet-info.diet'+split_id[1]+' > div').addClass(this.className);
        $(this).siblings().removeClass('current');
        $(this).addClass('current');
        
        var id = this.id;
        $.ajax({
          url: "/getmeal/"+id
        })
          .done(function( html ) {
            $('.diet-info.diet'+split_id[1]+' > div').html( html );
            $('.diet-info.diet'+split_id[1]+' > div .meal-info').val( id );
          });

    });

    $(".diet-info").on('click', 'button.change', function(e) {

        var id = $(this).nextAll('input').val();
        var split_id = id.split('-');
       
        $.ajax({
          url: "/changemeal/"+id
        })
          .done(function( html ) {
            $('.diet-info.diet'+split_id[1]+' > div').html( html );
            $('.diet-info.diet'+split_id[1]+' > div .meal-info').val( id );

          });

    });

    $(".diet-info").on('click', 'button.fav', function(e) {
        //need to fix
        var id = $(this).nextAll('input').val();
        //alert(id);
        var split_id = id.split('-');
       
        $.ajax({
          url: "/changefavmeal/"+id
        })
          .done(function( html ) {
            $('.diet-info.diet'+split_id[1]+' > div').html( html );
            $('.diet-info.diet'+split_id[1]+' > div .meal-info').val( id );

          });

    });

    $(".js-day-complete").on('click', function(e) {

        var id = $(this).next('input').val();
        var btn = $(this);
       
        $.ajax({
          url: "/day/"+id
        })
          .done(function( html ) {
            console.log($(this));
            btn.hide();
          });

    });

    /*$("ul.js-sub-log-header").on('click', 'li', function(e) {
        
        $(this).siblings().addBack().removeClass('current complete');
        $(this).addClass('current');
        $(this).prevAll().not('.current').addClass('complete');

    });*/


})

function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);

    $('.time').html(h+":"+m) ;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}




