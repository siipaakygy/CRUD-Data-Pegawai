<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a2c2e0 0%, #f3e5f5 100%);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
        }

        h3 {
            font-weight: 600;
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        form:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        .form-control {
            margin-bottom: 20px;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 10px;
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
            border-radius: 10px;
            text-transform: uppercase;
        }

        .btn-primary:hover {
            background-color: #ff3b30;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(255, 59, 48, 0.3);
        }

        .btn-secondary {
            background-color: #3498db;
            border: none;
            padding: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.3s ease;
            border-radius: 10px;
            text-transform: uppercase;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #2980b9;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(41, 128, 185, 0.3);
        }

        label {
            font-weight: 500;
            color: #555;
        }
    </style>
    <title>Tambah Jabatan</title>
</head>
<body>

    <div class="container">
        <h3>Tambah Jabatan</h3>

        <form action="proses_tambah_jabatan.php" method="post">
            <div class="form-group">
                <label for="Nama_jabatan">Nama Jabatan :</label>
                <input type="text" name="Nama_jabatan" id="Nama_jabatan" class="form-control" placeholder="Masukkan nama jabatan">
            </div>
            
            <div class="form-group">
                <label for="Gaji_pokok">Gaji Pokok :</label>
                <input type="text" name="Gaji_pokok" id="Gaji_pokok" class="form-control" placeholder="Masukkan gaji pokok">
            </div>
            
            <div class="form-group">
                <label for="Tunjangan">Tunjangan :</label>
                <input type="text" name="Tunjangan" id="Tunjangan" class="form-control" placeholder="Masukkan tunjangan">
            </div>

            <input type="submit" name="simpan" value="Tambah Jabatan" class="btn btn-primary w-100" style="margin-bottom: 10px;">

            <a href="register.php" class="btn btn-secondary w-100" style="margin-bottom: 10px;">Register</a>

            <a href="home.php" class="btn btn-primary w-100"style="background-color:#C0C0C0">Home</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
