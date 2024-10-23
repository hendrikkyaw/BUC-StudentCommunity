<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Navigation Bar</title>
    <link rel="stylesheet" href="navigator.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar-container">
                <!-- Logo -->
                <div class="logo">
                    <img src="images/university-logo.webp" alt="University Logo">
                </div>
                <!-- Secondary Links --> 
                <ul class="secondary-links">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">ABOUT BUC</a></li>
                    <li>
                        <a href="#" class="dropdown">STUDENT LIFE</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">CAMPUS</a></li>
                            <li><a href="#">ACTIVITIES</a></li>
                            <li><a href="#">EVENTS</a></li>
                        </ul>
                    </li>
                    <li><a href="#">CLUBS</a></li>
                    <li><a href="rgtest.php">REGISTRATION</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>

                </ul>
                <!-- Buttons -->
                <div class="nav-buttons">
                    <a href="login.php" class="btn admin">LOGIN</a>
                </div>
            </div>
        </nav>
    </header>

</body>
</html>