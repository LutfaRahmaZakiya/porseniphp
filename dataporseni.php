<html>
<body>
    <h1>Data Peserta Porseni Integral</h1>
<?php

 $servername="localhost";
 $username="root";
 $password="";
 $dbname="Pesertalomba";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
  die("Connection failed:".$conn->connect_error);
}

$sql = "SELECT nama, nim, jenis_kelamin, email, angkatan, lomba FROM porseniintegral";
$result = $conn->query($sql);

if($result->num_rows > 0){
    //output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nama: " . $row["nama"]. 
        "NIM: " . $row["nim"]. 
        "E-mail: " . $row["email"]. 
        "Gender: " . $row["jenis_kelamin"]. 
        "Angkatan: " . $row["angkatan"].
        "Lomba yang di ikuti: " . $row["lomba"]. "<br>";
        }
} else {
    echo "0 results";
}
$conn->close();
?>
<br>
<a href="index.php">Formulir Pendaftaran</a>
</body>
</html>