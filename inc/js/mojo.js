$(document).ready(function() 
{
  	$(".editable").hover(
		function()
		{
			$(this).addClass("editHover");
		}, 
		function()
		{
			$(this).removeClass("editHover");
		}
	);
  
  	$(".editable").bind("click", replaceHTML);
	$(".btnSave, .btnDiscard").live("click", handler);
	
	UI("Ready");
	
	function UI(state)
	{
		var status = {};
		status.Ready = "Ready";
		status.Post = "Saving your data. Please wait...";
		status.Success = "Success! Your edits have been saved.";
		status.Failure = "Attempts to save data failed. Please retry.";
		
		var background = {};
		background.Ready = "#E8F3FF";
		background.Post = "#FAD054";
		background.Success = "#B6FF6C";
		background.Failure = "#FF5353";

		$("#status").animate({opacity: 0}, 200, function (){$("#status").html(status[state]).css({background: background[state]}).animate({opacity: 1}, 200)});
	}
	
	function handler()
		{
			var selector="";
			var code="21";
			if ($(this).hasClass("btnSave"))
				{
					UI("Post");
					var str = $(this).siblings("form").serialize();
					$.ajax({
   							type: "POST",
							async: false,
							timeout: 100,
   							url: "http://idktodo.com/handler.php",
   							data: str,
   							success: function(msg){code = msg;},					
 					});	
					if(code == 1)
					{
						UI("Success");
						selector = "editBox";
					}
					else
					{
						UI("Failure");
						selector = "buffer";
					}
				}
			else {selector = "buffer"}
		
			$(this).parent()
				   .html($(this).siblings("form")
							    .children("."+selector)
								.val())
				   .removeClass("noPad editHover")					   
				   .bind("click", replaceHTML);
				   
			return false;
		} 

	function replaceHTML()
		{
			var buffer = $(this).html()
								.replace(/"/g, "&quot;");
			$(this).addClass("noPad")
					.html("")
					.html("<form class=\"editor edit\"><input type=\"text\" name=\"task\" class=\"editBox\" value=\"" + buffer + "\" /> <input type=\"hidden\" name=\"buffer\" class=\"buffer\" value=\"" + buffer + "\" /><input type=\"hidden\" name=\"task_id\" class=\"record\" value=\"" + $(this).attr("id") + "\" /></form><a href=\"#\" class=\"btnSave\">Save Edits</a> | <a href=\"#\" class=\"btnDiscard\">Discard Edits</a>")
					.unbind('click', replaceHTML);		
		}
}
); 

