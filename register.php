<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    width: 300px;
}

h1 {
    margin-bottom: 20px;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
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
    color: #007BFF;
    text-decoration: none;
    transition: color 0.3s ease;
}

a:hover {
    color: #0056b3;
}

.back-button {
    background-color: #6c757d;
    margin-bottom: 20px;
}

.back-button:hover {
    background-color: #5a6268;
}
</style>
</head>
<body>
<div class="container">
        <a href="index.php"><button class="back-button">Back Home</button></a>
        <h1>Halaman Register</h1>
        <form action="handler.php" method="post">
            <input type="text" name="username" placeholder="Ketik username disini.." required><br>
            <input type="email" name="email" placeholder="Ketik email disini.." required><br>
            <input type="password" name="password" placeholder="Ketik password disini.." required><br>
            <button type="submit" name="action" value="register">Register!</button>
        </form><br>
        <a href="login.php">Login disini</a>
    </div>
</body>
</html>