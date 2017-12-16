var element = $(window).width();
var half = (element/3)*2;
//ert($element);
function checkForChanges()
{
	var messaging = 'Messaging';
	var scheduler = 'Scheduler';
	var add = 'Add';
	var view = 'View';
	var reports = 'Reports';
	var contact_sheet ='Contact sheet';
	var tools = 'Tools';

	var menu_items = $('.mainMenuItems');

	var lastHeight = $(window).width();
    if (lastHeight < half)
    {
    	menu_items.each(function() {
    		var text = $(this).text();
    		//alert(text);
		  $(this).text("");
		});
    }
    else if($('#messaging').text() == '')
    {
    	$('#messaging').text(messaging);
    	$('#scheduler').text(scheduler);
    	$('#add').text(add);
    	$('#view').text(view);
    	$('#reports').text(reports);
    	$('#contact_sheet').text(contact_sheet);
    	$('#tools').text(tools);
    }

    setTimeout(checkForChanges, 500);
}

checkForChanges();