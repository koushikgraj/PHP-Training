# HTTP Methods
The Hypertext Transfer Protocol (HTTP) is designed to enable communications between clients and servers.
HTTP works as a request-response protocol between a client and server.
Example: A client (browser) sends an HTTP request to the server; then the server returns a response to the client. The response contains status information about the request and may also contain the requested content.
The two most common HTTP methods are: GET and POST.
Remaining methods we see during API implementation.
### Get method will pass the name & value pair in the URL
Some notes on GET requests are:
- GET requests can be cached
-	GET requests remain in the browser history
-	GET requests can be bookmarked
-	GET requests should never be used when dealing with sensitive data
-	GET requests have length restrictions
-	GET requests are only used to request data (not modify)
-	maximum URL length is 2048 characters

### POST method send the data to server is stored in the request body of the HTTP request:
Some notes on POST requests:
-	POST requests are never cached
-	POST requests do not remain in the browser history
-	POST requests cannot be bookmarked
-	POST requests have no restrictions on data length
-	POST request is better to send large form data
-	POST is a little safer than GET because the parameters are not stored in browser history or in web server logs
-	Binary data is also allowed in post method
