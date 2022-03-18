<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "datakaryawan";

$koneksi = mysqli_connect($host,$user,$pass,$db) or die('tidak bisa konek');

 ?>
<?php 
 if (isset($_POST['proses5'])) {
    $insert = mysqli_query($koneksi, "INSERT INTO uploaddoc (ktp, skck, ijazah, paklaring, pernyataan, skesehatan, foto) VALUES ('$_POST[inputktp]','$_POST[inputskck]','$_POST[inputijazah]','$_POST[inputpaklaring]','$_POST[inputorganisasi]','$_POST[inputkesehatan]','$_POST[inputfoto]')"); 
    
    if(!$insert){
        echo "<script>alert('gagal')</script>";
    }else{
        echo "<script>alert('berhasil')</script>";
    } # cod# code...
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
            <h2>KELENGKAPAN DATA PRIBADI</h2>
            <div class="table px-4 table-responsive">
                <form action="" method="post">
                    <table class="table mt-2">
                        <thead class="table-light">
                            <tr>
                                <th>NO.</th>
                                <th>Dokumen</th>
                            </tr>
                        </thead>
                        <tbody class="table-light">
                            <tr id="trBody">
                                <td><input></td>
                                <td><input>
                                    <div class="input-group mb-3">Fotocopy KTP
                                        <input type="file" class="form-control ms-2" name=" inputktp">
                                        <label class="input-group-text" for="inputktp">Upload</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input>
                                    <div class="input-group mb-3">SKCK Yang Berlaku
                                        <input type="file" class="form-control ms-2" name="inputskck">
                                        <label class="input-group-text" for="inputskck">Upload</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input>
                                    <div class="input-group mb-3">Fotocopy Ijazah
                                        <input type="file" class="form-control ms-2" name=" inputijazah">
                                        <label class="input-group-text" for="inputijazah">Upload</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input>
                                    <div class="input-group mb-3">Fotocopy Paklaring
                                        <input type="file" class="form-control ms-2" name="inputpaklaring">
                                        <label class="input-group-text" for="inputpaklaring">Upload</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input>Surat Pernyataan Tidak Pernah Terlibat Kegiatan/Organisasi <div
                                        class="input-group mb-3">
                                        <input type="file" class="form-control" name="inputorganisasi">
                                        <label class="input-group-text" for="inputorganisasi">Upload</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input>
                                    <div class="input-group mb-3">Surat Kesehatan
                                        <input type="file" class="form-control ms-2" name="inputkesehatan">
                                        <label class="input-group-text" for="inputkesehatan">Upload</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input>
                                    <div class="input-group mb-3">Upload Foto
                                        <input type="file" class="form-control ms-2" name="inputfoto">
                                        <label class="input-group-text" for="inputfoto">Upload</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" name="proses5" value="Simpan" />
            </div>
            </form>
        </div>
    </div>
    <div class="footer text-center py-3">
        <p>copyright &#169; 2022 - PT. Pos Logistik Indonesia</p>
    </div>

</body>

</html>