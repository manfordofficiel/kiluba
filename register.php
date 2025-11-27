 <?php
 header("content-type: kiluba/Json");
 $data = Json_decode(file_get_contents("php://input"), true);
$username = $data['username'];
$password = $data['password'];

echo Json_decode(["message" => "inscription reussie"]); 
 
 ?>