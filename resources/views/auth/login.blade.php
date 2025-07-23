<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Portfolio Admin</title>
    <style>
        /* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  background-color: white;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 300px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  font-size: 24px;
  color: #333;
}

.input-group {
  margin-bottom: 15px;
}

label {
  font-size: 14px;
  color: #555;
}

input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  color: #333;
}

input:focus {
  border-color: #007BFF;
  outline: none;
}

.btn-login {
  width: 100%;
  padding: 10px;
  background-color: #007BFF;
  color: white;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-login:hover {
  background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="login-container">
    <form class="login-form" action="{{route('login')}}" method="POST">
        @csrf
      <h2>Admin Login</h2>
      
      <div class="input-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>
      </div>
      
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      
      <button type="submit" class="btn-login">Login</button>
    </form>
  </div>
</body>
</html>