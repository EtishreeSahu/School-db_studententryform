<?php
header("Content-Type: application/json"); // Ensure JSON response
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "student_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Get request method
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
    // 🔹 GET request: Retrieve all student data
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $students = [];
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
        echo json_encode($students);
    } else {
        echo json_encode(["message" => "No students found"]);
    }
} elseif ($method == 'PUT') {
    // 🔹 PUT request: Insert or Update student data
    parse_str(file_get_contents("php://input"), $putData);

    $id = $putData['id'] ?? null;
    $name = $putData['name'] ?? null;
    $email = $putData['email'] ?? null;
    $mobileno = $putData['mobileno'] ?? null;

    if ($id && $name && $email && $mobileno) {
        $sql = "INSERT INTO students (id, name, email, mobileno) VALUES ('$id', '$name', '$email', '$mobileno')
                ON DUPLICATE KEY UPDATE name='$name', email='$email', mobileno='$mobileno'";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(["success" => "Student data saved successfully!"]);
        } else {
            echo json_encode(["error" => "Error: " . $conn->error]);
        }
    } else {
        echo json_encode(["error" => "Missing required fields"]);
    }
} else {
    echo json_encode(["error" => "Invalid request method"]);
}

$conn->close();
?>
