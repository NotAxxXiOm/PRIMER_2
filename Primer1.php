<?php
$user_id = $_GET['user_id'];
$user_data = get_user_data($user_id);
echo "Данные пользователя: " . $user_data;
?>
