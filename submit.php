<?php
include './config.php';
// Check if all required fields are set
if(isset($_POST['name'], $_POST['email'], $_POST['country'], $_POST['remarks'])) {
    // Set parameters and execute
    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $remarks = $_POST['remarks'];

    // Using prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, place, remarks) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $country, $remarks);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "Error in preparing statement: " . $conn->error;
    }
} else {
    echo "All fields are required.";
}
?>

<!DOCTYPE html>
<html lang="en" ng-app="submissionApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Confirmation</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            /* Background image URL without directory path */
            background-image: url('./img/bgimage.png');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .message {
            background-color: rgba(0, 139, 139, 0.7);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body ng-controller="SubmissionController">
    <div class="message">
        <h1>{{ message1 }}</h1>
        <h1>{{ message2 }}</h1>
    </div>

    <script>
        angular.module('submissionApp', [])
        .controller('SubmissionController', function($scope) {
            $scope.message1 = "Thank you for your Proceedings.";
            $scope.message2 = "We will get in touch with you soon.";
        });
    </script>
</body>
</html>
