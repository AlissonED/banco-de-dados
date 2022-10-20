<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
nome :<input type="text" name="n" ><br>
telefone : <input type="text" name="t" ><br>
email : <input type="text" name="e" ><br>
<input type="submit" value="Enviar"><br>
</form>

<?php 
$nome =$_POST["n"];
$telefone =$_POST["t"];
$email =$_POST["e"];


$servername = "localhost";
$username = "root";
$password = "";
$db = "agenda1";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO nomes (nome, telefone, email)
VALUES ('$nome', '$telefone', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>