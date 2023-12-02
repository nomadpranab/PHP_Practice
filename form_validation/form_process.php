<?php
// Define variables and initialize with empty values
$nameErr = $emailErr = "";
$name = $email = "";

// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}

// Function to sanitize and validate input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Example - Process</title>
</head>
<body>

<h2>Submitted Data</h2>

<?php
// Display submitted data
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(!empty($emailErr))
    {
        echo "Email is invalid";
    }
    else if(!empty($nameErr))
    {
        echo "Name is invalid";
    }
    else{
        echo "Name : $name";
        echo "Email is $email";
    }
}
?>

</body>
</html>
