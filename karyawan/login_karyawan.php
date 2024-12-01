<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ini title</title>

    <!-- bootstrap css -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />

    <!-- css -->
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #F0F0F0;
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-signin {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-signin input {
            font-size: 1.2rem;
        }

        .form-signin button {
            font-size: 1.2rem;
            padding: 15px;
        }
    </style>

</head>

<body>
    <h1>login karyawan</h1>

    <!-- form -->
    <main class="form-signin">
        <form action="proses_login_karyawan.php" method="post">
            <div class="form-floating mb-4">
            <input type="text" class="form-control text" id="floatingUsername" name="username" placeholder="username" required="">
                <label for="floatingInput">username</label>
            </div>
            <div class="form-floating mb-4">
            <input type="password" class="form-control text" id="floatingPassword" name="password" placeholder="password" required="">
                <label for="floatingPassword">password</label>
            </div>
            <button class="btn btn-primary w-100" type="submit">login</button>
        </form>
    </main>

    <!-- bootstrap js -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>