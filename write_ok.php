<?php 
    include('db.php');
    
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    $sql = "insert into board set id='{$_SESSION['id']}',title='{$title}',text='{$content}',wdate=now()";
    $db->query($sql);
    echo "<script>alert('등록 됨');location.href = 'index.php';</script>";
?>