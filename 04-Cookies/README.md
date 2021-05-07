# Cookies
Cookies are text files stored on the client computer and they are kept of use tracking purpose. PHP transparently supports HTTP cookies.
There are three steps involved in identifying returning users −
- Server script sends a set of cookies to the browser. For example name, age, or identification number etc.
- Browser stores this information on local machine for future use.
- When next time browser sends any request to web server then it sends those cookies information to the server and server uses that information to identify the user.
If the browser is configured to store cookies, it will then keep this information until the expiry date. If the user points the browser at any page that matches the path and domain of the cookie, it will resend the cookie to the server.
### Set Cookie
PHP provided setcookie() function to set a cookie. This function requires upto six arguments and should be called before <html> tag. For each cookie this function has to be called separately.
### Delete Cookie
Officially, to delete a cookie you should call setcookie() with the name argument only but this does not always work well, however, and should not be relied on.
It is safest to set the cookie with a date that has already expired –
