<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "datakaryawan";

$koneksi = mysqli_connect($host,$user,$pass,$db) or die('tidak bisa konek');

 ?>
<?php
 if (isset($_POST['proses'])) {
    $insert = mysqli_query($koneksi,"INSERT INTO pendidikan (pendidikan, nama_sekolah, alamat, fakultas, jurusan, prody, periode, keterangan) VALUES ('$_POST[pendidikan] $_POST[pendidikan2] $_POST[pendidikan3] $_POST[pendidikan4] $_POST[pendidikan5]','$_POST[nsekolah] $_POST[nsekolah2] $_POST[nsekolah3] $_POST[nsekolah4] $_POST[nsekolah5]','$_POST[alamat] $_POST[alamat2] $_POST[alamat3] $_POST[alamat4] $_POST[alamat5]','$_POST[fakultas] $_POST[fakultas2] $_POST[fakultas3] $_POST[fakultas4] $_POST[fakultas5]','$_POST[jurusan] $_POST[jurusan2] $_POST[jurusan3] $_POST[jurusan4] $_POST[jurusan5]','$_POST[prody] $_POST[prody2] $_POST[prody3] $_POST[prody4] $_POST[prody5]','$_POST[periode] $_POST[periode2] $_POST[periode3] $_POST[periode4] $_POST[periode5]','$_POST[keterangan] $_POST[keterangan2] $_POST[keterangan3] $_POST[keterangan4] $_POST[keterangan5]')");

 

    if(!$insert){
        echo "<script>alert('gagal')</script>";
    }else{
        echo "<script>alert('berhasil')</script>";
    }
 } 
  ?>
