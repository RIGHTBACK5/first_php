<?php 
    include('db.php');
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    
    $sql = "select * from member where id='{$_POST['id']}' and pw='{$_POST['pw']}'";
    $rs = $db->query($sql)->fetch();
    if(isset($rs['id']) && isset($rs['pw'])){
        $_SESSION['id'] = $rs['id'];
        echo "<script>alert('로그인 완료');location.href = '/';</script>";
    }else{
        echo "<script>alert('그런 아이디 없');location.href = '/';</script>";
    }
?>