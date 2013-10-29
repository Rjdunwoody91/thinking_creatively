<? 
 include 'myfile.php'; 
 $email=$_POST['email']; 
 mysql_connect("server", "user", "pass") or die(mysql_error()); 
 mysql_select_db("a2314157_Leads") or die(mysql_error()); 
 mysql_query("INSERT INTO `data` VALUES ('$email')"); 
 Print "Your information has been successfully added to the database."; 
 ?> 