<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
$user_id = $_GET['user_id'];
if ($_SESSION['user_id'] != $user_id) {
    header('Location: unauthorized.php');
    exit();
}
$user_data = get_user_data($user_id);
echo "Данные пользователя: " . $user_data;
?>
