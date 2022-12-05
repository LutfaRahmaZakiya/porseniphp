<html>
    <body>
        Welcome Calon Peserta <?php echo $_POST["nama"];?><br>
        Pastikan NIM Kamu Benar berikut ini <?php echo $_POST["nim"];?><br>
        Email kamu Adalah: <?php echo $_POST["email"];?><br>
        Pastikan jenis kelamin kamu sesuai ya <?php echo $_POST["jenis_kelamin"];?><br>
        Dari Angkatan <?php echo $_POST["angkatan"];?><br>
        Akan Mendaftar Lomba:<?php echo $_POST["lomba"];?>><br>

    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="Pesertalomba";
    $nama=$_POST["nama"];
    $nim=$_POST["nim"];
    $jenis_kelamin=$_POST["jenis_kelamin"];
    $email=$_POST["email"];
    $angkatan=$_POST["angkatan"];
    $lomba=$_POST["lomba"];
    
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed:".$conn->connect_error);
    }
    
    $sql = "INSERT INTO porseniintegral (nama, nim, jenis_kelamin, email, angkatan, lomba)
    VALUES ('$nama', '$nim', '$jenis_kelamin', '$email', '$angkatan', '$lomba')";
    
    if($conn->query($sql) === TRUE){
        echo "New records created succesfully";
    } else {
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
    
    $conn = new mysqli ($servername, $username, $password, $dbname);
    $sql=  "SELECT nama, nim, jenis_kelamin, email, angkatan, lomba FROM porseniintegral";
    $result=$conn->query($sql);
    if($result->num_rows>0){

    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    <br>
    <a href="dataporseni.php">Peserta yang Terdaftar</a>
    <a href="http://localhost/tess.php">hapus</a>
    <a href="http://localhost/tambahdata.php">tambah</a>
    </body>
</html>