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
