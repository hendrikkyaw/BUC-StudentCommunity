<?php
include('navigator.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif; /* Use a clean font for better readability */
            background-color: #FFFFFF; /* White background for the whole page */
            color: #14223D; /* Dark text for contrast */
        }
        .main {
            width: 500px;
            margin: 50px auto; /* Centering with margin for better spacing */
            background-color: #DDB157; /* Gold background for the form */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            padding: 20px; /* Padding inside the form */
        }
        h2 {
            text-align: center;
            color: #14223D; /* Dark title color */
        }
        #content {
            margin-bottom: 15px; /* Increased margin for better spacing */
        }
        label {
            font-weight: bold; /* Bold labels for emphasis */
        }
        input[type="text"], select, textarea {
            width: 100%; 
            padding: 10px; /* Increased padding for better touch targets */
            margin-top: 5px; /* Spacing above input elements */
            border: 1px solid #14223D; /* Dark border for input fields */
            border-radius: 5px; /* Rounded corners for input fields */
            box-sizing: border-box; /* Include padding and border in width */
        }
        input[type="radio"] {
            margin-right: 5px; /* Spacing between radio button and label */
        }
        #contentsub {
            text-align: center;
        }
        input[type="submit"] {
            background-color: #14223D; /* Dark button background */
            color: #FFFFFF; /* White text on button */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            padding: 10px 15px; /* Padding for the button */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }
        input[type="submit"]:hover {
            background-color: #DDB157; /* Change background color on hover */
            color: #14223D; /* Change text color on hover */
        }
        .message {
            color: green; /* Green message color */
            font-weight: bold; /* Bold message text */
            text-align: center; /* Center align message */
            margin-bottom: 15px; /* Spacing below the message */
        }
    </style>
</head>
<body>
    <form action="registration2.php" method="post">
        <?php
            $club = "";
            if (isset($_GET['message'])) {
                echo '<p class="message">' . $_GET['message'] . '</p>';
            }
            if (isset($_GET['btn'])) {
                $club = $_GET['btn'];
            }
        ?>
        <div class="main">
            <h2>Club Registration Form</h2>
            <div style="display: flex; justify-content: space-between;">
                <div id="content">
                    <label>First Name</label>
                    <input type="text" name="fname" required> 
                </div>
                <div id="content">
                    <label>Last Name</label>
                    <input type="text" name="lname" required>
                </div>
            </div>
            <div id="content">
                <lable>Year</lable>
                <select name="year" required>
                    <option value="">-- Select Year --</option>
                    <option value="first">Foundation</option>
                    <option value="second">Higher Diploma</option>
                    <option value="third">Bachelors Degree</option>
                </select>
            </div>
            <div id="content">
                <label>Gender</label><br>
                <input type="radio" name="gender" value="male" required> Male
                <input type="radio" name="gender" value="female" required> Female
            </div>
            <div id="content">
                <label>Name of Club</label>
                <select name="club" required>
                    <option value="">-- Select Club --</option>
                    <option value="music" <?php if ($club == 'music') echo 'selected'; ?>>Music Club</option>
                    <option value="dance" <?php if ($club == 'dance') echo 'selected'; ?>>Dance Club</option>
                    <option value="bedminton" <?php if ($club == 'bedminton') echo 'selected'; ?>>Bedminton Club</option>Sports Club</option>
                    <option value="football" <?php if ($club == 'football') echo 'selected'; ?>>Football Club</option>
                </select>
            </div>
            <div id="content">
                <label>Reason for Joining the Club</label>
                <textarea rows="5" name="reason" required></textarea>
            </div>
            <div id="contentsub">
                <input type="submit" name="submit" value="Register">
            </div>
        </div>

    </form>
    
</body>
</html>