#This is my first project: Complete Login Simulation


This is a simple login page that works as follows:
  1) The user enters their credentials, email and password...
  2) script.js file intercept the form submission to handle the process.
  3) the login.php contains the data needed to login to MySQL server to access the database
  4) LoginHandling.php loads this "login.php" file and use to  access the database and do the credential validation thing.
  5) The LoginHandling.php file returns the message "Welcome back honey <3" if the credentials are correct and returns an error message if credentials are incorrect
  6) The json script.js file use alert() to show these messages at last.
