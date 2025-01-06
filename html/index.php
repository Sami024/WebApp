<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twist Food</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <head>

    <body>
        <img class="logo" src="../IMG/1598562279236_Twist-Food_Logo-1.png">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="content">
                <h1>Welkom bij Twist Food</h1>
                <p>Twist Food is een restaurant waar je heerlijk kan eten en drinken. Wij hebben een uitgebreide menukaart met verschillende gerechten en dranken. Kom snel langs en geniet van onze heerlijke gerechten.</p>
            </div>
            <div class="content">
                <h1>Menu</h1>
                <p>Wij hebben een uitgebreide menukaart met verschillende gerechten en dranken. Bekijk onze menukaart en kom snel langs om te genieten van onze heerlijke gerechten.</p>
            </div>
            <div class="content">
                <h1>Contact</h1>
                <p>Heeft u vragen of wilt u reserveren? Neem dan contact met ons op. Wij zijn telefonisch bereikbaar op 06-12345678
                <p>
                <header class="header" id="header">
                    <nav class="nav container">
                        <a href="../IMG/1598562279236_Twist-Food_Logo-1.png" class="nav__logo">Logo</a>
                        <div class="nav__menu" id="nav-menu">
                            <ul class="nav__list">
                                <li class="nav__item">
                                    <a href="#" class="nav__link"></a>
                                </li>
                                <li class="nav__item">
                                    <a href="#" class="nav__link"></a>
                                </li>
                                <li class="nav__item">
                                    <a href="#" class="nav__link"></a>
                                </li>
                                <li class="nav__item">
                                    <a href="#" class="nav__link">Home</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#" class="nav__link">Menu</a>
                                </li>
                            </ul>
                            <!-- Close button -->
                            <div class="nav__close" id="nav-close">
                                <i class="ri-close-line"></i>
                            </div>
                        </div>
                        <div class="content">
                            <h1>Openingstijden</h1>
                            <p>Wij zijn geopend van maandag t/m zondag van 12:00 tot 22:00. Kom snel langs en geniet van onze heerlijke gerechten.</p>
                            <div class="nav__actions">
                                <!-- Search button -->
                                <i class="ri-search-line nav__search" id="search-btn"></i>
                                <!-- Login button -->
                                <i class="ri-user-line nav__login" id="login-btn"></i>
                                <!-- Toggle button -->
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
                <footer>
                    <p>Twist Food</p>
                    <p>Adres: Marokko, 8500 Tiznit</p>
                    <p>Telefoonnummer: +212 5288-66768</p>

                </footer>
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
                                You do not have an account? <a href="#">Sign up</a>
                            </p>
                            <a href="#" class="login__forgot">
                                You forgot your password
                            </a>
                            <button type="submit" class="login__button">Log In</button>
                        </div>
                    </form>
                    <i class="ri-close-line login__close" id="login-close"></i>
                </div>

                <!--==================== MAIN ====================-->
                <main class="main">
                    <iframe></iframe>
                </main>

                <!--=============== MAIN JS ===============-->
                <script src="../js/main.js"></script>
    </body>

</html>