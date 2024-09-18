<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a2c2e0 0%, #f3e5f5 100%);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
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
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            transition: all 0.3s ease;
        }

        form:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .form-control {
            margin-bottom: 15px;
            padding: 12px;
            font-size: 1rem;
            border: 2px solid #e1e5e8;
            border-radius: 12px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #ff6f61;
            box-shadow: 0 0 8px rgba(255, 111, 97, 0.3);
            outline: none;
        }

        .btn-primary {
            background-color: #ff6f61;
            border: none;
            padding: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.3s ease;
            border-radius: 12px;
            text-transform: uppercase;
        }

        .btn-primary:hover {
            background-color: #ff3b30;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(255, 59, 48, 0.3);
        }

        label {
            font-weight: 500;
            color: #555;
        }

        .btn-primary.w-100 {
            margin-top: 10px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3>Register</h3>

        <form action="proses_register.php" method="post">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama :</label>
                <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>
            
            <div class="mb-3">
                <label for="NIK" class="form-label">NIK :</label>
                <input type="text" name="NIK" id="NIK" class="form-control" placeholder="Masukkan NIK" required>
            </div>
            
            <div class="mb-3">
                <label for="No_tlp" class="form-label">No Telepon :</label>
                <input type="text" name="No_tlp" id="No_tlp" class="form-control" placeholder="Masukkan nomor telepon" required>
            </div>
            
            <div class="mb-3">
                <label for="Jenis_kelamin" class="form-label">Jenis Kelamin :</label>
                <select name="Jenis_kelamin" id="Jenis_kelamin" class="form-control" required>
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat :</label>
                <textarea name="Alamat" id="Alamat" class="form-control" rows="4" placeholder="Masukkan alamat Anda" required></textarea>
            </div>
            
            <div class="mb-3">
                <label for="id" class="form-label">Jabatan :</label>
                <select name="id" id="id" class="form-control" required>
                    <option value="" disabled selected>Pilih jabatan</option>
                    <?php 
                    include "koneksi.php";
                    $qry_jabatan = mysqli_query($conn, "select * from jabatan");
                    while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                        echo '<option value="'.$data_jabatan['id'].'">'.$data_jabatan['Nama_jabatan'].'</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username :</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password :</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            
            <input type="submit" name="simpan" value="Register" class="btn btn-primary w-100" style="background-color:#3498db ;">
            
            <a href="tampil_pegawai.php" class="btn btn-primary w-100"style="background-color:#ADD8E6">Tampil Pegawai</a>

            <a href="tambah_jabatan.php" class="btn btn-primary w-100">Tambah Jabatan</a>

            <a href="home.php" class="btn btn-primary w-100"style="background-color:#C0C0C0">Home</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
