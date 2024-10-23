<?php include('navigator.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Form</title>
    <style type="text/css">
                body {
            font-family: Arial, sans-serif; /* Clean font for readability */
            background-color: #F0F0F0; /* Light gray background for contrast */
            color: #14223D; /* Dark text for contrast */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        h2, h3 {
            margin-bottom: 15px;
            text-align: center; /* Center align headings */
            color: #14223D; /* Dark text for contrast */
        }

        .main {
            width: 500px;
            margin: 50px auto; /* Centering */
            background-color: #FFFFFF; /* White background for the form */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
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

        .credential {
            margin-bottom: 20px; /* Space between form elements */
        }

        input[type="text"]:focus, select:focus, textarea:focus {
            border-color: #DDB157; /* Change border color on focus */
            outline: none; /* Remove default outline */
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

        input[type="password"] {
            width: 100%; 
            padding: 10px; /* Padding for inputs */
            margin-top: 5px; /* Spacing above input elements */
            border: 1px solid #14223D; /* Dark border for input fields */
            border-radius: 5px; /* Rounded corners */
            box-sizing: border-box; /* Include padding and border in width */
        }

        #contentsub {
            text-align: center;
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

    </style>
</head>
<body>
    <form action="admin.php" method="post">
        <div class="main">
            <h2>Administration Login</h2>
            <div class="credential">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="credential">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div id="contentsub">
                <input type="submit" name="submit" value="Login">
            </div>
        </div>
    </form>
</body>
</html>
<?php include('footer.php'); ?>