<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
include 'db.php';

// Save score if submitted via POST
if(isset($_POST['score'])){
    $user_id = $_SESSION['user_id'];
    $score = intval($_POST['score']);
    $sql = "INSERT INTO snake_scores (user_id, score) VALUES ($user_id, $score)";
    $conn->query($sql);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Snake Game | RankRift</title>
<style>
body{background:#0f0f0f;color:#fff;font-family:Arial;text-align:center;}
canvas{background:#181818;margin-top:20px;display:block;margin-left:auto;margin-right:auto;}
</style>
</head>
<body>
<h1>Snake Game</h1>
<canvas id="game" width="400" height="400"></canvas>
<p id="scoreText">Score: 0</p>
<script>
const canvas=document.getElementById('game');
const ctx=canvas.getContext('2d');
const box=20;
let snake=[{x:9*box,y:10*box}];
let food={x:Math.floor(Math.random()*20)*box,y:Math.floor(Math.random()*20)*box};
let score=0;
let d;
document.addEventListener('keydown',direction);
function direction(event){ if(event.keyCode==37 && d!='RIGHT') d='LEFT'; else if(event.keyCode==38 && d!='DOWN') d='UP'; else if(event.keyCode==39 && d!='LEFT') d='RIGHT'; else if(event.keyCode==40 && d!='UP') d='DOWN'; }
function draw(){
    ctx.fillStyle='#0f0f0f';
    ctx.fillRect(0,0,canvas.width,canvas.height);
    for(let i=0;i<snake.length;i++){
        ctx.fillStyle=(i==0)?'#00ffcc':'#fff';
        ctx.fillRect(snake[i].x,snake[i].y,box,box);
        ctx.strokeStyle='#0f0f0f';
        ctx.strokeRect(snake[i].x,snake[i].y,box,box);
    }
    ctx.fillStyle='red';
    ctx.fillRect(food.x,food.y,box,box);
    let snakeX=snake[0].x;
    let snakeY=snake[0].y;
    if(d=='LEFT') snakeX-=box;
    if(d=='UP') snakeY-=box;
    if(d=='RIGHT') snakeX+=box;
    if(d=='DOWN') snakeY+=box;
    if(snakeX==food.x && snakeY==food.y){
        score++;
        document.getElementById('scoreText').innerText='Score: '+score;
        food={x:Math.floor(Math.random()*20)*box,y:Math.floor(Math.random()*20)*box};
    }else{snake.pop();}
    let newHead={x:snakeX,y:snakeY};
    // Collision
    if(snakeX<0||snakeX>=canvas.width||snakeY<0||snakeY>=canvas.height||collision(newHead,snake)){
        alert('Game Over! Score: '+score);
        // Send score to server
        fetch('snake.php',{method:'POST',headers:{'Content-Type':'application/x-www-form-urlencoded'},body:'score='+score});
        window.location.href='leaderboard.php';
    }
    snake.unshift(newHead);
}
function collision(head,array){for(let i=0;i<array.length;i++){if(head.x==array[i].x && head.y==array[i].y) return true;}return false;}
setInterval(draw,100);
</script>
</body>
</html>
