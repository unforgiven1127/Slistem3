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
	}

    if (lastHeight < half)
    {
    	change_flag = 1;
    	document.getElementById('messaging').innerHTML = document.getElementById('messaging').innerHTML.replace(" Messaging", "");
    	document.getElementById('scheduler').innerHTML = document.getElementById('scheduler').innerHTML.replace(" Scheduler", "");
    	document.getElementById('add').innerHTML = document.getElementById('add').innerHTML.replace("Add", "");
    	document.getElementById('view').innerHTML = document.getElementById('view').innerHTML.replace(" View", "");
    	document.getElementById('reports').innerHTML = document.getElementById('reports').innerHTML.replace("Reports", "");
    	document.getElementById('contact_sheet').innerHTML = document.getElementById('contact_sheet').innerHTML.replace(" Contact sheet", "");
    	document.getElementById('tools').innerHTML = document.getElementById('tools').innerHTML.replace(" Tools", "");    
    }
    else if(count == 1 && change_flag == 1)
    {
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
