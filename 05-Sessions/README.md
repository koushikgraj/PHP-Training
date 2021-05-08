# Sessions
An alternative way to make data accessible across the various pages of an entire website is to use a PHP Session.
A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.
The location of the temporary file is determined by a setting in the php.ini file called session.save_path. Before using any session variable make sure you have setup this path.
When a session is started,
- first creates a unique identifier for that particular session which is a random string of 32 hexadecimal numbers
- A cookie called PHPSESSID is automatically sent to the user's computer to store unique session identification string.
- A file is automatically created on the server in the designated temporary directory and bears the name of the unique identifier prefixed by sess_ ie sess_3c7foj34c3jj973hjkop2fc937e3443.
Starting a PHP Session
A PHP session is easily started by making a call to the session_start() function.This function first checks if a session is already started and if none is started then it starts one. It is recommended to put the call to session_start() at the beginning of the page.
Session variables are stored in associative array called $_SESSION[]. These variables can be accessed during lifetime of a session.

