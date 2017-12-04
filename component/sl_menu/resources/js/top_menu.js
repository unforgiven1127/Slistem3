var $element = $(window).width();
alert($element);
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