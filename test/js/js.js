function apple(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.acer').addClass('hidden').removeClass('show');
	$('.asus').addClass('hidden').removeClass('show');
}

function acer(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.apple').addClass('hidden').removeClass('show');
	$('.asus').addClass('hidden').removeClass('show');
}

function asus(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.acer').addClass('hidden').removeClass('show');
	$('.apple').addClass('hidden').removeClass('show');
}

function windows(){ 
	$('.hidden').addClass('show').removeClass('hidden');
	$('.macos').addClass('hidden').removeClass('show');
	$('.chrome').addClass('hidden').removeClass('show');
}

function chrome(){ 
	$('.hidden').addClass('show').removeClass('hidden');
	$('.macos').addClass('hidden').removeClass('show');
	$('.windows').addClass('hidden').removeClass('show');
}

function macos(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.windows').addClass('hidden').removeClass('show');
	$('.chrome').addClass('hidden').removeClass('show');
}

function silver(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.black').addClass('hidden').removeClass('show');
	$('.white').addClass('hidden').removeClass('show');
}

function black(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.white').addClass('hidden').removeClass('show');
	$('.silver').addClass('hidden').removeClass('show');
}

function white(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.silver').addClass('hidden').removeClass('show');
	$('.black').addClass('hidden').removeClass('show');
}

function AddRow()
{
    $('#myTable').append('<tr><td>test 2</td></tr>');
}

function jbl(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.sony').addClass('hidden').removeClass('show');
	$('.bose').addClass('hidden').removeClass('show');
}

function sony(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.bose').addClass('hidden').removeClass('show');
	$('.jbl').addClass('hidden').removeClass('show');
}

function bose(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.jbl').addClass('hidden').removeClass('show');
	$('.sony').addClass('hidden').removeClass('show');
}

function waterproof(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.notwaterproof').addClass('hidden').removeClass('show');
}

function notwaterproof(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.waterproof').addClass('hidden').removeClass('show');
}

function blue(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.gray').addClass('hidden').removeClass('show');
	$('.black').addClass('hidden').removeClass('show');
}

function gray(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.blue').addClass('hidden').removeClass('show');
	$('.black').addClass('hidden').removeClass('show');
}

function black_speaker(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.gray').addClass('hidden').removeClass('show');
	$('.blue').addClass('hidden').removeClass('show');
}

function speedlink(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.logitechg').addClass('hidden').removeClass('show');
	$('.corsair').addClass('hidden').removeClass('show');
}

function corsair(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.logitechg').addClass('hidden').removeClass('show');
	$('.speedlink').addClass('hidden').removeClass('show');
}

function logitechg(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.speedlink').addClass('hidden').removeClass('show');
	$('.corsair').addClass('hidden').removeClass('show');
}

function wired(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.bluetooth').addClass('hidden').removeClass('show');
	$('.wireless').addClass('hidden').removeClass('show');
}

function bluetooth(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.wired').addClass('hidden').removeClass('show');
	$('.wireless').addClass('hidden').removeClass('show');
}

function wireless(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.wired').addClass('hidden').removeClass('show');
	$('.bluetooth').addClass('hidden').removeClass('show');
}

function gray_keyboard(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.black').addClass('hidden').removeClass('show');
	$('.white').addClass('hidden').removeClass('show');
}

function black_keyboard(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.gray').addClass('hidden').removeClass('show');
	$('.white').addClass('hidden').removeClass('show');
}

function white_keyboard(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.gray').addClass('hidden').removeClass('show');
	$('.black').addClass('hidden').removeClass('show');
}

function apple_mouse(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.logitech').addClass('hidden').removeClass('show');
	$('.speedlink').addClass('hidden').removeClass('show');
}

function logitech_mouse(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.apple').addClass('hidden').removeClass('show');
	$('.speedlink').addClass('hidden').removeClass('show');
}

function speedlink_mouse(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.apple').addClass('hidden').removeClass('show');
	$('.logitech').addClass('hidden').removeClass('show');
}

function red_mouse(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.black').addClass('hidden').removeClass('show');
	$('.white').addClass('hidden').removeClass('show');
}

function black_mouse(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.white').addClass('hidden').removeClass('show');
	$('.red').addClass('hidden').removeClass('show');
}

