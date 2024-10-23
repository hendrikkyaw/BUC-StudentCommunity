<?php include('navigator.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #F0F0F0;
            color: #14223D;
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
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px;
        }

        .club {
            width: 300px;
            height: 400px;
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            padding: 20px;
            margin: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: white; /* White text to contrast with background image */
            position: relative; /* For overlay effect */
        }

        .club h3 {
            margin-bottom: 15px;
            z-index: 2; /* Place above background */
        }

        .club p {
            margin-bottom: 20px;
            z-index: 2;
        }

        .club button {
            background-color: #14223D;
            color: #FFFFFF;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            z-index: 2;
            position: relative;
        }

        .club button:hover {
            background-color: #090f1b;
        }

        /* Background overlay for better text readability */
        .club::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4); /* Dark overlay for text contrast */
            border-radius: 15px; /* Rounded corners for overlay */
            z-index: 1;
        }

        /* Club-specific background images */
        .club.music {
            background-image: url('music-club.jpg');
        }

        .club.dance {
            background-image: url('dance-club.jpg');
        }

        .club.badminton {
            background-image: url('badminton-club.jpg');
        }

        .club.football {
            background-image: url('football-club.jpg');
        }

        /* Responsive design */
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
        <div class="club music">
            <h3>Music Club</h3>
            <p>Join the Music Club to explore your passion for music and learn new instruments!</p>
            <form action="registration.php" method="get">
                <input type="hidden" name="btn" value="music">
                <button type="submit">Register</button>
            </form>
        </div>

        <!-- Club 2 -->
        <div class="club dance">
            <h3>Dance Club</h3>
            <p>Unleash your creativity and rhythm in the Dance Club. All levels are welcome!</p>
            <form action="registration.php" method="get">
                <input type="hidden" name="btn" value="dance">
                <button type="submit">Register</button>
            </form>
        </div>

        <!-- Club 3 -->
        <div class="club badminton">
            <h3>Badminton Club</h3>
            <p>Love badminton? Join our club to improve your skills and play with friends!</p>
            <form action="registration.php" method="get">
                <input type="hidden" name="btn" value="badminton">
                <button type="submit">Register</button>
            </form>
        </div>

        <!-- Club 4 -->
        <div class="club football">
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
