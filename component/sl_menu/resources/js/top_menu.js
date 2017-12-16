var element = $(window).width();
var half = (element/3)*2;
//ert($element);
function checkForChanges()
{
	var lastHeight = $(window).width();
    if (lastHeight < half)
    {
    	//save titles in variables first
        //than remove titles
    }
    else
    {
    	//add titles back if they were removed
    }

    setTimeout(checkForChanges, 500);
}

checkForChanges();