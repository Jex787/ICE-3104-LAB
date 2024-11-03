<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Countdown</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .countdown {
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            text-align: center;
            width: 300px;
        }

        h2 {
            color: #007a33;
        }
    </style>
</head>

<body>
    <div class="countdown">
        <?php
        // Set the birthday (Month-Day format)
        $birthday = '6-27'; // Example: December 25th

        // Get the current year
        $currentYear = date('Y');
        $currentDate = new DateTime();

        // Create a DateTime object for this year's birthday
        $birthdayThisYear = new DateTime("$currentYear-$birthday");

        // Check if the birthday has already passed this year
        if ($currentDate > $birthdayThisYear) {
            // If the birthday passed, set it for the next year
            $birthdayThisYear->modify('+1 year');
        }

        // Calculate the difference in days
        $interval = $currentDate->diff($birthdayThisYear);
        $daysRemaining = $interval->days;

        // Display the countdown message
        echo "<h2>Birthday Countdown</h2>";
        echo "<p>Your next birthday is in <strong>$daysRemaining</strong> days.</p>";
        ?>
    </div>
</body>

</html>