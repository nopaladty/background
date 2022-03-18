<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "datakaryawan";

$koneksi = mysqli_connect($host,$user,$pass,$db) or die('tidak bisa konek');

 ?>
<?php 
 if (isset($_POST['proses3'])) {
    $insert = mysqli_query($koneksi,"INSERT INTO pengalaman (naper, bidang_usaha, jabatan, periode, gaji, alasan) VALUES ('$_POST[nperusahaan] $_POST[nperusahaan2] $_POST[nperusahaan3] $_POST[nperusahaan4] $_POST[nperusahaan5]','$_POST[bidang] $_POST[bidang2] $_POST[bidang3] $_POST[bidang4] $_POST[bidang5]','$_POST[jabatan] $_POST[jabatan2] $_POST[jabatan3] $_POST[jabatan4] $_POST[jabatan5]','$_POST[periode] $_POST[periode2] $_POST[periode3] $_POST[periode4] $_POST[periode5]','$_POST[gaji] $_POST[gaji2] $_POST[gaji3] $_POST[gaji4] $_POST[gaji5]','$_POST[alasan] $_POST[alasan2] $_POST[alasan3] $_POST[alasan4] $_POST[alasan5]')");
    if(!$insert){
        echo "<script>alert('gagal')</script>";
    }else{
        echo "<script>alert('berhasil')</script>";
    } # code...
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
    height: 700px;
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

tbody input {
    border: none;
    background-color: transparent;
}

tbody input:hover,
tbody input:focus,
tbody input:active {
    outline: none;
    ;
}

tbody tr td {
    border: solid 1px black;
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
            <h2>PENGALAMAN</h2>
            <p>1. Pengalaman Kerja :</p>
            <div class="table px-4 table-responsive">
                <form action="" method="post">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>NO.</th>
                                <th>Nama Perusahaan</th>
                                <th>Bidang Usaha</th>
                                <th>Jabatan</th>
                                <th>Periode Kerja</th>
                                <th>Gaji Pokok</th>
                                <th>Alasan Pindah</th>
                            </tr>
                        </thead>
                        <tbody class="table-light">
                            <tr>
                                <td><input></td>
                                <td><input type="text" name="nperusahaan"></td>
                                <td><input type="text" name="bidang"></td>
                                <td><input type="text" name="jabatan"></td>
                                <td><input type="text" name="periode"></td>
                                <td><input type="text" name="gaji"></td>
                                <td><input type="text" name="alasan"></td>

                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input type="text" name="nperusahaan2"></td>
                                <td><input type="text" name="bidang2"></td>
                                <td><input type="text" name="jabatan2"></td>
                                <td><input type="text" name="periode2"></td>
                                <td><input type="text" name="gaji2"></td>
                                <td><input type="text" name="alasan2"></td>

                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input type="text" name="nperusahaan3"></td>
                                <td><input type="text" name="bidang3"></td>
                                <td><input type="text" name="jabatan3"></td>
                                <td><input type="text" name="periode3"></td>
                                <td><input type="text" name="gaji3"></td>
                                <td><input type="text" name="alasan3"></td>

                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input type="text" name="nperusahaan4"></td>
                                <td><input type="text" name="bidang4"></td>
                                <td><input type="text" name="jabatan4"></td>
                                <td><input type="text" name="periode4"></td>
                                <td><input type="text" name="gaji4"></td>
                                <td><input type="text" name="alasan4"></td>

                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input type="text" name="nperusahaan5"></td>
                                <td><input type="text" name="bidang5"></td>
                                <td><input type="text" name="jabatan5"></td>
                                <td><input type="text" name="periode5"></td>
                                <td><input type="text" name="gaji5"></td>
                                <td><input type="text" name="alasan5"></td>

                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" name="proses3" value="Simpan" />
            </div>
            </form>
        </div>
    </div>
    <div class="footer text-center py-3">
        <p>copyright &#169; 2022 - PT. Pos Logistik Indonesia</p>
    </div>

</body>

</html>