$(function(){
            function submitForm(){
                $el = $('#add');
                if ($('#todo', $el).val().length > 1) {
                    var itemid = $('#home ul li').length + 1;
					$('<form name="u_lists" action="tasks.php" method="POST"><input type="submit" name="listname" value="'+ $('#todo', $el).val() + '" class="awesome2" ><a href="javascript:listname('+ $('#todo', $el).val() + ')" ></a></form>').appendTo('.incomplete');
					
					//$('<li><a href="lists/'+ $('#todo', $el).val() + '" > <span>' + $('#todo', $el).val() + '</span></a></li>').appendTo('.incomplete');
					
					//$('<form name=\"u_lists\" action=\"tasks.php\" method=\"POST\"><input type=\"submit\" name=\"listname\" value="'+ $('#todo', $el).val() + '" class=\"awesome2\" ><a href=\"javascript:listname("'+ $('#todo', $el).val() + '")\" name=\"listname\" value="'+ $('#todo', $el).val() + '" ></a><br /></form>');
                    
	// ADD	 
	 var idk = $('#todo', $el).val();
		$.ajax({
			type: "POST",
			url: "http://idktodo.com/inc/add-list.php",
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
                    $el.parent().prependTo('.complete');   
                    
                         
                } else {
                    $el.parent().appendTo('.incomplete');    
                    
			     
	        
                	}
            	});
        });
        
        
        
// =======
// =======


