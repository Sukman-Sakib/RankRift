<?php
// Start session to manage login
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Games | RankRift</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>
* { margin:0; padding:0; box-sizing:border-box; font-family:Arial, Helvetica, sans-serif; }
body { background:#0f0f0f; color:#fff; min-height:100vh; }

/* NAVBAR */
header {
  background:#121212; padding:15px 40px;
  display:flex; align-items:center; justify-content:space-between;
  border-bottom:1px solid #1f1f1f;
}
.logo { font-size:24px; font-weight:bold; color:#00ffcc; }
nav a { margin-left:15px; text-decoration:none; color:#ccc; font-weight:bold; font-size:14px; }
nav a:hover { color:#fff; }

/* HERO */
.hero { padding:40px 60px; text-align:center; }
.hero h1 { font-size:36px; margin-bottom:10px; }
.hero p { font-size:16px; color:#ccc; }

/* GAMES GRID */
.games { display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:25px; padding:40px 60px; }
.game-card {
  background:#181818; border-radius:6px; overflow:hidden; cursor:pointer; transition:transform 0.3s;
}
.game-card:hover { transform:scale(1.05); }
.game-card img { width:100%; height:200px; object-fit:cover; }
.game-info { padding:10px; }
.game-info h3 { font-size:18px; margin-bottom:5px; }
.game-info p { font-size:14px; color:#aaa; }

/* FOOTER */
footer { background:#0a0a0a; text-align:center; padding:20px; color:#777; font-size:14px; }

@media(max-width:768px){
  .hero h1 { font-size:28px; }
  header { flex-direction:column; gap:10px; }
  .games { padding:20px; gap:15px; }
}
</style>
</head>
<body>

<!-- NAVBAR -->
<header>
  <div class="logo">RankRift</div>
  <nav>
    <a href="index.php">Home</a>
    <a href="games.php">Games</a>
    <a href="leaderboard.php">Leaderboard</a>
    <a href="login.php">Logout</a>
  </nav>
</header>

<!-- HERO -->
<section class="hero">
  <h1>Welcome to RankRift Games</h1>
  <p>Select a game and start playing!</p>
</section>

<!-- GAMES GRID -->
<section class="games">

  <!-- 1. Snake Game -->
  <div class="game-card" onclick="window.open('snake.php','_blank')">
    <img src="https://play-lh.googleusercontent.com/kw8nYs1Qryc8eki1hOsJXN3d7WLQFf4jIQn8rALLfKZQUGAyAZ-jGmEmnAsIUhSnj_I" alt="Snake Game">
    <div class="game-info">
      <h3>Snake Game</h3>
      <p>Classic retro snake game</p>
    </div>
  </div>

  <!-- 2. GTA V -->
  <div class="game-card" onclick="window.open('login.php','_blank')">
    <img src="https://mcdn.wallpapersafari.com/medium/52/39/XMSi14.jpg" alt="GTA V">
    <div class="game-info">
      <h3>Grand Theft Auto V</h3>
      <p>Action-Adventure</p>
    </div>
  </div>

  <!-- 3. Hogwarts Legacy -->
  <div class="game-card" onclick="window.open('login.php','_blank')">
    <img src="https://images.unsplash.com/photo-1713222836699-320ea7faaada" alt="Hogwarts Legacy">
    <div class="game-info">
      <h3>Hogwarts Legacy</h3>
      <p>Open-World RPG</p>
    </div>
  </div>

  <!-- 4. Silent Hill -->
  <div class="game-card" onclick="window.open('login.php','_blank')">
    <img src="https://static0.gamerantimages.com/wordpress/wp-content/uploads/2024/10/best-silent-hill-games-feature.jpg" alt="Silent Hill">
    <div class="game-info">
      <h3>Silent Hill</h3>
      <p>Horror Survival</p>
    </div>
  </div>

  <!-- 5. Fortnite -->
  <div class="game-card" onclick="window.open('login.php','_blank')">
    <img src="https://images.unsplash.com/photo-1612951397597-3f4088ec0477" alt="Fortnite">
    <div class="game-info">
      <h3>Fortnite</h3>
      <p>Battle Royale</p>
    </div>
  </div>

  <!-- 6. Call of Duty -->
  <div class="game-card" onclick="window.open('login.php','_blank')">
    <img src="https://images.unsplash.com/photo-1601758123927-9eb05aa12b6d" alt="Call of Duty">
    <div class="game-info">
      <h3>Call of Duty</h3>
      <p>Shooter</p>
    </div>
  </div>

  <!-- 7. Apex Legends -->
  <div class="game-card" onclick="window.open('login.php','_blank')">
    <img src="https://images.unsplash.com/photo-1602022178185-9d8a7d3c5f4f" alt="Apex Legends">
    <div class="game-info">
      <h3>Apex Legends</h3>
      <p>Battle Royale</p>
    </div>
  </div>

  <!-- 8. FIFA 24 -->
  <div class="game-card" onclick="window.open('login.php','_blank')">
    <img src="https://images.unsplash.com/photo-1601597119002-5565e217b2bb" alt="FIFA 24">
    <div class="game-info">
      <h3>FIFA 24</h3>
      <p>Football Simulation</p>
    </div>
  </div>

  <!-- 9. Minecraft -->
  <div class="game-card" onclick="window.open('login.php','_blank')">
    <img src="https://images.unsplash.com/photo-1585047740810-2c5a3ed8ecf5" alt="Minecraft">
    <div class="game-info">
      <h3>Minecraft</h3>
      <p>Sandbox Adventure</p>
    </div>
  </div>

  <!-- 10. Among Us -->
  <div class="game-card" onclick="window.open('login.php','_blank')">
    <img src="https://images.unsplash.com/photo-1600880292089-90e2c08f0c2f" alt="Among Us">
    <div class="game-info">
      <h3>Among Us</h3>
      <p>Social Deduction</p>
    </div>
  </div>

  <!-- 11. Cyberpunk 2077 -->
  <div class="game-card" onclick="window.open('login.php','_blank')">
    <img src="https://images.unsplash.com/photo-1606825382836-2f31e1e197c4" alt="Cyberpunk 2077">
    <div class="game-info">
      <h3>Cyberpunk 2077</h3>
      <p>Open-World RPG</p>
    </div>
  </div>

</section>

<!-- FOOTER -->
<footer>© 2025 RankRift. All rights reserved.</footer>

</body>
</html>
