<!-- process_appointment_actions.php -->
<?php
include "../includes/db_connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['markDone'])) {
        // Handle marking appointment as done
        $appointmentId = $_POST['appointmentId'];
        // Perform update in the database, e.g., set a 'status' column to 'done'
        $updateSql = "UPDATE Appointments SET Status = 'Done' WHERE Appointment_Id = $appointmentId";
        $conn->query($updateSql);
        echo "Appointment marked as done!";
    } elseif (isset($_POST['deleteAppointment'])) {
        // Handle deleting appointment
        $appointmentId = $_POST['appointmentId'];
        // Perform delete in the database
        $deleteSql = "DELETE FROM Appointments WHERE Appointment_Id = $appointmentId";
        $conn->query($deleteSql);
        echo "Appointment deleted!";
    }
} else {
    echo "Invalid request.";
}
?>
