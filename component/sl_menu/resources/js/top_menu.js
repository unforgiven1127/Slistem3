var $element = $(window).width();

function checkForChanges()
{
	alert($element);
	var lastHeight = $(window).width();
    if ($element != lastHeight)
    {
        alert('xxx');
    }

    setTimeout(checkForChanges, 500);
}