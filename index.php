<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendaftaran Pengguna</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    margin-bottom: 20px;
    color: #333;
}

.button-group {
    display: flex;
    justify-content: center;
    gap: 20px;
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #007BFF;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

a {
    text-decoration: none;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Home</h1>
        <div class="button-group">
            <a href="login.php"><button>Login</button></a>
            <a href="register.php"><button>Register</button></a>
        </div>
    </div>
</body>
</html>

