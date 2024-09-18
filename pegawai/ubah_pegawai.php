<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a2c2e0 0%, #f3e5f5 100%);
            color: #333;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h3 {
            font-weight: 600;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
        }
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 500px;
        }
        .form-control {
            margin-bottom: 20px;
            padding: 12px;
            border-radius: 10px;
            border: 2px solid #ddd;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-control:focus {
            border-color: #ff6f61;
            box-shadow: 0 0 8px rgba(255, 111, 97, 0.3);
            outline: none;
        }
        label {
            font-weight: 500;
            color: #555;
            margin-bottom: 5px;
        }
        .btn-primary {
            background-color: #ff6f61;
            border: none;
            padding: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.3s ease;
            border-radius: 10px;
            width: 100%;
            text-transform: uppercase;
        }
        .btn-primary:hover {
            background-color: #ff3b30;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(255, 59, 48, 0.3);
        }
        textarea {
            resize: none;
        }
    </style>
    
    <title>Ubah Pegawai</title>
</head>
<body>

    <?php 
    include "koneksi.php";
    $qry_get_pegawai = mysqli_query($conn, "SELECT * FROM pegawai WHERE Id = '".$_GET['Id']."'");
    $dt_pegawai = mysqli_fetch_array($qry_get_pegawai);
    ?>

    <div>
        <h3>Ubah Pegawai</h3>

        <form action="proses_ubah_pegawai.php" method="post">
            <input type="hidden" name="Id" value="<?=$dt_pegawai['Id']?>">

            <label for="Nama">Nama:</label>
            <input type="text" name="Nama" id="Nama" value="<?=$dt_pegawai['Nama']?>" class="form-control" placeholder="Masukkan nama pegawai">

            <label for="Nik">NIK:</label>
            <input type="text" name="Nik" id="Nik" value="<?=$dt_pegawai['Nik']?>" class="form-control" placeholder="Masukkan NIK pegawai">

            <label for="Jenis_kelamin">Jenis Kelamin:</label>
            <?php 
            $arr_gender = array('L'=>'Laki-laki','P'=>'Perempuan');
            ?>
            <select name="Jenis_kelamin" id="Jenis_kelamin" class="form-control">
                <option></option>
                <?php foreach ($arr_gender as $key_gender => $val_gender): 
                    $selek = ($key_gender == $dt_pegawai['Jenis_kelamin']) ? "selected" : "";
                ?>
                <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
                <?php endforeach ?>
            </select>

            <label for="Alamat">Alamat:</label>
            <textarea name="Alamat" id="Alamat" class="form-control" rows="4" placeholder="Masukkan alamat pegawai"><?=$dt_pegawai['Alamat']?></textarea>

            <label for="Jabatan_id">Jabatan:</label>
            <select name="Jabatan_id" id="Jabatan_id" class="form-control">
                <option></option>
                <?php 
                $qry_jabatan = mysqli_query($conn,"SELECT * FROM jabatan");
                while($data_jabatan = mysqli_fetch_array($qry_jabatan)){
                    $selek = ($data_jabatan['id'] == $dt_pegawai['Jabatan_id']) ? "selected" : "";
                    echo '<option value="'.$data_jabatan['id'].'" '.$selek.'>'.$data_jabatan['Nama_jabatan'].'</option>';
                }
                ?>
            </select>

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?=$dt_pegawai['username']?>" class="form-control" placeholder="Masukkan username">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password baru jika ingin mengganti">

            <input type="submit" name="simpan" value="Ubah Pegawai" class="btn btn-primary">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
