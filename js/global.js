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

        if ($('.visible-xs.mobile-meal').is(':visible')) {

            var id = this.id;

            $.ajax({
              url: "/getmobilemeal/"+id
            })
              .done(function( html ) {
                $('.activity-list-item-dropdown .mobile-meal').html( html );
                var visionTrigger = $('.cd-3d-trigger'),
                galleryItems = $('.no-touch #cd-gallery-items').children('li'),
                galleryNavigation = $('.cd-item-navigation a');

                //on mobile - start/end 3d vision clicking on the 3d-vision-trigger
                visionTrigger.on('click', function(){
                    $this = $(this);
                    if( $this.parent('li').hasClass('active') ) {
                        $this.parent('li').removeClass('active');
                        //hideNavigation($this.parent('li').find('.cd-item-navigation'));
                    } else {
                        $this.parent('li').addClass('active');
                        updateNavigation($this.parent('li').find('.cd-item-navigation'), $this.parent('li').find('.cd-item-wrapper'));
                    }
                });

                //on desktop - update navigation visibility when hovering over the gallery images
                galleryItems.hover(
                    //when mouse enters the element, show slider navigation
                    function(){
                        $this = $(this).children('.cd-item-wrapper');
                        updateNavigation($this.siblings('nav').find('.cd-item-navigation').eq(0), $this);
                    },
                    //when mouse leaves the element, hide slider navigation
                    function(){
                        $this = $(this).children('.cd-item-wrapper');
                        //hideNavigation($this.siblings('nav').find('.cd-item-navigation').eq(0));
                    }
                );

                //change image in the slider
                galleryNavigation.on('click', function(){
                    var navigationAnchor = $(this);
                        direction = navigationAnchor.text(),
                        activeContainer = navigationAnchor.parents('nav').eq(0).siblings('.cd-item-wrapper');
                    
                    ( direction=="Next") ? showNextSlide(activeContainer) : showPreviousSlide(activeContainer);
                    updateNavigation(navigationAnchor.parents('.cd-item-navigation').eq(0), activeContainer);
                });
              });
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

function mobile_week(week){
    if ($('.meal-page').is(':visible')) {
        window.location.replace('/diet/'+week);
    } else {
        window.location.replace('/training/'+week);
    }
}




