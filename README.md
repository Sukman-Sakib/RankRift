# 🎮 Game Portal System 

A web-based Game Portal built using **PHP and MySQL** where users can create accounts, login, play games, and view their scores on a leaderboard.

This project was developed as part of a **Database Management System (DBMS)** course to demonstrate database connectivity, user authentication, and score management.

---

## 🚀 Features

- User Registration System
- User Login and Logout
- Session Management
- Snake Game Integration
- Leaderboard System
- Score Storage in Database
- Dynamic Web Pages using PHP and MySQL

---

## 🛠️ Technologies Used

- HTML
- CSS
- PHP
- MySQL
- XAMPP
- phpMyAdmin
- Visual Studio Code

---

Game-Portal/
│
├── db.php             # Database connection
├── index.php          # Landing page
├── home.php           # User dashboard
├── login.php          # Login system
├── signup.php         # Registration system
├── logout.php         # Logout system
├── games.php          # Game selection page
├── snake.php          # Snake game
├── leaderboard.php    # Leaderboard system

---

## 🗄️ Database Structure

### Users Table
- id (Primary Key)
- username
- email
- password

### Scores Table
- id (Primary Key)
- user_id (Foreign Key)
- game_name
- score
- date

---

## ⚙️ How to Run the Project

Step 1: Install XAMPP

Step 2: Move the project folder to:

C:\xampp\htdocs\

Step 3: Start Apache and MySQL from XAMPP Control Panel

Step 4: Open phpMyAdmin and create a new database

Step 5: Import your SQL file into the database

Step 6: Open browser and go to:

http://localhost/Project_rankrift/

---

## 🎯 Learning Objectives

This project demonstrates:

- Database Connectivity using PHP
- User Authentication System
- Session Handling
- CRUD Operations
- Leaderboard System
- Real-world DBMS implementation

---

## 👨‍💻 Author

Sukman Islam Chowdhury & Radif Abdullah, 
Leading University

---

## 📌 Project Purpose

This project was created for academic purposes as a DBMS project and to gain practical experience with PHP and MySQL database integration.

---

## 🔮 Future Improvements

- Add more games
- Improve UI design
- Add password encryption
- Add user profile system
- Add multiplayer functionality

---

