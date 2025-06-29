<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Message Board</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        form, .messages { max-width: 600px; margin: auto; }
        input, textarea { width: 100%; padding: 10px; margin: 5px 0; }
        .message-box { border: 1px solid #ccc; padding: 10px; margin-top: 10px; }
    </style>
</head>
<body>
    <h2>Leave a Message</h2>
    <form method="POST">
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message_content" placeholder="Your Message" required></textarea>
        <input type="submit" name="submit" value="Post Message">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $conn->real_escape_string($_POST['full_name']);
        $email = $conn->real_escape_string($_POST['email']);
        $message = $conn->real_escape_string($_POST['message_content']);

        $conn->query("INSERT INTO message_tbl (Full_Name, Email, Message_Content) VALUES ('$name', '$email', '$message')");
    }

    echo "<div class='messages'><h3>Previous Messages</h3>";

    $result = $conn->query("SELECT * FROM message_tbl ORDER BY Message_ID DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<div class='message-box'>";
        echo "<strong>" . htmlspecialchars($row['Full_Name']) . "</strong><br>";
        echo "<small>" . $row['Email'] . " | " . $row['Date_posted'] . "</small>";
        echo "<p>" . nl2br(htmlspecialchars($row['Message_Content'])) . "</p>";
        echo "</div>";
    }
    echo "</div>";
    ?>
</body>
</html>
