
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Information</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <div class="container">
        <h2>Student Registration Form</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Student full name:</label>
                <input type="text" id="username" name="username" required>
            </div>
			
			<div class="form-group">
                <label for="Fathers_name">Fathers name:</label>
                <input type="text" id="Fathers_name" name="Fathers_name" required>
            </div>
			
			<div class="form-group">
                <label for="std-id">student id:</label>
                <input type="text" id="std-id" name="std-id" required>
            </div>
			
			
			
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
			
			
			<div class="form-group">
                <label for="phn">Phone Number:</label>
                <input type="phn" id="phn" name="phn" required>
            </div>
			
			
			<div class="form-group">
                <label for="d-birth">Date of birth:</label>
                <input type="birth" id="birth" name="birth" required>
            </div>
			
			
			
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
			
			<div class="form-group">
                <label for="M-add">Mailing Address:</label>
                <input type="M-add" id="M-add" name="M-add" required>
            </div>
			
			
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</htm>

body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f4f4f4;
}

h2 {
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
