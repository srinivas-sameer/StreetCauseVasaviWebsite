
<?php
include 'db.php';
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$service = $_POST['servicetype'];
$email = $_POST['EmailIdInput'];
$contact = $_POST['contactNumberInput'];
$message = $_POST['messageInput'];
if($service !=''||$email !='' || $contact !='' || $message !=''){
//Insert Query of SQL
$query = mysql_query("insert into enquiry (service, email, contact, message) values ('.$service', '.$email', '.$contact', '.$message')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
?>
