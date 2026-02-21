<?php
session_start();
include 'db.php';

$msg = '';
if(isset($_POST['signup'])){
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
    if($conn->query($sql)){
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $conn->insert_id;
        header("Location: index.php");
        exit;
    } else {
        $msg = "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign Up | RankRift</title>
<style>
body{background:#0f0f0f;color:#fff;font-family:Arial;}
header{background:#121212;padding:15px 40px;display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #1f1f1f;}
.logo{color:#00ffcc;font-weight:bold;font-size:24px;}
nav a{margin-left:15px;color:#ccc;text-decoration:none;font-weight:bold;}
nav a:hover{color:#fff;}
.container{width:100%;max-width:980px;margin:40px auto;display:flex;gap:60px;padding:0 20px;}
.left{flex:1;}
.logo-large{font-size:48px;color:#00ffcc;margin-bottom:20px;}
.left p{font-size:22px;color:#ccc;}
.right{max-width:400px;width:100%;}
.signup-box{background:#181818;padding:25px;border-radius:8px;}
.signup-box input{width:100%;padding:14px;margin-bottom:14px;background:#0f0f0f;border:1px solid #2a2a2a;border-radius:6px;color:#fff;}
.signup-btn{width:100%;padding:14px;background:#00ffcc;border:none;border-radius:6px;font-size:17px;font-weight:bold;cursor:pointer;}
.signup-btn:hover{background:#00ddb0;}
.login-link{display:block;text-align:center;margin-top:15px;color:#00ffcc;text-decoration:none;}
.msg{color:#ff4d4d;text-align:center;margin-bottom:10px;}
</style>
</head>
<body>
<header>
<div class="logo">RankRift</div>
<nav>
<a href="index.php">Home</a>
</nav>
</header>

<div class="container">
<div class="left">
<div class="logo-large">RankRift</div>
<p>Create your RankRift account and start competing.</p>
</div>

<div class="right">
<div class="signup-box">
<h2>Create Account</h2>
<?php if($msg) echo "<div class='msg'>$msg</div>"; ?>
<form method="post">
<input type="text" name="username" placeholder="Username" required>
<input type="email" name="email" placeholder="Email address" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="signup" class="signup-btn">Sign Up</button>
</form>
<a href="login.php" class="login-link">Already have an account? Log in</a>
</div>
</div>
</div>
</body>
</html>
