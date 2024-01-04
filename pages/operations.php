<?php 
include "../includes/db_connection.php";

global $conn;
// Function to create a new landlord

function createLandlord($user_id, $first_name, $last_name, $national_id, $telephone_number) {
    global $conn;
 
    // First, check if the user already exists
    $check_user_exists = "SELECT * FROM users WHERE user_id = '$user_id'";
    $result = $conn->query($check_user_exists);
 
    if ($result->num_rows == 0) {
        // The user does not exist, so we need to create them first
        $default_password = '1234';
        $hashed_password = password_hash($default_password, PASSWORD_DEFAULT);
        $user_type = 'landlord';
        
        $create_user_result = createUser($user_id, $user_id, $hashed_password, $user_type);
 
        // Check if the user creation was successful
        if (strpos($create_user_result, 'User created successfully') === false) {
            // Handle the case where user creation failed
            return "Error creating landlord: " . $create_user_result;
        }
    }
 
    // Now, proceed with creating the landlord
    $sql = "INSERT INTO landlords (user_id, first_name, last_name, national_id, telephone_number) 
            VALUES ('$user_id', '$first_name', '$last_name', '$national_id', '$telephone_number')";
 
    if ($conn->query($sql) === TRUE) {
        return "Landlord created successfully";
    } else {
        return "Error creating landlord: " . $conn->error;
    }
 }
 

// Function to read landlords
function getLandlords() {
    global $conn;

    $sql = "SELECT * FROM landlords";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return "No landlords found";
    }
}

// Function to update a landlord
function updateLandlord($landlord_id, $user_id, $first_name, $last_name, $national_id, $telephone_number) {
    global $conn;

    $sql = "UPDATE landlords 
            SET user_id='$user_id', first_name='$first_name', last_name='$last_name', 
            national_id='$national_id', telephone_number='$telephone_number' 
            WHERE landlord_id='$landlord_id'";

    if ($conn->query($sql) === TRUE) {
        return "Landlord updated successfully";
    } else {
        return "Error updating landlord: " . $conn->error;
    }
}

// Function to delete a landlord
function deleteLandlord($landlord_id) {
    global $conn;

    $sql = "DELETE FROM landlords WHERE landlord_id='$landlord_id'";

    if ($conn->query($sql) === TRUE) {
        return "Landlord deleted successfully";
    } else {
        return "Error deleting landlord: " . $conn->error;
    }
}

// Function to create a new admin
function createAdmin($user_id, $first_name, $last_name) {
    global $conn;

    $sql = "INSERT INTO admins (user_id, first_name, last_name) 
            VALUES ('$user_id', '$first_name', '$last_name')";

    if ($conn->query($sql) === TRUE) {
        return "Admin created successfully";
    } else {
        return "Error creating admin: " . $conn->error;
    }
}

// Function to read admins
function getAdmins() {
    global $conn;

    $sql = "SELECT * FROM admins";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return "No admins found";
    }
}

// Function to update an admin
function updateAdmin($admin_id, $user_id, $first_name, $last_name) {
    global $conn;

    $sql = "UPDATE admins 
            SET user_id='$user_id', first_name='$first_name', last_name='$last_name' 
            WHERE admin_id='$admin_id'";

    if ($conn->query($sql) === TRUE) {
        return "Admin updated successfully";
    } else {
        return "Error updating admin: " . $conn->error;
    }
}

// Function to delete an admin
function deleteAdmin($admin_id) {
    global $conn;

    $sql = "DELETE FROM admins WHERE admin_id='$admin_id'";

    if ($conn->query($sql) === TRUE) {
        return "Admin deleted successfully";
    } else {
        return "Error deleting admin: " . $conn->error;
    }
}
// Function to create a new hostel
function createHostel($landlord_id, $hostel_name) {
    global $conn;

    $sql = "INSERT INTO hostels (landlord_id, hostel_name) 
            VALUES ('$landlord_id', '$hostel_name')";

    if ($conn->query($sql) === TRUE) {
        return "Hostel created successfully";
    } else {
        return "Error creating hostel: " . $conn->error;
    }
}

// Function to read hostels
function getHostels() {
    global $conn;

    $sql = "SELECT * FROM hostels";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return "No hostels found";
    }
}

// Function to update a hostel
function updateHostel($hostel_id, $landlord_id, $hostel_name) {
    global $conn;

    $sql = "UPDATE hostels 
            SET landlord_id='$landlord_id', hostel_name='$hostel_name' 
            WHERE hostel_id='$hostel_id'";

    if ($conn->query($sql) === TRUE) {
        return "Hostel updated successfully";
    } else {
        return "Error updating hostel: " . $conn->error;
    }
}

// Function to delete a hostel
function deleteHostel($hostel_id) {
    global $conn;

    $sql = "DELETE FROM hostels WHERE hostel_id='$hostel_id'";

    if ($conn->query($sql) === TRUE) {
        return "Hostel deleted successfully";
    } else {
        return "Error deleting hostel: " . $conn->error;
    }
}

// Function to create a new room
function createRoom($hostel_id, $price) {
    global $conn;

    $sql = "INSERT INTO rooms (hostel_id, price) 
            VALUES ('$hostel_id', '$price')";

    if ($conn->query($sql) === TRUE) {
        return "Room created successfully";
    } else {
        return "Error creating room: " . $conn->error;
    }
}

// Function to read rooms
function getRooms() {
    global $conn;

    $sql = "SELECT * FROM rooms";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return "No rooms found";
    }
}

// Function to update a room
function updateRoom($room_id, $hostel_id, $price) {
    global $conn;

    $sql = "UPDATE rooms 
            SET hostel_id='$hostel_id', price='$price' 
            WHERE room_id='$room_id'";

    if ($conn->query($sql) === TRUE) {
        return "Room updated successfully";
    } else {
        return "Error updating room: " . $conn->error;
    }
}

// Function to delete a room
function deleteRoom($room_id) {
    global $conn;

    $sql = "DELETE FROM rooms WHERE room_id='$room_id'";

    if ($conn->query($sql) === TRUE) {
        return "Room deleted successfully";
    } else {
        return "Error deleting room: " . $conn->error;
    }
}

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


// Function to create a new user
function createUser($user_id, $username, $password, $user_type) {
    global $conn;
  
    // Check if the user already exists
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // User already exists, handle accordingly
        return "Username already taken";
    }
  
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  
    $sql = "INSERT INTO users (user_id, username, password, user_type) 
            VALUES ('$user_id', '$username', '$hashed_password', '$user_type')";
  
    if ($conn->query($sql) === TRUE) {
        return "User created successfully";
    } else {
        return "Error creating user: " . $conn->error;
    }
  }
  
// Function to read users
function getUsers() {
    global $conn;

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return "No users found";
    }
}

// Function to update a user
function updateUser($user_id, $username, $password, $user_type) {
    global $conn;

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "UPDATE users 
            SET username='$username', password='$hashed_password', user_type='$user_type' 
            WHERE user_id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        return "User updated successfully";
    } else {
        return "Error updating user: " . $conn->error;
    }
}

// Function to delete a user
function deleteUser($user_id) {
    global $conn;

    $sql = "DELETE FROM users WHERE user_id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        return "User deleted successfully";
    } else {
        return "Error deleting user: " . $conn->error;
    }
}
?>



