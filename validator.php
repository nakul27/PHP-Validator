<?php

/***
 *  ----------------------------------------------------------------
 *  Validates the email address. Make sure to pass the trimmed 
 *  email address.
 *  ----------------------------------------------------------------
 */
function is_email($email){

	if (preg_match('/^[0-9a-zA-Z]+([0-9a-zA-Z]*[-._+])*[0-9a-zA-Z]+@[0-9a-zA-Z]+([-.][0-9a-zA-Z]+)*([0-9a-zA-Z]*[.])[a-zA-Z]{2,6}$/', $email ) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates the Mobile Number (India) starting with 7/8/9. 
 *  Make sure to pass the trimmed Mobile Number.
 *  ----------------------------------------------------------------
 */
function is_mobile($mobile){

	if (preg_match('/(^[7-9][0-9]{9}$)/', $mobile ) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates the Landline Number (India) with STD Code (3 digits). 
 *  Make sure to pass the trimmed Landline Number.
 *  ----------------------------------------------------------------
 */
function is_landline($landline){

	if (preg_match('/(^[0-9]{11}$)/', $landline ) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates the url. Make sure to pass the trimmed url.
 *  ----------------------------------------------------------------
 */
function is_url($url){

	if (get_headers($url)){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates the Visa, Mastercard or Amex Credit Card Number.
 *  Allows spaces, dashes, or no separator between digit.
 *  ----------------------------------------------------------------
 */
function is_creditcard($card){

	if (preg_match('/^((4\d{3})|(5[1-5]\d{2}))(-?|\040?)(\d{4}(-?|\040?)){3}|^(3[4,7]\d{2})(-?|\040?)\d{6}(-?|\040?)\d{5}/', $card ) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates the roman Number between 1(I) to 3999(MMMCMXCIX).
 *  ----------------------------------------------------------------
 */
function is_roman($roman){

	if (preg_match('/^(?i:(?=[MDCLXVI])((M{0,3})((C[DM])|(D?C{0,3}))?((X[LC])|(L?XX{0,2})|L)?((I[VX])|(V?(II{0,2}))|V)?))$/', $roman ) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates the Days of the week or their abbreviations. 
 *  Example: Monday | Mon | Mo
 *  ----------------------------------------------------------------
 */
function is_day($day){

	if (preg_match('/^(Sun|Mon|(T(ues|hurs))|Fri)(day|\.)?$|Wed(\.|nesday)?$|Sat(\.|urday)?$|T((ue?)|(hu?r?))\.?$/', $day ) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates the Full Name of the Month. 
 *  ----------------------------------------------------------------
 */
function is_month($month){

	if (preg_match('/^(?:J(anuary|u(ne|ly))|February|Ma(rch|y)|A(pril|ugust)|(((Sept|Nov|Dec)em)|Octo)ber)$/', $month ) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates the US Post Code State Codes. Ecample: CA | AL | AL
 *  ----------------------------------------------------------------
 */
function is_US_State_Code($code){

	if (preg_match('/^(?-i:A[LKSZRAEP]|C[AOT]|D[EC]|F[LM]|G[AU]|HI|I[ADLN]|K[SY]|LA|M[ADEHINOPST]|N[CDEHJMVY]|O[HKR]|P[ARW]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY])$/', $code ) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates the US Zip Code (5 or 5+4 or 6 digit alphanumeric) 
 *  Example: 44240 | 44240-5555 | G3H 6A3
 *  ----------------------------------------------------------------
 */
function is_US_Zip_Code($zip){

	if (preg_match('/^\d{5}-\d{4}|\d{5}|[A-Z]\d[A-Z] \d[A-Z]\d$/', $zip) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates the image url. Validates jpg|jpeg|gif|png 
 *  ----------------------------------------------------------------
 */
function is_img_url($image){

	if (preg_match('/^(http\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(?:\/\S*)?(?:[a-zA-Z0-9_])+\.(?:jpg|jpeg|gif|png))$/', $image) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates US social security number seperated by '-'
 *  ----------------------------------------------------------------
 */
function is_US_SSN($ssn){

	if (preg_match('/^(00[1-9]|0[1-9][0-9]|[1-6][0-9][0-9]|7[0-6][0-9]|77[0-2]\-\d{2}\-\d{4})$/', $ssn) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates IANA resrved 24-bit block of IP address space for 
 *  private internets. single class A network number. This is also 
 *  RFC 1918 compliant. Example: 10.0.0.0 | 10.255.255.255
 *  ----------------------------------------------------------------
 */
function is_class_A_IP($ip){

	if (preg_match('/^(10\.[0-9]|[1-9][0-9]|[1-2][0-5][0-5]\.[0-9]|[1-9][0-9]|[1-2][0-5][0-5]\.[0-9]|[1-9][0-9]|[1-2][0-5][0-5])$/', $ip) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates IANA resrved 16-bit block of IP address space.
 *  Single  class B network numbers. This is also 
 *  RFC 1918 compliant. Example: 172.16.0.0 | 172.31.255.255
 *  ----------------------------------------------------------------
 */
function is_class_B_IP($ip){

	if (preg_match('/^(172\.1[6-9]|2[0-9]|3[0-1|\.[0-9]|[1-9][0-9]|[1-2][0-5][0-5]\.[0-9]|[1-9][0-9]|[1-2][0-5][0-5])$/', $ip) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates IANA resrved 16-bit block of IP address space.
 *  Single class C network numbers. This is also 
 *  RFC 1918 compliant. Example: 192.168.0.0 | 192.168.255.255
 *  ----------------------------------------------------------------
 */
function is_class_C_IP($ip){

	if (preg_match('/^(172\.1[6-9]|2[0-9]|3[0-1|\.[0-9]|[1-9][0-9]|[1-2][0-5][0-5]\.[0-9]|[1-9][0-9]|[1-2][0-5][0-5])$/', $ip) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}

/***
 *  ----------------------------------------------------------------
 *  Validates the CSS Color. 
 *  Example: FF0000 #ff0000 555 #123 rgb(0,64,128) rgb(25%,75%,100%)
 *  ----------------------------------------------------------------
 */
function is_css_color($color){

	if (preg_match('/^([\#]{0,1}([a-fA-F0-9]{6}|[a-fA-F0-9]{3})|rgb\(([0-9]{1},|[1-9]{1}[0-9]{1},|[1]{1}[0-9]{2},|[2]{1}[0-4]{1}[0-9]{1},|25[0-5]{1},){2}([0-9]{1}|[1-9]{1}[0-9]{1}|[1]{1}[0-9]{2}|[2]{1}[0-4]{1}[0-9]{1}|25[0-5]{1}){1}\)|rgb\(([0-9]{1}%,|[1-9]{1}[0-9]{1}%,|100%,){2}([0-9]{1}%|[1-9]{1}[0-9]{1}%|100%){1}\))$/', $color) ){
		
		return true;	
	}
	else{
	
		return false;
	}
}




?>