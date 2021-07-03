<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


define('ERROR_100', 'Incorrect username or otp');
define('ERROR_101', 'Invalid api key');
define('ERROR_102', 'User exists already');
define('ERROR_103', 'Access token can not be null');
define('ERROR_104', 'Api key can not be null');
define('ERROR_105', 'Invalid access token');
define('ERROR_106', 'hotel id can not be null');
define('ERROR_107', 'Hotel does not exists');
define('ERROR_108', 'longitude can not be null');
define('ERROR_109', 'Not found restaurants');
define('ERROR_110', 'Invalid User id');
define('ERROR_111', 'location can not be null');
define('ERROR_112', 'rooms can not be null');
define('ERROR_113', 'adults can not be null');
define('ERROR_114', 'check in can not be null');
define('ERROR_115', 'checkout can not be null');
define('ERROR_116', 'name can not be null');
define('ERROR_117', 'phone number can not be null');
define('ERROR_118', 'Email already Exists');
define('ERROR_119', 'Unable to insert like details');
define('ERROR_120', 'Unable to update like details');
define('ERROR_121', 'Email does not exist');
define('ERROR_122', 'Phone number does not exist');
define('ERROR_123', 'username can not be null');
define('ERROR_124', 'otp can not be null');
define('ERROR_125', 'comments not found');
define('ERROR_126', 'likes not found');
define('ERROR_127', 'User id can not be null');
define('ERROR_128', 'No dishes found');
define('ERROR_129', 'Search string can not be null');
define('ERROR_130', 'No results found');
define('ERROR_131', 'Order data can not be null');
define('ERROR_132', 'Table id can not be null');
define('ERROR_133', 'Sorry , unable to book order');
define('ERROR_134', 'Sorry , your crossed the bounds');
define('ERROR_135', 'Invalid Email id');
define('ERROR_136', 'Give Password length is atlease 8 charecters');
define('ERROR_137', 'Password is invalid');
define('ERROR_138', 'Password length is atlease 6 charecters');
define('ERROR_139', 'Password containing at least one lowercase letter');
define('ERROR_140', 'Password containing at least one uppercase letter');
define('ERROR_141', 'Password containing at least one number');
define('ERROR_142', 'Password containing at least a special character');
define('ERROR_143', 'Invalid like value,Like should containg 0,1');
define('ERROR_144', 'You successfully unliked the object');
define('ERROR_145', 'Order id can not be null');
define('ERROR_146', 'Payment Mode can not be null');
define('ERROR_147', 'Payment Mode is invalid');
define('ERROR_148', 'Unable to update the order checkout details');
define('ERROR_149', 'Not found any ordered dishes found');
define('ERROR_150', 'Restaurant id can not be null');
define('ERROR_151', 'No Orders found');
define('ERROR_151AR', 'لم يتم العثور على أوامر');
define('ERROR_152AR', 'يرجى الانتظار سوف نادل أن يكون معك في لحظة');
define('ERROR_152', 'Feedback can not be null');
define('ERROR_153', 'You successfully sent the feedback');
define('ERROR_154', 'Sorry,Unable to sent the feedback');
define('ERROR_155', 'Feedback Type can not be null');
define('ERROR_156', 'Invalid value, Notification should be 0,1');
define('ERROR_157', 'Notification value can not be null');
define('ERROR_158', 'User settings not found');
define('ERROR_159', 'No Results found');
define('ERROR_160', 'Unable to update the user profile data');
define('ERROR_161', 'Email id not registered');
define('ERROR_162', 'Password reset link has been sent to your email id');
define('ERROR_163', 'Unable to update user profile');
define('ERROR_164', 'Category Id can not be null');
define('ERROR_165', 'Object id is not exist');
define('ERROR_166', 'Order id can not be null');
define('ERROR_167', 'Incorrect language Option in request');
define('ERROR_168', 'Table not present in the given restaurant');
define('ERROR_169', 'Order id is not valid');
define('ERROR_170', 'User settings not found');
define('ERROR_171', 'Email ID already exists'); 
define('ERROR_172', 'Email ID mismatch in social login');
define('ERROR_173', 'Item quantity in order is not valid');
define('ERROT_174', 'Social ID does not exist');
define('ERROT_175', 'Qrcode is already scanned');
define('ERROT_176', 'Sorry,Something went wrong');
define('ERROT_177', 'QR code is cannot be null');
define('ERROT_178', 'Sorry ,unable to place a order beacause payment is already done');
define('ERROT_179', 'Mobile No is cannot be null');
define('ERROT_180', 'Please enter a valid number');
define('ERROT_181', 'Mobile number must be 10');
define('ERROT_182', 'Your order is expired ,please try again');
define('ERROT_183', 'Sorry,Your already placed the order in one table,So another table is not possible');

/*Cobnstatnt values*/
define("SMS_USERNAME", "faceone");
define("SMS_PASSWORD", "salu");
define("SMS_FROM", "OLAKTE");
define("SMS_URL", "http://sms.scubedigi.com/api.php");
define("SMS_PEID", "1501667280000019636");
define("SMS_TEMPOTP", "1507162116007298338");
define("ROUTE_ID", "24");
define("USER_DEFAULT_IMG", "uploads/default_images/user.png");
define("noreply", "noreply@olakite.co.in");