<?php
function setNotification($message, $type = 'success')
{
    session_start();
    $_SESSION['notification'] = [
        'message' => $message,
        'type' => $type,
    ];
    session_write_close();
}
?>
