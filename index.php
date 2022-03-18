<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "datakaryawan";

$koneksi = mysqli_connect($host,$user,$pass,$db) or die('tidak bisa konek');
?>
<?php
if (isset($_POST['proses'])) {
    $insert = mysqli_query($koneksi,"INSERT INTO identitas (nama, panggilan, tempat_lahir, tgl_lahir, tinggi, berat, alamat, kelurahan, kota, kecamatan, no_rumah, rtrw, kodepos, tlp_rumah, tlp_hp, email, agama, warganegara, status_rumah, lama_tinggal, j_anak, j_tanggungan, domisili, d_no, d_rtrw, d_kelurahan, d_kecamatan, d_kota, d_kodepos, d_tlprumah, d_email, keluarga, tkeluarga) VALUES
     ('$_POST[nlengkap]','$_POST[nama]','$_POST[tempatlahir]','$_POST[tanggallahir]','$_POST[tinggibadan]','$_POST[beratbadan]','$_POST[alamatktp]','$_POST[kelurahan]','$_POST[kota]','$_POST[camat]','$_POST[nomorrumah]','$_POST[inputrtrw]','$_POST[pos]','$_POST[teleponrumah]','$_POST[nomorhp]','$_POST[inputemail]','$_POST[agama]','$_POST[negara]','$_POST[rumah]','$_POST[lamatinggal]','$_POST[jumlahanak]','$_POST[jumlahtanggungan]','$_POST[domisili]','$_POST[dnomor]','$_POST[drtrw]','$_POST[dkelurahan]','$_POST[dkecamatan]','$_POST[dkota]','$_POST[dpos]','$_POST[nomortlp2]','$_POST[dinputemail]','$_POST[dkeluarga]','$_POST[dnotelp]')");
    
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
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
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

.container2 {
    width: 80%;
    height: fit-content;
    left: 350px;
    top: 82px;
    background-color: #D9D9D9;
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
            <h2>IDENTITAS DIRI</h2>
            <div class="form px-4">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nlengkap" class="form-label">Nama lengkap Sesuai KTP/Paspor/SIM</label>
                        <input type="text" class="form-control" name="nlengkap">
                    </div>
                    <div class="row g-0 p-0 m-0">
                        <div class="col-4 p-0 m-0">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 d-flex justify-content-center">
                            <div class="mb-3">
                                <label for="tinggibadan" class="form-label">Tinggi Badan</label>
                                <input type="number" class="form-control" name="tinggibadan"
                                    style="height: fit-content;">
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 d-flex justify-content-end">
                            <div class="mb-3">
                                <label for="beratbadan" class="form-label">Berat Badan</label>
                                <input type="number" class="form-control" name="beratbadan">
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0">
                            <div class="mb-3">
                                <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempatlahir">
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 d-flex justify-content-center">
                            <div class="xdssoft_datetimepicker mb-3">
                                <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggallahir">
                            </div>
                        </div>
                        <div class="col-6 p-0 m-0">
                            <div class="mb-3">
                                <label for="alamatktp" class="form-label">Alamat Sesuai Identitas/KTP</label>
                                <input type="text" class="form-control" name="alamatktp">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3 d-flex">
                                <label for="nomor" class="form-label ms-2">N0.</label>
                                <input type="text" class="form-control ms-2" style="width: 50px;" name="nomorrumah">
                                <label for="inputrt" class="form-label ms-2">RT/RW</label>
                                <input type="text" class="form-control ms-2" style="width: 50px;" name="inputrtrw">

                            </div>
                        </div>
                        <div class="col-4 p-0 m-0">
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">Kelurahan</label>
                                <input type="text" class="form-control" name="kelurahan">
                            </div>
                        </div>
                        <div class="col-6 p-0 m-0 d-flex justify-content-end">
                            <div class="mb-3">
                                <label for="camat" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" style="width: 300px;" name="camat">
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0">
                            <div class="mb-3">
                                <label for="kota" class="form-label">Kota/Kab</label>
                                <input type="text" class="form-control" name="kota">
                            </div>
                        </div>
                        <div class="col-6 p-0 m-0 d-flex justify-content-end">
                            <div class="mb-3">
                                <label for="pos" class="form-label">Kode Pos</label>
                                <input type="text" class="form-control" name="pos">
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0">
                            <div class="mb-3">
                                <label for="teleponrumah" class="form-label">Nomor Telepon Rumah</label>
                                <input type="text" class="form-control" name="teleponrumah">
                            </div>
                            <div class="mb-3">
                                <label for="nomorhp" class="form-label">Nomor Handphone</label>
                                <input type="text" class="form-control" name="nomorhp">
                            </div>
                            <div class="mb-3">
                                <label for="inputemail" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" name="inputemail">
                            </div>
                        </div>
                    </div>
                    <div>
                        <tr>
                            <td>Agama</td>
                            <td><select name="agama" id="">
                                    <option value="islam">islam</option>
                                    <option value="kristen">kristen</option>
                                    <option value="khatolik">khatolik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                </select>
                            </td>
                        </tr>
                    </div>
                    <div class="mt-3">
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td><select name="negara" id="">
                                    <option value="Warga Negara Indonesia (WNI)">Warga Negara Indonesia(WNI) </option>
                                    <option value="Warga Negara Asing (WNA)">Warga Negara Asing (WNA)</option>
                                </select>
                            </td>
                        </tr>
                    </div>
                    <div class="mt-3">
                        <tr>
                            <td>Status Rumah</td>
                            <td><select name="rumah" id="">
                                    <option value="Milik Sendiri">Milik Sendiri</option>
                                    <option value="Sewa">Sewa</option>
                                    <option value="Angsuran">Angsuran</option>
                                    <option value="Milik Keluarga">Milik Keluarga</option>
                                    <option value="Kost">Kost</option>
                                    <option value="Rumah Instansi">Rumah Instansi</option>
                                </select>
                            </td>
                        </tr>
                    </div>

                    <div>
                        <div class="mb-3 d-flex">
                            <label for="nomor" class="form-label">Lama Tinggal :</label>
                            <input type="text" class="form-control ms-2" style="width: 70px;"
                                name="lamatinggal">Tahun/Bulan
                            <label for="nomor" class="form-label ms-3">Jumlah Anak :</label>
                            <input type="text" class="form-control ms-1" style="width: 50px;" name="jumlahanak">Orang
                            <label for="nomor" class="form-label ms-3">Jumlah Tanggungan :</label>
                            <input type="text" class="form-control ms-1" style="width: 50px;"
                                name="jumlahtanggungan">Orang
                        </div>
                    </div>
                    <div>
                        <div class="mb-3 d-flex">
                            <label for="alamatktp2" class="form-label">Alamat Sesuai Identitas/KTP :</label>
                            <input type="text" class="form-control ms-2" style="width: 300px;" name="domisili">
                            <label for="nomor2" class="form-label ms-3">NO :</label>
                            <input type="text" class="form-control ms-1" style="width: 50px;" name="dnomor">
                            <label for="rw2" class="form-label ms-3">RT/RW :</label>
                            <input type="text" class="form-control ms-1" style="width: 70px;" name="drtrw">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3 d-flex">
                            <label for="kelurahan2" class="form-label">Kelurahan:</label>
                            <input type="text" class="form-control ms-2" name="dkelurahan">
                            <label for="kecamatan2" class="form-label ms-2">Kecamatan:</label>
                            <input type="text" class="form-control ms-2" name="dkecamatan">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3 d-flex">
                            <label for="kota2" class="form-label">Kota/Kab :</label>
                            <input type="text" class="form-control ms-2" style="width: 335px;" name="dkota">
                            <label for="pos2" class="form-label ms-3">Kode Pos :</label>
                            <input type="text" class="form-control ms-2" style="width: 200px;" name="dpos">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3 d-flex">
                            <label for="nomortlp2" class="form-label">Nomor Telepon Rumah:</label>
                            <input type="text" class="form-control ms-2" style="width: 335px;" name="nomortlp2">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3 d-flex">
                            <label for="inputemail2" class="form-label">Alamat Email :</label>
                            <input type="email" class="form-control ms-5" style="width: 335px;" name="dinputemail">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3 d-flex">
                            <label for="keluarga" class="form-label">Nama Keluarga Yang Bisa Dihubungi :</label>
                            <input type="text" class="form-control ms-2" style="width: 335px;" name="dkeluarga">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3 d-flex">
                            <label for="notelp" class="form-label">No Telepon Keluarga :</label>
                            <input type="text" class="form-control ms-5" style="width: 335px;" name="dnotelp">
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" name="proses" value="Simpan" />
                    </div>
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