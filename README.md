# api

***ALl the codes are written in Php Language.So u need to use a server software to run it such as WAMP server or XAMPP.***

This folder contains 4 files:-

  1)db.inc.php- It contains all the information of a mysql database.
  2)class.DB.php- It contains necessary function for database connection and query execution.
  3)createuser.php - This is used to create a new user.
  4)getuser.php - This is used to fetch a user from database using its user id.

This api contains two api functions namely "createuser" and "getuser"

How to use createuser REST API (This api is used to create a user):-

    1)Use POSTMAN Software for testing createuser.
    2)Send the api password "apipassword" as a post data in a key value pair.The password is "123456". otherwise it will retuen an error         "wrong api password".
             "apipassword":"123456"
    3)If the user is created successfully it will return the user and its unique id in a json object.
    4)If the user is not created suceesfully it will return an error message "Could not create the user".
   
 How to use getuser REST API (This api is used to fetch a user from database):-
    
    1)Use POSTMAN Software for testing createuser.
    2)Send the api password "apipassword" as a post data in a key value pair.The password is "123456" otherwise it will retuen an error         "wrong api password".
           "apipassword":"123456"
    3)Also the user id "user_id" of user which is to be fetched as a post data in a key value pair otherwise it will return an error "user      id not provided".
           "user_id":"any random number"
    3)If the user is found it will return the user details in a json object.
    4)If the user is not found it will return a proper error message "No such user found".
