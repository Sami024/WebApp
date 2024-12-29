<?php
include_once("index.html");
include_once("index.js");
include_once("");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twist Food</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
</head>
<body>
<header class="header" id="header">
    <nav class="nav container">
        <!-- Logo -->
        <a href="index.html" class="nav__logo">
            <img src="../IMG/1598562279236_Twist-Food_Logo-1.png" alt="Twist Food Logo">
        </a>

        <!-- Navigation Menu -->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.html" class="nav__link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="menu.html" class="nav__link">Menu</a>
                </li>
                <li class="nav__item">
                    <a href="contact.html" class="nav__link">Contact</a>
                </li>
            </ul>
            <!-- Close Button -->
            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>

        <!-- Actions -->
        <div class="nav__actions">
            <!-- Search Button -->
            <i class="ri-search-line nav__search" id="search-btn"></i>
            <!-- Login Button -->
            <i class="ri-user-line nav__login" id="login-btn"></i>
            <!-- Toggle Button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </div>
    </nav>
</header>

<!--==================== SEARCH ====================-->
<div class="search" id="search">
    <form action="" class="search__form">
        <i class="ri-search-line search__icon"></i>
        <input type="search" placeholder="What are you looking for?" class="search__input">
    </form>
    <i class="ri-close-line search__close" id="search-close"></i>
</div>

<!--==================== LOGIN ====================-->
<div class="login" id="login">
    <form action="" class="login__form">
        <h2 class="login__title">Log In</h2>
        <div class="login__group">
            <div>
                <label for="email" class="login__label">Email</label>
                <input type="email" placeholder="Write your email" id="email" class="login__input">
            </div>
            <div>
                <label for="password" class="login__label">Password</label>
                <input type="password" placeholder="Enter your password" id="password" class="login__input">
            </div>
        </div>
        <div>
            <p class="login__signup">
                You do not have an account? <a href="signup.html">Sign up</a>
            </p>
            <a href="forgot-password.html" class="login__forgot">You forgot your password</a>
            <button type="submit" class="login__button">Log In</button>
        </div>
    </form>
    <i class="ri-close-line login__close" id="login-close"></i>
</div>




<!--=============== MAIN JS ===============-->
<script src="../js/main.js"></script>
</body>
</html>



















