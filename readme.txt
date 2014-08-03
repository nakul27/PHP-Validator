 Description: This file contains list of commonly used PHP functions which can be
 used. Just include this file in your program and you are good to go.
 Refer the readme.txt file for more info and complete list of functions
 it have.

1. is_email($email)
 *  Validates the email address. Make sure to pass the trimmed 
 *  email address.

2. is_mobile($mobile)
 *  Validates the Mobile Number (India) starting with 7/8/9. 
 *  Make sure to pass the trimmed Mobile Number.

3. is_landline($landline)
 *  Validates the Landline Number (India) with STD Code (3 digits). 
 *  Make sure to pass the trimmed Landline Number.

4. is_url($url)
 *  Validates the url. Make sure to pass the trimmed url.

5. is_creditcard($card)
 *  Validates the Visa, Mastercard or Amex Credit Card Number.
 *  Allows spaces, dashes, or no separator between digit.

6. is_roman($roman)
 *  Validates the roman Number between 1(I) to 3999(MMMCMXCIX).

7. is_day($day)
 *  Validates the Days of the week or their abbreviations. 
 *  Example: Monday | Mon | Mo

8. is_month($month)
 *  Validates the Full Name of the Month. 

9. is_US_State_Code($code)
 *  Validates the US Post Code State Codes. Ecample: CA | AL | AL

10. is_US_Zip_Code($zip)
 *  Validates the US Zip Code (5 or 5+4 or 6 digit alphanumeric) 
 *  Example: 44240 | 44240-5555 | G3H 6A3

11. is_img_url($image)
 *  Validates the image url. Validates jpg|jpeg|gif|png 

12. is_US_SSN($ssn)
 *  Validates US social security number seperated by '-'

13. is_class_A_IP($ip)
 *  Validates IANA resrved 24-bit block of IP address space for 
 *  private internets. single class A network number. This is also 
 *  RFC 1918 compliant. Example: 10.0.0.0 | 10.255.255.255

14. is_class_B_IP($ip)
 *  Validates IANA resrved 16-bit block of IP address space.
 *  Single  class B network numbers. This is also 
 *  RFC 1918 compliant. Example: 172.16.0.0 | 172.31.255.255

15. is_class_C_IP($ip)
 *  Validates IANA resrved 16-bit block of IP address space.
 *  Single class C network numbers. This is also 
 *  RFC 1918 compliant. Example: 192.168.0.0 | 192.168.255.255

16. is_css_color($color)
 *  Validates the CSS Color. 
 *  Example: FF0000 #ff0000 555 #123 rgb(0,64,128) rgb(25%,75%,100%)