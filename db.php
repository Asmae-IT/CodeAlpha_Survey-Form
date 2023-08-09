
<?php
$connect = new PDO("mysql:host=localhost;dbname=survey", "root", "");
$message = '';
if(isset($_POST["email"]))
{
 sleep(3);
 $query = "
 INSERT INTO fields
 (name, gender, email, request, about, services, recomm, comments) VALUES 
 (:name, :gender, :email, :request, :about, :services, :recomm, :comments)
 ";
 $survey_data = array(
  ':name'  => $_POST["name"],
  ':gender'   => $_POST["gender"],
  ':email'   => $_POST["email"],
  ':request'   => $_POST["request"],
  ':about'   => $_POST["about"],
  ':services'   => $_POST["services"],
  ':recomm'   => $_POST["recomm"],
  ':comments'   => $_POST["comments"]
 );
 $statement = $connect->prepare($query);
 if($statement->execute($survey_data))
 {
  $message = '
  <h3>Thank you for sumbitting !</h3>
  <h5>We will contact you in your email for more Information.</h5>
  ';
 }
 else
 {
  $message = '
  <h4>There must be an error in your submission !</h4>
  ';
 }
}
?>
