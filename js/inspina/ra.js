$(function(){

	var $sortablea = $('#sortable').sortable({
		placeholder: "ui-state-highlight",
        update: function(event, ui) {
        	
            var counter = 1;
            $('li', $sortablea).each(function() {
            	
                $(this).attr('position', counter);

                var form_data = {
			        id : $(this).attr('id'),
			        pos : counter
			        
			    }

			    counter++;

			    $.ajax({
			        url: '/admin/save_pos',
			        type: 'POST',
			        data: form_data,
			        success: function (result) {          
			           
			          }
			    });

            });
        }
    });

    var $sortable = $('#sortable-tour').sortable({
		placeholder: "ui-state-highlight",
        update: function(event, ui) {
            var counter = 1;
            $('li', $sortable).each(function() {
                $(this).attr('position', counter);
                


                var form_data = {
			        id : $(this).attr('id'),
			        pos : counter
			        
			    }

			    counter++;

			    $.ajax({
			        url: '/admin/save_pos_tour',
			        type: 'POST',
			        data: form_data,
			        success: function (result) {          
			           
			          }
			    });

            });
        }
    });

	
	$( "#sortable" ).disableSelection();

})

function show(a)
{
	$('.'+a).show();
}
$('#confirm_tour_delete').on('click', function () {
    var r = confirm("Do you want to delete this?");
    if (r == true) {
        alert("/admin/delete_tour/" + $(this).attr('data-tour-id'));
        window.location.href = "/admin/delete_tour/" + $(this).attr('data-tour-id');
        return false;
    }
    else {
        return false;
    }
});
$('#confirm_delete').on('click', function () {
    var r=confirm("Do you want to delete this?");
    if (r==true) {
        window.location = "/admin/edel/" + $(this).attr('data-section-id') + "/" + $(this).attr('data-tour-id');
    }
    else {
        return false;
    }
});

