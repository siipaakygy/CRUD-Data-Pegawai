<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Pegawai</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background:linear-gradient(135deg, #a2c2e0 0%, #f3e5f5 100%);
            color: #333;
        }
        h3 {
            text-align: center;
            margin: 30px 0;
            font-size: 2.5rem;
            font-weight: 600;
            color: #ffffff; /* White color for better contrast */
        }
        .container {
            margin-top: 20px;
            background-color: #ffffff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 20px;
        }
        table {
            background-color: #ffffff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }
        thead {
            background-color: #007bff; /* Blue color */
            color: white;
        }
        th, td {
            padding: 15px;
            text-align: center;
            vertical-align: middle;
        }
        tbody tr:nth-child(even) {
            background-color: #f8f9fa; /* Light gray */
        }
        tbody tr:hover {
            background-color: #e2e6ea; /* Light blue-gray */
        }
        .btn-primary {
            background-color: #007bff; /* Blue color */
            border: none;
            font-weight: 500;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue */
            transform: scale(1.05);
        }
        .btn-success {
            background-color: #28a745; /* Green color */
            border: none;
            padding: 8px 12px;
            border-radius: 8px;
        }
        .btn-success:hover {
            background-color: #218838; /* Darker green */
        }
        .btn-danger {
            background-color: #dc3545; /* Red color */
            border: none;
            padding: 8px 12px;
            border-radius: 8px;
        }
        .btn-danger:hover {
            background-color: #c82333; /* Darker red */
        }
        a {
            text-decoration: none;
            color: white;
        }
        .btn-group {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <h3>Daftar Pegawai</h3>
    
    <div class="container">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>NIK</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Username</th>
                    <th>Jabatan</th>
                    <th>Gaji Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";
                $qry_pegawai = mysqli_query($conn, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.Jabatan_id = jabatan.id");
                $no = 0;
                while ($data_pegawai = mysqli_fetch_array($qry_pegawai)) {
                    $no++;
                    $gaji_total = $data_pegawai['Gaji_pokok'] + $data_pegawai['Tunjangan'];
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_pegawai['Nama'] ?></td>
                    <td><?= $data_pegawai['Nik'] ?></td>
                    <td><?= $data_pegawai['No_tlp'] ?></td>
                    <td><?= $data_pegawai['Alamat'] ?></td>
                    <td><?= $data_pegawai['Jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                    <td><?= $data_pegawai['username'] ?></td>
                    <td><?= $data_pegawai['Nama_jabatan'] ?></td>
                    <td><?= number_format($data_pegawai['Gaji_pokok'] + $data_pegawai['Tunjangan'], 0, ',', '.') ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="ubah_pegawai.php?Id=<?= $data_pegawai['Id'] ?>" class="btn btn-success">Ubah</a> 
                            <a href="hapus.php?Id=<?= $data_pegawai['Id'] ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="register.php" class="btn btn-primary w-100 mt-3" style="margin-bottom: 10px;">Tambah Pegawai</a>

        <a href="home.php" class="btn btn-primary w-100"style="background-color:#00008B">Home</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
