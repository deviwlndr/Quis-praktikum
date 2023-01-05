<?php
include_once("koneksi.php");

//Mengambil semua data dari database
$result = mysqli_query($mysqli, "SELECT * FROM absensi");

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];     
    $jurusan = $_POST['jurusan'];   

    //insert data ke database
    $add = mysqli_query($mysqli, "INSERT INTO absensi(nama, jurusan, waktu_kehadiran) VALUES ('$nama','$jurusan', NOW())");
}
?>

<html>
<head>
    <title>absensi</title>

<!--link boostrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

<div class="bg-sucesss p-2 text-dark bg-opacity-10">
    <h1 class="p-4 text-center">DAFTAR HADIR MAHASISWA</h1>
    <div class="container">
        <form action="" method="post" name="form_absen">
      
        <div class ="mb-3">
          <a class="nav-link active" aria-current="page" href="#">Nama</a>
          <input type="text" class="form-control" name="name" placeholder="Masukan Nama">
        </ul>
    </div>
    <div class ="mb-3">
          <a class="nav-link active" aria-current="page" href="#">NPM</a>
          <input type="text" class="form-control" name="name" placeholder="Masukan NPM">
        </ul>
    </div>
    

        <div class="mb-3">
          <label class="form-label">Jurusan</label>
          <input type="text" class="form-control" name="name" placeholder="Masukan Jurusan">
        </div>
        <div class="text-center">
          <button type="reset" class="btn btn-danger" name="Reset">Reset</button>
          <button type="submit" class="btn btn-primary" name="Submit">Hadir</button>
        </div>
        </form>

        <table class="my-5 table table-striped">
            <tr class="table-dark">
                <th>Nama</th>            
                <th>Jurusan</th>
                <th>Waktu_kehadiran</th>
            </tr>
        

        <?php
        while ($r = mysqli_fetch_array($result)){
        ?>
            <tr class="table-primary">
                <td><?php echo $r['nama']; ?></td>
                <td><?php echo $r['jurusan']; ?></td>
                <td><?php echo $r['waktu_kehadiran']; ?></td>    
            </tr>
        <?php
        }
        ?>
        </table>
    </div>
</div>

</body>
</html>