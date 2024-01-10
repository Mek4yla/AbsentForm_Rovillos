<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Processed Absentee Form</title>
    <style>
        body {
            font-family: Edge 12, Firefox 1, Safari 1, Chrome 1, IE 3, Opera 3;
            margin: 15px;
            background-color:  #f3e0fc;
            background-color: #daaaf1;
            text-align: left;
        }

        h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 5px;
        }

        .letter-frame {
            width: 60%;
            margin: 0 auto;
            border: 2.5px solid #ccc;
            border-radius: 20px;
            padding: 30px; 
            background-color:  #f3e0fc;
            margin-top: 70px;
            line-height: 1;
        }

        we {
            font-style: italic; 
            font-size: 15px; 
            font-weight: bold;
        }

        eme {
            font-style: italic; 
            font-size: 15px; 
        }

        yah {
            font-size: 15px; 
            font-weight: bold;
        }

        strong {
            font-size: 20px; 

    </style>
</head>
<body>

    <?php
    // Function to sanitize form data
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Retrieve form data from the URL
    $name = test_input($_GET["name"]);
    $idNumber = test_input($_GET["idNumber"]);
    $section = test_input($_GET["section"]);
    $date = test_input($_GET["date"]);
    $reason = test_input($_GET["reason"]);
    $teacher = test_input($_GET["teacher"]);
    $subject = test_input($_GET["subject"]);

    // Generate Absent Form Letter
    echo "<div class='letter-frame'>";
    echo "<h2><strong>Dear my dearest teacher, $teacher,</strong></h2>";
    echo "<p> I am reaching out to notify you that I, $name (ID: $idNumber), enrolled in the $section, will not be able to attend your $subject class on $date due to <we>$reason</we></p>";
    echo "<p>I hope you understand the circumstances. If there are any additional steps, requirements, or procedures to follow in relation to my absence, kindly communicate them to me at your earliest convenience.
    Thank you for your understanding. I appreciate your attention to this matter.</p>";
    echo "<p><eme> Respectfully yours, </eme></p>";
    echo "<p><yah>$name</yah></p>";
    echo "</div>";
    ?>

</body>
</html>