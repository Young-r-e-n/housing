
// Function to create a new student
function createStudent($user_id, $admission_number, $first_name, $last_name, $telephone_number) {
    global $conn;

    $sql = "INSERT INTO students (user_id, admission_number, first_name, last_name, telephone_number) 
            VALUES ('$user_id', '$admission_number', '$first_name', '$last_name', '$telephone_number')";

    if ($conn->query($sql) === TRUE) {
        return "Student created successfully";
    } else {
        return "Error creating student: " . $conn->error;
    }
}

// Function to read students
function getStudents() {
    global $conn;

    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return "No students found";
    }
}

// Function to update a student
function updateStudent($student_id, $user_id, $admission_number, $first_name, $last_name, $telephone_number) {
    global $conn;

    $sql = "UPDATE students 
            SET user_id='$user_id', admission_number='$admission_number', 
            first_name='$first_name', last_name='$last_name', telephone_number='$telephone_number' 
            WHERE student_id='$student_id'";

    if ($conn->query($sql) === TRUE) {
        return "Student updated successfully";
    } else {
        return "Error updating student: " . $conn->error;
    }
}

// Function to delete a student
function deleteStudent($student_id) {
    global $conn;

    $sql = "DELETE FROM students WHERE student_id='$student_id'";

    if ($conn->query($sql) === TRUE) {
        return "Student deleted successfully";
    } else {
        return "Error deleting student: " . $conn->error;
    }
}
