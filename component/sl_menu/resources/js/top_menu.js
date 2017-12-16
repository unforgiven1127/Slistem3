var element = $(window).width();
var half = (element/3)*2;
var count = 0;
var change_flag = 0;
var messaging = '';
var scheduler = '';
var add = '';
var view = '';
var reports = '';
var tools = '';
var contact_sheet = '';
//ert($element);
function checkForChanges()
{
	var lastHeight = $(window).width();
	if(count == 0 && lastHeight > half)
	{
		messaging = document.getElementById('messaging').innerHTML;
		scheduler = document.getElementById('scheduler').innerHTML;
		add = document.getElementById('add').innerHTML;
		view = document.getElementById('view').innerHTML;
		reports = document.getElementById('reports').innerHTML;
		contact_sheet = document.getElementById('contact_sheet').innerHTML;
		tools = document.getElementById('tools').innerHTML;
		count = 1;
		alert(messaging);
	}

    if (lastHeight < half)
    {
    	change_flag = 1;
    	var scheduler1 = document.getElementById('scheduler').innerHTML.replace(" Scheduler", "|");
    	document.getElementById('scheduler').innerHTML = scheduler1;
    }
    else if(count == 1 && change_flag == 1)
    {
    	alert(messaging);
    	change_flag = 0;
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
