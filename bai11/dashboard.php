<?php
session_start();

// Redirect to login if not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container container-dashboard">
        <h2>Chào mừng, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>Bạn đã đăng nhập thành công vào hệ thống quản trị.</p>
        
        <div style="margin-top: 30px;">
            <a href="logout.php" class="btn btn-logout">Đăng Xuất</a>
        </div>
    </div>
</body>
</html>
