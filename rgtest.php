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
            font-family: Arial, sans-serif; /* Clean font for readability */
            background-color: #F0F0F0; /* Light gray background for contrast */
            color: #14223D; /* Dark text for contrast */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        .main {
            width: 500px;
            margin: 50px auto; /* Centering */
            background-color: #FFFFFF; /* White background for the form */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            padding: 20px; /* Padding inside the form */
            border: 1px solid #c4b8a2; /* Border similar to navbar */
        }

        h2 {
            text-align: center; /* Center title */
            color: #14223D; /* Dark title color */
            shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
        }

        h3 {
            text-align: center; /* Center title */
            color: #14223D; /* Dark title color */
            shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            margin-bottom: 15px;
        }

        #content {
            margin-bottom: 20px; /* Increased margin for spacing */
        }

        #content label {
            font-weight: bold; /* Bold labels */
        }

        input[type="text"], select, textarea {
            width: 100%; 
            padding: 10px; /* Padding for inputs */
            margin-top: 5px; /* Spacing above input elements */
            border: 1px solid #14223D; /* Dark border for input fields */
            border-radius: 5px; /* Rounded corners */
            box-sizing: border-box; /* Include padding and border in width */
            transition: border-color 0.3s; /* Smooth transition for border color */
        }

        input[type="text"]:focus, select:focus, textarea:focus {
            border-color: #DDB157; /* Change border color on focus */
            outline: none; /* Remove default outline */
        }

        input[type="radio"] {
            margin-right: 5px; /* Spacing between radio button and label */
        }

        #contentsub {
            text-align: center; /* Center align submit button */
        }

        input[type="submit"] {
            background-color: #14223D; /* Dark button background */
            color: #FFFFFF; /* White text */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            padding: 10px 15px; /* Padding for the button */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }

        input[type="submit"]:hover {
            background-color: #DDB157; /* Change background on hover */
            color: #14223D; /* Change text color on hover */
        }

        .message {
            color: green; /* Green message color */
            font-weight: bold; /* Bold message text */
            text-align: center; /* Center align message */
            margin-bottom: 15px; /* Spacing below the message */
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .main {
                width: 90%; /* Responsive width on smaller screens */
            }
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
                <label>Student ID</label>
                <input type="text" name="id" required>
            </div>
            <div id="content">
                <label>Year</label>
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
                    <option value="bedminton" <?php if ($club == 'bedminton') echo 'selected'; ?>>Bedminton Club</option>
                    <option value="football" <?php if ($club == 'football') echo 'selected'; ?>>Football Club</option>
                </select>
            </div>
            <div id="content">
                <label>Reason for Joining the Club</label>
                <textarea rows="5" name="reason" required></textarea>
            </div>
            <div id="content">
                <input type="checkbox" id="chkbox" name="consent" required> 
                <label>I agree to the terms and conditions of the chosen club.</label>
            </div>
            <div id="contentsub">
                <input type="submit" name="submit" value="Register">
            </div>
        </div>
    </form>
</body>
</html>
<?php include('footer.php'); ?>
