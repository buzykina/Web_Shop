window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

var n=0;
function AddToBasket() {
n = n+1;
document.getElementById('number').innerHTML = n;
zeroNumber();
}
function zeroNumber(){
	if(document.getElementById('number') .innerHTML==0)
	{
		document.getElementById('box').style.display = "none";
	}	else
	{
		document.getElementById('box').style.display = "block";
	}
}
function filter(){
	document.getElementById('Filter').style.display = "none";
	document.getElementById('otherfilters').style.cssText = "display:block !important";
	if(document.getElementById('Brand_radio').checked)
	{
		document.getElementById('Brand').style.cssText = 'display:block !important';
	}
	if(document.getElementById('OS_radio').checked)
	{
		document.getElementById('OS').style.cssText = 'display:block !important';
	}
	if(document.getElementById('Price_radio').checked)
	{
		document.getElementById('Price').style.cssText = 'display:block !important';
	}
	if(document.getElementById('Colour_radio').checked)
	{
		document.getElementById('Colour').style.cssText = 'display:block !important';
	}
}
function otherfilters(){
	document.getElementsByClassName('otherfilters').style.cssText = "display:none !important";
	document.getElementById('OS').style.cssText = 'display:none !important';
	document.getElementById('Brand').style.cssText = 'display:none !important';
	document.getElementById('Price').style.cssText = 'display:none !important';
	document.getElementById('Colour').style.cssText = 'display:none !important';
	document.getElementById('Filter').style.cssText = 'display:block !important';
	
}
