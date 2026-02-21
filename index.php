<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>RankRift | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial;}
body{background:#0f0f0f;color:#fff;}
header{background:#121212;padding:15px 40px;display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #1f1f1f;}
.logo{color:#00ffcc;font-weight:bold;font-size:24px;}
nav a{margin-left:15px;text-decoration:none;color:#ccc;font-weight:bold;font-size:14px;}
nav a:hover{color:#fff;}
.hero{height:85vh;background:linear-gradient(to right,#000000cc,#000000cc), url('https://images.unsplash.com/photo-1542751371-adc38448a05e') center/cover no-repeat;display:flex;align-items:center;padding:0 60px;}
.hero-content{max-width:600px;}
.hero h1{font-size:48px;margin-bottom:20px;}
.hero p{font-size:18px;color:#ccc;margin-bottom:30px;}
.btn-hero{display:inline-block;padding:12px 25px;background:#00ffcc;color:#000;border:none;border-radius:6px;font-weight:bold;cursor:pointer;}
.btn-hero:hover{background:#00ddb0;}
footer{text-align:center;padding:20px;color:#777;font-size:14px;background:#0a0a0a;}
@media(max-width:768px){.hero h1{font-size:36px;} header{flex-direction:column;gap:10px;}}
</style>
</head>
<body>

<header>
  <div class="logo">RankRift</div>
  <nav>
    <a href="index.php">Home</a>
    <a href="games.php">Games</a>
    <a href="leaderboard.php">Leaderboard</a>
    <?php if(isset($_SESSION['username'])): ?>
      <a href="logout.php">Logout</a>
    <?php else: ?>
      <a href="login.php">Login</a>
      <a href="signup.php">Sign Up</a>
    <?php endif; ?>
  </nav>
</header>

<section class="hero">
  <div class="hero-content">
    <h1>Compete. Play. Rise.</h1>
    <p>RankRift is your ultimate competitive gaming platform. Play games, earn scores, climb the leaderboard, and prove your skill.</p>
    <button class="btn-hero" onclick="window.location.href='games.php'">Start Playing</button>
  </div>
</section>

<footer>© 2025 RankRift. All rights reserved.</footer>
</body>
</html>
