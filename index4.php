<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "datakaryawan";

$koneksi = mysqli_connect($host,$user,$pass,$db) or die('tidak bisa konek');

 ?>
<?php 
 if (isset($_POST['proses4'])) {
    $insert = mysqli_query($koneksi, "INSERT INTO pernyataan_jasmani (sakit, penjelasansakit, kriminal, penjelasankriminal) VALUES ('$_POST[pilihan] $_POST[pilihan2]','$_POST[kotak]','$_POST[milih] $_POST[milih2]','$_POST[kotak2]')"); 
    
    if(!$insert){
        echo "<script>alert('gagal')</script>";
    }else{
        echo "<script>alert('berhasil')</script>";
    } # code...code...
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BC Poslog App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<style>
.container {
    width: 20%;
    height: fit-content;
    padding-bottom: 1em;
    padding-top: 1em;
    left: 1px;
    top: 80px;
    background-color: #FFB342;
}

.container ul li {
    text-decoration: none;
    border-bottom: solid 2px black;
}

.container ul li a {
    text-decoration: none;
    color: black;
    font-weight: bold;
    font-size: 1.4rem;
}

nav {
    width: 100%;
    top: 0;
    left: 0;
    z-index: 10;
}

.container2 {
    width: 80%;
    height: fit-content;
    left: 350px;
    top: 82px;
    background-color: #D9D9D9;
}

.footer {
    width: 100%;
    background: #FFB342;
    color: #000000;
    font-size: 1rem;
    text-transform: uppercase;
}
</style>

<body>
    <nav class="navbar navbar-light bg-light position-fixed">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="poslog.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Background Check App
            </a>
        </div>
    </nav>
    <div class="d-flex justify-content-between pe-5 mt-5 pt-5 pb-5"
        style="background-color: #7FBDF6; width: 100%; background-image: url('Component.png'); background-repeat: no-repeat; background-position: bottom left; background-size: 25em;">
        <div class="container ms-5">
            <ul>
                <li><a href="index.php">Identitas Diri</a></li>
                <li><a href="index2.php">Pendidikan</a></li>
                <li><a href="index3.php">Pengalaman</a></li>
                <li><a href="index4.php">Riwayat Hidup</a></li>
                <li><a href="index5.php">Dokumen</a></li>
            </ul>
        </div>

        <div class="container2 p-2">
            <h2>RIWAYAT HIDUP</h2>
            <div class="form px-4">
                <form action="" method="post">
                    <p>1. Pernakah anda menderita sakit/kronis/kecelakaan berat/operasi? Kalau"ya", jelaskan!</p>
                    <div class="px-4  d-flex">
                        <textarea class=" form-control" placeholder="Leave a comment here" name="kotak"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2"></label>
                        <input class="form-check-input ms-2" type="checkbox" name="pilihan" value="option1">
                        <label class="form-check-label ms-2" for="inlineCheckbox1">YA</label>
                        <input class="form-check-input ms-2" type="checkbox" name="pilihan2" value="option2">
                        <label class="form-check-label ms-2" for="inlineCheckbox1">TIDAK</label>
                    </div>
                    <p class="mt-2">2. Apakah anda pernah berurusan dengan kepolisian? kalau"ya", jelaskan!</p>
                    <div class=" px-4 d-flex">
                        <textarea class=" form-control" placeholder="Leave a comment here" name="kotak2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2"></label>
                        <input class="form-check-input ms-2" type="checkbox" name="milih" value="option1">
                        <label class="form-check-label ms-2" for="inlineCheckbox1">YA</label>
                        <input class="form-check-input ms-2" type="checkbox" name="milih2" value="option2">
                        <label class="form-check-label ms-2" for="inlineCheckbox1">TIDAK</label>
                    </div>


                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" name="proses4" value="Simpan" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer text-center py-3">
        <p>copyright &#169; 2022 - PT. Pos Logistik Indonesia</p>
    </div>

</body>

</html>