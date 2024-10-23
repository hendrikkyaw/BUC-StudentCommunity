<?php
include('navigator.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
            color: #14223D;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh; /* Full screen height */
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        /* Fullscreen Video */
        .hero video {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: translate(-50%, -50%);
            z-index: -1; /* Behind text content */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Black with 40% opacity */
            z-index: 0; /* Behind text content */
        }
        
        .text-container {
            position: relative; /* Position relative to the hero */
            z-index: 1; /* Ensure it is above the overlay */
            color: white; /* Keep text color bright */
        }

        .hero h1 {
            font-size: 50px;
            margin-bottom: 20px;
            z-index: 1; /* Ensures the text stays above the video */
        }

        .hero p {
            font-size: 24px;
            font-weight: bold;
            z-index: 1;
        }

        /* Button Styles */
        .hero a {
            text-decoration: none;
            padding: 15px 30px;
            background-color: #14223D;
            color: #DDB157;
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s;
            z-index: 1;
        }

        .hero a:hover {
            background-color: #090f1b;
        }

        /* Welcome Section */
        .welcome-section {
            padding: 50px 100px;
            text-align: center;
        }

        .welcome-section h2 {
            font-size: 36px;
            color: #14223D;
            margin-bottom: 20px;
        }

        .welcome-section p {
            font-size: 20px;
            color: #333333;
            line-height: 1.6;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>

    <!-- Hero Section with Background Video -->
    <div class="hero">
        <video autoplay muted loop>
            <source src="images/bucBackground.mp4" type="video/mp4">
            <!-- Fallback content --><?php include('navigator.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #F0F0F0; /* Light gray background */
            color: #14223D; /* Dark text */
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #14223D;
        }

        .club-container {
            display: flex;
            justify-content: space-around; /* Space around blocks */
            flex-wrap: wrap; /* Wrap blocks on smaller screens */
            margin: 20px;
        }

        .club {
            background-color: #DDB157;
            border-radius: 15px; /* Rounded corners */
            width: 300px;
            padding: 20px;
            margin: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        .club h3 {
            margin-bottom: 15px;
        }

        .club p {
            margin-bottom: 20px;
            color: #14223D; /* Dark text for contrast */
        }

        .club button {
            background-color: #14223D;
            color: #FFFFFF;
            border: none;
            border-radius: 10px; /* Rounded button corners */
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .club button:hover {
            background-color: #090f1b; /* Darker on hover */
        }

        /* Responsive for small screens */
        @media (max-width: 768px) {
            .club-container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <h2>Clubs</h2>
    <div class="club-container">
        <!-- Club 1 -->
        <div class="club">
            <h3>Music Club</h3>
            <p>Join the Music Club to explore your passion for music and learn new instruments!</p>
            <form action="registration.php" method="get">
                <input type="hidden" name="btn" value="music">
                <button type="submit">Register</button>
            </form>
        </div>

        <!-- Club 2 -->
        <div class="club">
            <h3>Dance Club</h3>
            <p>Unleash your creativity and rhythm in the Dance Club. All levels are welcome!</p>
            <form action="registration.php" method="get">
                <input type="hidden" name="btn" value="dance">
                <button type="submit">Register</button>
            </form>
        </div>

        <!-- Club 3 -->
        <div class="club">
            <h3>Badminton Club</h3>
            <p>Love badminton? Join our club to improve your skills and play with friends!</p>
            <form action="registration.php" method="get">
                <input type="hidden" name="btn" value="badminton">
                <button type="submit">Register</button>
            </form>
        </div>

        <!-- Club 4 -->
        <div class="club">
            <h3>Football Club</h3>
            <p>Whether you're a beginner or a pro, join our Football Club and enjoy the game!</p>
            <form action="registration.php" method="get">
                <input type="hidden" name="btn" value="football">
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php include('footer.php'); ?>

            Your browser does not support HTML5 video.
        </video>
        <div class="overlay"></div>
        <div class="overlay"></div>
        <div class="text-container">
                <div class="logo">
                    <img src="images/bucTrans.png" alt="BUC Logo">
                </div>
            <h1>Welcome to British University College</h1>
            <p>Unlock Your Potential, Embrace Education</p>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="welcome-section">
        <h2>Student's Community Site</h2>
        <p>This website is dedicated to -including but not limited to- the students of British University College. <br>Whether you wish to learn the events, activities, explore our various student clubs or join them, we have got what you need!</p>
        <p>Explore our campus and get involved in our vibrant student community. We're excited to be part of your journey!</p>
    </div>

</body>
</html>
<?php include('footer.php'); ?>
