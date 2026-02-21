<?php
session_start();
include 'db.php';
$sql = "SELECT u.username, s.score, s.played_at 
        FROM snake_scores s 
        JOIN users u ON s.user_id=u.id 
        ORDER BY s.score DESC LIMIT 20";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Leaderboard | RankRift</title>
<style>
body{background:#0f0f0f;color:#fff;font-family:Arial;}
header{background:#121212;padding:15px 40px;display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #1f1f1f;}
.logo{color:#00ffcc;font-weight:bold;font-size:24px;}
nav a{margin-left:15px;color:#ccc;text-decoration:none;font-weight:bold;}
nav a:hover{color:#fff;}
.hero{text-align:center;padding:40px 60px;}
.hero h1{font-size:36px;margin-bottom:10px;}
.hero p{font-size:16px;color:#ccc;}
.leaderboard{width:90%;max-width:800px;margin:30px auto;border-collapse:collapse;}
.leaderboard th, .leaderboard td{padding:12px 15px;border-bottom:1px solid #2a2a2a;text-align:center;}
.leaderboard th{background:#181818;color:#00ffcc;}
.leaderboard td{background:#1f1f1f;}
footer{text-align:center;padding:20px;color:#777;font-size:14px;background:#0a0a0a;}
</style>
</head>
<body>
<header>
<div class="logo">RankRift</div>
<nav>
<a href="index.php">Home</a>
<a href="games.php">Games</a>
<a href="leaderboard.php">Leaderboard</a>
<?php if(isset($_SESSION['username'])) echo '<a href="logout.php">Logout</a>'; ?>
</nav>
</header>

<section class="hero">
<h1>Snake Game Leaderboard</h1>
<p>Top scores of players in the Snake game</p>
</section>

<table class="leaderboard">
<tr><th>Rank</th><th>Username</th><th>Score</th><th>Date</th></tr>
<?php
$rank = 1;
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>$rank</td><td>{$row['username']}</td><td>{$row['score']}</td><td>".date("d M Y H:i", strtotime($row['played_at']))."</td></tr>";
        $rank++;
    }
}else{
    echo "<tr><td colspan='4'>No scores yet.</td></tr>";
}
?>
</table>
<footer>© 2025 RankRift. All rights reserved.</footer>
</body>
</html>
