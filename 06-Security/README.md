# PHP Security functions
They are basically two groups of people that can attack your system
- Hackers – with the intent to gain access to unauthorized data or disrupt the application
- Users – they may innocently enter wrong parameters in forms which can have negative effects on a website or web application.
Some kinds of attacks are
1.	SQL Injection – This type of attack appends harmful code to SQL statements.
2.	Cross-site scripting – this type of attack inserts harmful code usually JavaScript. This is done using user input forms such as contact us and comments forms. This is done to; Retrieve sensitive information such as cookies data, redirects url etc…
### PHP Application Security Best Practices
PHP strip_tags
The strip_tags functions removes HTML, JavaScript or PHP tags from a string.
This function is useful when we have to protect our application against attacks such as cross site scripting.
PHP filter_var function
The filter_var function is used to validate and sanitize data.
Validation checks if the data is of the right type. A numeric validation check on a string returns a false result.
Sanitization is removing illegal characters from a string.
Check this link for the complete reference filter_var
