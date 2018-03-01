<?php
    include('db.php');
    unset($_SESSION['id']);
    echo "<script>alert('로그아웃 됨');location.href = '/';</script>";
?>