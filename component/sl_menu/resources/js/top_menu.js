var element = $(window).width();
var half = element/2;
//ert($element);
function checkForChanges()
{
	var lastHeight = $(window).width();
    if (lastHeight < half)
    {
        alert('xxx');
    }

    setTimeout(checkForChanges, 500);
}

checkForChanges();