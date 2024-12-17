<?php
// Simulasi data karyawan untuk cuti
$cuti = [
    ['nama' => 'Ilham', 'alasan' => 'Lorem ipsum'],
    ['nama' => 'Aldo', 'alasan' => 'Lorem ipsum'],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Cuti</title>

    <!-- bootstrap css -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 200px;
            background-color: #28a745;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            color: white;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
        }

        .sidebar h1 {
            font-size: 20px;
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            background-color: #34d058;
            width: 90%;
            text-align: center;
            padding: 10px;
            margin: 5px auto;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #28a745;
        }

        .header {
            background-color: #007bff;
            padding: 15px;
            color: white;
            margin-left: 200px;
            /* Sidebar width */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .main-content {
            padding: 20px;
            margin-left: 200px;
            /* Tambahkan margin kiri sesuai sidebar */
            min-height: 100vh;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th,
        td {
            border-bottom: 1px solid #ddd;
            padding: 10px;
        }

        th {
            background-color: #90ee90;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 0;
        }

        button:hover {
            background-color: #1e7a38;
        }

        .action {
            color: blue;
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: ../index.php");
    } else {
        $username = $_SESSION['username'];
    }
    ?>

    <!-- Sidebar -->
    <div class="sidebar">
        <h1>Manajer</h1>
        <button onclick="window.location.href='manajer.php'">Dashboard</button>
        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>

    <!-- Header -->
    <div class="header">
        Halo, Manajer
    </div>


    <!-- Main Content -->
    <div class="main-content">
        <table>
            <thead>
                <tr>
                    <th>Nama karyawan</th>
                    <th>Alasan pengajuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cuti as $index => $data): ?>
                    <tr>
                        <td><?= ($index + 1) . '. ' . htmlspecialchars($data['nama']); ?></td>
                        <td><?= htmlspecialchars($data['alasan']); ?></td>
                        <td>
                            <span class="action">Terima</span>
                            <span class="action">Tidak</span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- bootstrap js -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>