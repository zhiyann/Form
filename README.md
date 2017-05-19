# Form
1. Login Page.html : 
   - This is a login form that uses jQuery to validate the fields.
   
2. DropDownList.php : 
   - This is a drop-down selection list which options are generated from a SQL query
   - The configuration of config.php is 
   
          $servername = "yourdatabaseaddress";
          $username = "yourusername";
          $password = "yourpassword";
          $dbname = "yourdatabasename";

          The syntax below is to establish a connection to the database
          $mysql = mysqli_connect($servername, $username, $password, $dbname);
