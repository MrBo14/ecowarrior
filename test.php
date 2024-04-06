<?php
// Function to calculate age based on day, month, and year
function calculateAge($day, $month, $year)
{
    $today = new DateTime();
    $birthday = new DateTime("$year-$month-$day");
    $age = $today->diff($birthday)->y;
    return $age;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the birthdate components from the form
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];

    // Calculate the age
    $age = calculateAge($day, $month, $year);

    // Display the age
    echo "You are " . $age . " years old.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>
    <h1>Age Calculator</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="day">Day:</label>
        <input type="number" name="day" min="1" max="31" required>

        <label for="month">Month:</label>
        <input type="number" name="month" min="1" max="12" required>

        <label for="year">Year:</label>
        <input type="number" name="year" min="1900" max="2099" required>

        <input type="submit" value="Calculate Age">
    </form>
</body>
</html>