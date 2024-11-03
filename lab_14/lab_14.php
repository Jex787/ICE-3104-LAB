<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <header>
        <h1>Registration Form Using php</h1>
    </header>
    <main>
        <form action="#" method="post">
            <label for="name">Name: </label><input type="text" id="name" name="name" placeholder="Enter your full name" required><br><br>

            <label for="father's_name">Father's Name: </label><input type="text" id="father's_name" name="fathersName" placeholder="Enter your father's name" required><br><br>

            <label for="mother's_name">Mother's Name: </label><input type="text" id="mother's_name" name="mothersName" placeholder="Enter your mother's name" required><br><br>

            <label for="dob">Date of Birth: </label> <input type="date" name="dob" id="dob" required><br><br>

            <label for="gender">Gender: </label><input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label><input type="radio" id="female" name="gender" value="female" required><label for="female">Female</label><br><br>

            <label for="email">E-mail: </label> <input type="email" name="email" id="email"><br><br>

            <label for="address">Address: </label><br><textarea id="address" name="address" cols="30" rows="5" placeholder="Enter your full address" required></textarea><br><br>

            <div>
                <input type="submit" name="submit" value="Register">
            </div>
        </form>
    </main>
    <footer>
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $fathersName = $_POST['fathersName'];
            $mothersName = $_POST['mothersName'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            // Result   
            echo "The information about $name <br>";
            echo "Name = $name <br>";
            echo "Father's Name = $fathersName <br>";
            echo "Mother's Name = $mothersName <br>";
            echo "Date of Brith = $dob <br>";
            echo "Gender = $gender <br>";
            echo "Email = $email <br>";
            echo "Address = $address <br>";
        }
        ?>
    </footer>
</body>

</html>