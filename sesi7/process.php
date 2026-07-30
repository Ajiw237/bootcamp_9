<?php
// Check if data is sent via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve data from form
    $name = htmlspecialchars(trim($_POST['name']));
    $category = htmlspecialchars(trim($_POST['category']));
    $price = htmlspecialchars(trim($_POST['price']));
    $description = htmlspecialchars(trim($_POST['description']));

    // Simple validation (checks if any field is empty)
    if (empty($name) || empty($category) || empty($price) || empty($description)) {
        echo "<h2 style='color: red;'>Warning: All fields (Name, Category, Price, Description) are required.</h2>";
        echo "<p><a href='index.html'>Go back to form</a></p>";
        exit;
    }

    // Display received data
    echo "<h1>Form Data Received</h1>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Category:</strong> " . $category . "</p>";
    echo "<p><strong>Price:</strong> $" . $price . "</p>";
    echo "<p><strong>Description:</strong><br>" . nl2br($description) . "</p>";
    echo "<br><p><a href='index.html'>&laquo; Add Another Product</a></p>";

} else {
    echo "No data received.";
}
?>