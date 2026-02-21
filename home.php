<?php
// Start session (for login/logout handling later)
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>RankRift | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<style>
  * { margin:0; padding:0; box-sizing:border-box; font-family:Arial, Helvetica, sans-serif; }
  body { background-color:#0f0f0f; color:#fff; }

  /* ================= NAVBAR ================= */
  header {
    background-color:#121212;
    padding:15px 40px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    border-bottom:1px solid #1f1f1f;
  }
  .logo { font-size:24px; font-weight:bold; color:#00ffcc; }
  nav a {
    margin-left:15px;
    text-decoration:none;
    color:#cccccc;
    font-weight:bold;
    font-size:14px;
    transition: color 0.2s;
  }
  nav a:hover { color:#ffffff; }

  /* ================= HERO ================= */
  .hero {
    height:85vh;
    background: linear-gradient(to right,#000000cc,#000000cc),
      url("https://images.unsplash.com/photo-1542751371-adc38448a05e") center/cover no-repeat;
    display:flex;
    align-items:center;
    padding:0 60px;
  }
  .hero-content { max-width:600px; }
  .hero h1 { font-size:48px; margin-bottom:20px; }
  .hero p { font-size:18px; color:#cccccc; margin-bottom:30px; }
  .btn-hero {
    display:inline-block;
    padding:12px 25px;
    background-color:#00ffcc;
    color:#000;
    text-decoration:none;
    border-radius:6px;
    font-size:14px;
    font-weight:bold;
    border:none;
    cursor:pointer;
  }
  .btn-hero:hover { background-color:#00ddb0; }

  /* ================= FOOTER ================= */
  footer {
    background-color:#0a0a0a;
    text-align:center;
    padding:20px;
    color:#777777;
    font-size:14px;
  }

  @media(max-width:768px){
    .hero h1 { font-size:36px; }
    header { flex-direction:column; gap:10px; }
  }
</style>
</head>

<body>

<!-- NAVBAR -->
<header>
  <div class="logo">RankRift</div>
  <nav>
    <a href="home.php">Home</a>
    <a href="leaderboard.php">Leaderboard</a>
    <a href="games.php">Games</a>
    <a href="logout.php">Logout</a>
  </nav>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <h1>Compete. Play. Rise.</h1>
    <p>
      RankRift is your ultimate competitive gaming platform.
      Play games, earn scores, climb the leaderboard, and prove your skill.
    </p>
    <button type="button" class="btn-hero" onclick="window.location.href='games.php'">
      Start Playing
    </button>
  </div>
</section>

<!-- FOOTER -->
<footer>© 2025 RankRift. All rights reserved.</footer>

</body>
</html>
