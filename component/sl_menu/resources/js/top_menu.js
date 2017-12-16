var element = $(window).width();
var half = (element/3)*2;
var count = 0;
var change_flag = 0;
//ert($element);
function checkForChanges()
{
	var lastHeight = $(window).width();
	if(count == 0 && lastHeight > half)
	{
		
		var messaging = document.getElementById('messaging').innerHTML;
		var scheduler = document.getElementById('scheduler').innerHTML;
		var add = document.getElementById('add').innerHTML;
		var view = document.getElementById('view').innerHTML;
		var reports = document.getElementById('reports').innerHTML;
		var contact_sheet = document.getElementById('contact_sheet').innerHTML;
		var tools = document.getElementById('tools').innerHTML;
		count = 1;
	}

    if (lastHeight < half)
    {
    	change_flag = 1;
    	var scheduler1 = document.getElementById('scheduler').innerHTML.replace(" Scheduler", "|");
    	document.getElementById('scheduler').innerHTML = scheduler1;
    }
    else if(count == 1 && change_flag == 1)
    {
    	//alert('here1');
    	document.getElementById('messaging').innerHTML = messaging;
    	document.getElementById('scheduler').innerHTML = scheduler;
    	document.getElementById('add').innerHTML = add;
    	document.getElementById('view').innerHTML = view;
    	document.getElementById('reports').innerHTML = reports;
    	document.getElementById('contact_sheet').innerHTML = contact_sheet;
    	document.getElementById('tools').innerHTML = tools;
    }

    setTimeout(checkForChanges, 500);
}

$(document).ready(function(){
    checkForChanges();
});
