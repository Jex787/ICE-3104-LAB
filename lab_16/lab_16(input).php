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
            padding: 30px;
            border: 1px solid #ccc;
            background-color: #fff;
            text-align: center;
            width: 300px;
        }

        h2 {
            color: #007a33;
        }

        input[type="date"] {
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007a33;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #005b27;
        }
    </style>
</head>

<body>
    <div class="countdown">
        <h2>Birthday Countdown</h2>

        <!-- Form for user to input birthday -->
        <form action="" method="POST">
            <label for="birthday">Enter your birthday:</label>
            <input type="date" id="birthday" name="birthday" required>
            <input type="submit" value="Calculate">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Check if the user inputted a birthday
            if (!empty($_POST['birthday'])) {
                // Get the birthday input from the form
                $birthday = $_POST['birthday'];

                // Extract the month and day from the inputted birthday
                $birthdayDate = new DateTime($birthday);
                $birthdayMonthDay = $birthdayDate->format('m-d');

                // Get the current year and date
                $currentYear = date('Y');
                $currentDate = new DateTime();

                // Create a DateTime object for this year's birthday
                $birthdayThisYear = new DateTime("$currentYear-$birthdayMonthDay");

                // Check if the birthday has already passed this year
                if ($currentDate > $birthdayThisYear) {
                    // If the birthday passed, set it for the next year
                    $birthdayThisYear->modify('+1 year');
                }

                // Calculate the difference in days
                $interval = $currentDate->diff($birthdayThisYear);
                $daysRemaining = $interval->days;

                // Display the countdown message
                echo "<p>Your next birthday is in <strong>$daysRemaining</strong> days.</p>";
            }
        }
        ?>
    </div>
</body>

</html>