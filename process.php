<?php

$event_name = $_POST['event_name'];
$event_date = $_POST['event_date'];
$event_time = $_POST['event_time'];
$event_location = $_POST['event_location'];
$contact_name = $_POST['contact_name'];
$contact_email = $_POST['contact_email'];
$description = $_POST['description'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Request Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Request Submitted Successfully!</h2>

    <p><strong>Event:</strong> <?php echo $event_name; ?></p>
    <p><strong>Date:</strong> <?php echo $event_date; ?></p>
    <p><strong>Time:</strong> <?php echo $event_time; ?></p>
    <p><strong>Location:</strong> <?php echo $event_location; ?></p>
    <p><strong>Contact:</strong> <?php echo $contact_name; ?> (<?php echo $contact_email; ?>)</p>
    <p><strong>Description:</strong> <?php echo $description; ?></p>

    <a href="index.html" class="btn btn-dark mt-3">Return Home</a>

</body>
</html>