function white_mouse(){
	$('.hidden').addClass('show').removeClass('hidden');
	$('.red').addClass('hidden').removeClass('show');
	$('.black').addClass('hidden').removeClass('show');
}

var fname,lname,phone,email,address,password,repassword;


function test(){
	fname = document.getElementById("firstName").value;
	lname = document.getElementById("lastName").value;
	phone = document.getElementById("phonenumber").value;
	email = document.getElementById("email").value;
	address = document.getElementById("address").value;
	password = document.getElementById("password").value;
	repassword = document.getElementById("confrimPassword").value;

	phonenumber = isNaN(phone);


	if (fname == "") {
		$('.fname').addClass('showreg');
		$('.fname').removeClass('hidden');
		$('.fname_ok').addClass('hidden');
		$('.fname_ok').removeClass('showreg');
	}
	else{
		$('.fname_ok').addClass('showreg');
		$('.fname_ok').removeClass('hidden');
		$('.fname').addClass('hidden');
		$('.fname').removeClass('showreg');
	}

	if (lname == "") {
		$('.lname').addClass('showreg');
		$('.lname').removeClass('hidden');
		$('.lname_ok').addClass('hidden');
		$('.lname_ok').removeClass('showreg');
	}
	else{
		$('.lname_ok').addClass('showreg');
		$('.lname_ok')..removeClass('hidden');
		$('.lname').addClass('hidden');
		$('.lname').removeClass('showreg');
	}

	if (phone == "") {
		$('.phone').addClass('showreg');
		$('.phone').removeClass('hidden');
		$('.phone_ok').addClass('hidden');
		$('.phone_ok').removeClass('showreg');
	}
	else{
		$('.phone_ok').addClass('showreg');
		$('.phone_ok').removeClass('hidden');
		$('.phone').addClass('hidden');
		$('.phone').removeClass('showreg');
	}

	if (email == "") {
		$('.email').addClass('showreg');
		$('.email').removeClass('hidden');
		$('.email_ok').addClass('hidden');
		$('.email_ok').removeClass('showreg');
	}
	else{
		$('.email_ok').addClass('showreg');
		$('.email_ok').removeClass('hidden');
		$('.email').addClass('hidden');
		$('.email').removeClass('showreg');
	}

	if (address == "") {
		$('.address').addClass('showreg');
		$('.address').removeClass('hidden');
		$('.address_ok').addClass('hidden');
		$('.address_ok').removeClass('showreg');
	}
	else{
		$('.address_ok').addClass('showreg');
		$('.address_ok').removeClass('hidden');
		$('.address').addClass('hidden');
		$('.address').removeClass('showreg');
	}

	if (password == "") {
		$('.password').addClass('showreg');
		$('.password').removeClass('hidden');
		$('.password_ok').addClass('hidden');
		$('.password_ok').removeClass('showreg');
	}
	else{
		$('.password_ok').addClass('showreg');
		$('.password_ok').removeClass('hidden');
		$('.password').addClass('hidden');
		$('.password').removeClass('showreg');
	}

	if (repassword == "") {
		$('.repassword').addClass('showreg');
		$('.repassword').removeClass('hidden');
		$('.repassword_ok').addClass('hidden');
		$('.repassword_ok').removeClass('showreg');
	}
	else{
		$('.repassword_ok').addClass('showreg');
		$('.repassword_ok').removeClass('hidden');
		$('.repassword').addClass('hidden');
		$('.repassword').removeClass('showreg');
	}

	if(fname == "" || lname == "" || phone == "" || email == "" ||address == "" ||password == "" || repassword == ""){
		return false;
	}
	else{
		if (password != repassword) {
			$('.repassword').addClass('showreg');
		    $('.repassword').removeClass('hidden');
		    $('.repassword_ok').addClass('hidden');
		    $('.repassword_ok').removeClass('showreg');
			$('.password').addClass('showreg');
			$('.password').removeClass('hidden');
			$('.password_ok').addClass('hidden');
			$('.password_ok').removeClass('showreg');;

			alert("Passwords do not match");

			return false;
			
		}
		else{
			if (phonenumber == true) {

				$('.phone').addClass('showreg');
				$('.phone').removeClass('hidden');
				$('.phone_ok').addClass('hidden');
				$('.phone_ok').removeClass('showreg');

				alert("Enter a valid phonenumber")
				return false;
			}
		}
	}
}