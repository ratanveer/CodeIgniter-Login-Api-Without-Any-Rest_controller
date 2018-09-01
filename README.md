# Simple Codeigniter REST API
Simple source code for learning basic backend developer using REST API (login, CRUD).


# Setup
Download or clone [Master File](simple-CodeIgniter-Login-Api-Without-Any-Rest_controller)
and then config & import MySQL database 

You can use [POSTMAN](https://www.getpostman.com/) or anything else for simulate frontend

# Test the API
You can test the API by including header `Content-Type`,`Client-Service` & `Auth-Key` with value `application/json`,`frontend-client` & `simplerestapi` in every request

And for API except `login` you must include `id` & `token` that you get after successfully login. The header for both look like this `User-ID` & `Authorization`

List of the API :

url: http://localhost/foldername/index.php/auth/login
header: 
Key: Content-Type Value:application/json

Body:
{
	"username" : "XXX",
	"password" : "XXX"
}
Method: POST
