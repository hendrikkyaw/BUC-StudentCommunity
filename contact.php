<?php
include('navigator.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #F0F0F0;
            color: #14223D;
            margin: 0;
            padding: 0;
        }

        /* Main container to hold both blocks */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 1200px;
            margin: 50px auto;
            gap: 20px;
        }

        /* Styling for the contact information block */
        .contact-info-block {
            flex: 1;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #c4b8a2;
        }

        .contact-info-block h2 {
            text-align: center;
            color: #14223D;
            margin-bottom: 20px;
        }

        .contact-info-block div {
            margin-bottom: 15px;
            font-size: 18px;
        }

        /* Styling for the map block */
        .map-block {
            flex: 1;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #c4b8a2;
        }

        .map-block h2 {
            text-align: center;
            color: #14223D;
            margin-bottom: 20px;
        }

        .map {
            width: 100%;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn{
            gap: 20px;
            text-decoration: none;
            padding: 10px 30px;
            border-radius: 50px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            line-height: 1.5;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .contact-info-block, .map-block {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Container to hold both blocks -->
    <div class="container">
        <!-- Contact Info Block -->
        <div class="contact-info-block">
            <h2>Contact Us</h2>
            <div>
                <label><strong>Phone Number</strong></label>
                <div>+95 (09) 2222-8888-0000</div>
            </div>
            <div>
                <label><strong>Email</strong></label>
                <div>contactus@buc.edu.mm</div>
            </div>
            <div>
                <label><strong>Address</strong></label>
                <div>S-25 U Chit Mg Housing U Chit Mg Road, Tamwe Tsp, Yangon</div>
            </div>
            <div>
                <label><strong>Office Hours</strong></label>
                <div>Monday - Saturday: 9:00 AM - 5:00 PM</div>
            </div>
        </div>

        <!-- Map Block -->
        <div class="map-block">
            <h2>Our Location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7638.396671997816!2d96.167989!3d16.816514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecb385037f11%3A0xa4ac4eaf23262155!2sBritish%20University%20College!5e0!3m2!1smy!2smm!4v1729496875594!5m2!1smy!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>
</html>
<?php include('footer.php'); ?>
