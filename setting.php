<?php
//BitCoin Double Engine v 1.0
//Powered by LuxuryInvestor
//Skype: 
// BitCoin Double Engine 
//To work, it is desirable to have PHP 5.6, and expansion MYSQLI, encoding site and database UTF-8.


//For connection to the database
define('HOST', 'localhost');
define('USER', '----------');
define('PASS', '----------');
define('DB', '------------');

define('URL', 'http://coinn.zz.mu'); // URL Site (without / at the end) - you need to generate a payment of purses and handler work
define('WALLET', '------------'); // Your wallet BTC - used in generating purses payment, it goes all enrollment

define('ADMIN_KEY', '12345'); // The key to access the administration panel (/admin/ADMIN_KEY).
define('ADMIN_IP', '0'); // IP to access the administration panel (if IP does not match that specified - access will be closed) if specified 0 - means protection off.
define('SUPPORT_EMAIL', 'support@your_web_site.com'); //IMPORTANT specified operating E-MAIL. E-mail technical support (shown in responses to e-mail - from whom it was).

define('LIMIT', 15); // The number of displayed deposits
define('REWARD', 15); // Interest% fee for referrals
define('CONFIRM', 0); // Number of transaction confirmation, after which it can be displayed in the list.
define('TIMEOUT', 30); //Timeout for user activity, after which activated or sending data (shapes, etc.) so as not spam was (time in seconds)

define('DOUBLE_SUM', 2); // how many times will increase ..
?>