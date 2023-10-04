<?php
// Establish database connection
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'bus_db';

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    
    // Perform validation here
    
    // Insert signup data into the database
    $sql = "INSERT INTO `cust_reg` (`user_name`, `user_fullname`, `password`, `user_created`) VALUES ('$username', '$fullname', '$password', NOW())";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html> 
<html>
<head>
    <title>Signup Page</title>
   <!-- <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        
        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #4caf50;
        }
        
        button[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
        }
        
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        
        p {
            text-align: center;
            margin-top: 15px;
        }
        
        p a {
            color: #4caf50;
            text-decoration: none;
        }
        
        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Signup Page</h1>
  
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="text" name="fullname" placeholder="Full Name" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Signup</button>
    </form>
  
    <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>-->




<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

input {
  caret-color: red;
}

body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background: #ecf0f3;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
}

.container {
  position: relative;
  width: 350px;
  height: 600px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}



.brand-title {
  margin-top: 10px;
  font-weight: 900;
  font-size: 1.8rem;
  color: #1DA1F2;
  letter-spacing: 1px;
}

.inputs {
  text-align: left;
  margin-top: 30px;
}

label, input, button {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-bottom: 4px;
}

label:nth-of-type(2) {
  margin-top: 12px;
}

input::placeholder {
  color: gray;
}

input {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

button {
  color: white;
  margin-top: 20px;
  background: #1DA1F2;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
}

button:hover {
  box-shadow: none;
}

a {
  position: absolute;
  font-size: 8px;
  bottom: 4px;
  right: 4px;
  text-decoration: none;
  color: black;
  background: yellow;
  border-radius: 10px;
  padding: 2px;
}

h1 {
  position: absolute;
  top: 0;
  left: 0;
}

.login{
    background-color: #ecf0f3;
    font-size:16px;
    margin-bottom: 18px;
    margin-right: 44px;
    /* color: blue; */
}

.login:hover{
    color:blue;
    text-decoration: underline;
    transition: 0.1s ease-in;
}


</style>

</head>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container">
      <div class="brand-logo"><img src="off!.png" height="100" width="100"></div>
      <div class="brand-title">BusPro</div>
      <div class="inputs">
        <label>USERNAME</label>
        <input type="text" name="username" placeholder="Username" required/>
        <label>USER FULLNAME</label>
        <input type="text" name="fullname" placeholder="User Fullname" required/>
        <label>PASSWORD</label>
        <input type="password" name="password" placeholder="Min 6 characters long" required/>
        <button type="submit">Sign In</button>
        <p>Already have an account?<a class="login" href="login.php">Login</a></p><!-- Add the login link here -->
      </div>
    </div>
  </form>

</body>

</html>