<?php 
  if (isset($_POST['proses2'])) {
     $insert = mysqli_query($koneksi,"INSERT INTO non_formal (nonformal, alamat, fakultas, jurusan, prody, periode, keterangan) VALUES ('$_POST[nformal] $_POST[nformal2] $_POST[nformal3] $_POST[nformal4] $_POST[nformal5]','$_POST[nalamat] $_POST[nalamat2] $_POST[nalamat3] $_POST[nalamat4] $_POST[nalamat5]','$_POST[nfakultas] $_POST[nfakultas2] $_POST[nfakultas3] $_POST[nfakultas4] $_POST[nfakultas5]','$_POST[njurusan] $_POST[njurusan2] $_POST[njurusan3] $_POST[njurusan4] $_POST[njurusan5]','$_POST[nprodi] $_POST[nprodi2] $_POST[nprodi3] $_POST[nprodi4] $_POST[nprodi5]','$_POST[nperiode] $_POST[nperiode2] $_POST[nperiode3] $_POST[nperiode4] $_POST[nperiode5]','$_POST[nketerangan] $_POST[nketerangan2] $_POST[nketerangan3] $_POST[nketerangan4] $_POST[nketerangan5]')");

     if(!$insert){
        echo "<script>alert('gagal')</script>";
    }else{
        echo "<script>alert('berhasil')</script>";
    }
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
            <h2>PENDIDIKAN</h2>
            <p>1. Pendidikan Formal :</p>
            <div class="table px-4 table-responsive">
                <form action="" method="post">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Pend.</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat</th>
                                <th>Fakultas</th>
                                <th>Jurusan</th>
                                <th>Prog.Study</th>
                                <th>Periode</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="table-light">
                            <tr id="trBody">
                                <button type="button" class="btn btn-primary">Add</button>
                                <td><input type="text" name="pendidikan"></td>
                                <td><input type="text" name="nsekolah"></td>
                                <td><input type="text" name="alamat"></td>
                                <td><input type="text" name="fakultas"></td>
                                <td><input type="text" name="jurusan"></td>
                                <td><input type="text" name="prody"></td>
                                <td><input type="text" name="periode"></td>
                                <td><input type="text" name="keterangan"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="pendidikan2"></td>
                                <td><input type="text" name="nsekolah2"></td>
                                <td><input type="text" name="alamat2"></td>
                                <td><input type="text" name="fakultas2"></td>
                                <td><input type="text" name="jurusan2"></td>
                                <td><input type="text" name="prody2"></td>
                                <td><input type="text" name="periode2"></td>
                                <td><input type="text" name="keterangan2"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="pendidikan3"></td>
                                <td><input type="text" name="nsekolah3"></td>
                                <td><input type="text" name="alamat3"></td>
                                <td><input type="text" name="fakultas3"></td>
                                <td><input type="text" name="jurusan3"></td>
                                <td><input type="text" name="prody3"></td>
                                <td><input type="text" name="periode3"></td>
                                <td><input type="text" name="keterangan3"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="pendidikan4"></td>
                                <td><input type="text" name="nsekolah4"></td>
                                <td><input type="text" name="alamat4"></td>
                                <td><input type="text" name="fakultas4"></td>
                                <td><input type="text" name="jurusan4"></td>
                                <td><input type="text" name="prody4"></td>
                                <td><input type="text" name="periode4"></td>
                                <td><input type="text" name="keterangan4"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="pendidikan5"></td>
                                <td><input type="text" name="nsekolah5"></td>
                                <td><input type="text" name="alamat5"></td>
                                <td><input type="text" name="fakultas5"></td>
                                <td><input type="text" name="jurusan5"></td>
                                <td><input type="text" name="prody5"></td>
                                <td><input type="text" name="periode5"></td>
                                <td><input type="text" name="keterangan5"></td>
                            </tr>
                        </tbody>
                    </table>

            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" name="proses" value="Simpan" />
            </div>
            </form>
            <p>1. Pendidikan Non Formal :</p>
            <div class="table px-4 table-responsive">
                <form action="" method="post">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>NO.</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat</th>
                                <th>Fakultas</th>
                                <th>Jurusan</th>
                                <th>Prog.Study</th>
                                <th>Periode</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="table-light">
                            <tr id="trBody">
                                <td><input></td>
                                <td><input type="text" name="nformal"></td>
                                <td><input type="text" name="nalamat"></td>
                                <td><input type="text" name="nfakultas"></td>
                                <td><input type="text" name="njurusan"></td>
                                <td><input type="text" name="nprodi"></td>
                                <td><input type="text" name="nperiode"></td>
                                <td><input type="text" name="nketerangan"></td>
                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input type="text" name="nformal2"></td>
                                <td><input type="text" name="nalamat2"></td>
                                <td><input type="text" name="nfakultas2"></td>
                                <td><input type="text" name="njurusan2"></td>
                                <td><input type="text" name="nprodi2"></td>
                                <td><input type="text" name="nperiode2"></td>
                                <td><input type="text" name="nketerangan2"></td>
                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input type="text" name="nformal3"></td>
                                <td><input type="text" name="nalamat3"></td>
                                <td><input type="text" name="nfakultas3"></td>
                                <td><input type="text" name="njurusan3"></td>
                                <td><input type="text" name="nprodi3"></td>
                                <td><input type="text" name="nperiode3"></td>
                                <td><input type="text" name="nketerangan3"></td>
                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input type="text" name="nformal4"></td>
                                <td><input type="text" name="nalamat4"></td>
                                <td><input type="text" name="nfakultas4"></td>
                                <td><input type="text" name="njurusan4"></td>
                                <td><input type="text" name="nprodi4"></td>
                                <td><input type="text" name="nperiode4"></td>
                                <td><input type="text" name="nketerangan4"></td>
                            </tr>
                            <tr>
                                <td><input></td>
                                <td><input type="text" name="nformal5"></td>
                                <td><input type="text" name="nalamat5"></td>
                                <td><input type="text" name="nfakultas5"></td>
                                <td><input type="text" name="njurusan5"></td>
                                <td><input type="text" name="nprodi5"></td>
                                <td><input type="text" name="nperiode5"></td>
                                <td><input type="text" name="nketerangan5"></td>
                            </tr>
                        </tbody>
                    </table>

            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" name="proses2" value="Simpan" />
            </div>
            </form>


        </div>
    </div>
    <div class="footer text-center py-3">
        <p>copyright &#169; 2022 - PT. Pos Logistik Indonesia</p>
    </div>

</body>

</html>