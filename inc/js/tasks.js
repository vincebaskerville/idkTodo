$(document).ready(
	function() {
		$("#sortme").sortable({
			update : function () {
			serial = $('#sortme').sortable('serialize');
				$.ajax({
				url: "http://idktodo.com/inc/sort_menu.php",
				type: "post",
				data: serial,
					error: function(){
					alert("theres an error with AJAX");
						}
				});
			}
		});
	}
);

//===================================================================
//===================================================================
//===================================================================

$(function(){
            function submitForm(){
                $el = $('#add form');
                if ($('#todo', $el).val().length > 1) {
                    var itemid = $('#home ul li').length + 1;
					$('<li><input type="checkbox" value="'+ $('#todo', $el).val() + '" /> <span>' + $('#todo', $el).val() + '</span></li>').appendTo('.incomplete');

                    
	// ADD	 
	 var idk = $('#todo', $el).val();
		$.ajax({
			type: "POST",
			url: "http://idktodo.com/inc/add-update.php",
			data: "&idk="+ idk,
			success: function(){
				$('div.success').fadeIn().fadeOut(4000);

			}
		});
	// ADD
		
                }
                $el.get(0).reset();
                return false;
            }
            $('#add form').submit(submitForm);
            $('#add .whiteButton').click(submitForm);
            $('.complete li, .incomplete li').bind('swipe', function(){
               $(this).toggleClass('editingmode');
            });
            $('input[type="checkbox"]').live('change', function(){
                var $el = $(this);
                if ($el.attr('checked')) {
                    $el.parent().appendTo('.complete');   
                    
     // i2c-update I -> C	
	 var idk = $el.val();
		$.ajax({
			type: "POST",
			url: "http://idktodo.com/inc/i2c-update.php",
			data: "&idk="+ idk,
			success: function(){
				$('div.success').fadeIn().fadeOut(4000);

			}
		});
	//  i2c-update I -> C    
                    
                } else {
                    $el.parent().prependTo('.incomplete');    
                    
			     // c2i-update C -> I	
				 var idk = $el.val();
					$.ajax({
						type: "POST",
						url: "http://idktodo.com/inc/c2i-update.php",
						data: "&idk="+ idk,
						success: function(){
							$('div.success').fadeIn().fadeOut(4000);
			
						}
					});
				//  c2i-update C -> I        
	        
                	}
            	});
        });
        
        
        
// =======
// =======


