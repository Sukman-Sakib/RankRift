<?php
session_start();
include 'db.php';

$msg = '';
if(isset($_POST['login'])){
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        $user = $res->fetch_assoc();
        if(password_verify($password, $user['password'])){
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php");
            exit;
        } else { $msg = "Invalid password"; }
    } else { $msg = "Email not registered"; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login | RankRift</title>
<style>
body{background:#0f0f0f;color:#fff;font-family:Arial;}
header{background:#121212;padding:15px 40px;display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #1f1f1f;}
.logo{color:#00ffcc;font-weight:bold;font-size:24px;}
nav a{margin-left:15px;color:#ccc;text-decoration:none;font-weight:bold;}
nav a:hover{color:#fff;}
.container{width:100%;max-width:980px;padding:40px 20px;margin:0 auto;display:flex;gap:60px;flex-wrap:wrap;justify-content:center;}
.left{flex:1;min-width:250px;}
.left .logo{font-size:48px;margin-bottom:20px;color:#00ffcc;}
.left p{font-size:22px;color:#ccc;}
.right{max-width:380px;width:100%;}
.login-box{background:#181818;padding:25px;border-radius:8px;}
.login-box input{width:100%;padding:14px;margin-bottom:15px;background:#0f0f0f;border:1px solid #2a2a2a;border-radius:6px;color:#fff;}
.login-btn{width:100%;padding:14px;background:#00ffcc;border:none;border-radius:6px;font-size:17px;font-weight:bold;cursor:pointer;}
.login-btn:hover{background:#00ddb0;}
.msg{color:#ff4d4d;text-align:center;margin-bottom:10px;}
</style>
</head>
<body>
<header>
<div class="logo">RankRift</div>
<nav><a href="index.php">Home</a></nav>
</header>

<div class="container">
<div class="left"><div class="logo">RankRift</div><p>Compete, track scores, and climb the leaderboard.</p></div>
<div class="right">
<div class="login-box">
<?php if($msg) echo "<div class='msg'>$msg</div>"; ?>
<form method="post">
<input type="email" name="email" placeholder="Email address" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="login" class="login-btn">Log In</button>
</form>
<a href="signup.php" style="color:#00ffcc; display:block; text-align:center; margin-top:15px;">Create New Account</a>
</div>
</div>
</div>
</body>
</html>
