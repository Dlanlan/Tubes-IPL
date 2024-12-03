<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ini Title</title>

    <!-- bootstrap css -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />

    <!-- css -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #F0F0F0;
        }

        .center-container {
            text-align: center;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        button {
            width: 200px;
            height: 60px;
            font-size: 18px;
        }
    </style>

</head>

<body>
    <div class="center-container">
        <p>role kamu sebagai?</p>
        <div class="button-container">
            <a href="admin/login_admin.php" target="_blank">
                <button class="btn btn-primary">admin</button>
            </a>

            <a href="manajer/login_manajer.php" target="_blank">
                <button class="btn btn-primary">manajer</button>
            </a>

            <a href="karyawan/login_karyawan.php" target="_blank">
                <button class="btn btn-primary">karyawan</button>
            </a>
        </div>
    </div>

    <!-- bootstrap js -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>