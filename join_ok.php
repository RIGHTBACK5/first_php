<?php 
    include("db.php");
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $pw2 = $_POST['pw2'];
    $sql = "select * from member where id='{$_POST['id']}'";
    $rs = $db->query($sql)->fetch();
    if(isset($rs['id'])){
        echo "<script>alert('중복된 아이디');location.href = 'join.php';</script>";
    }
    if($pw != $pw2){
        echo "<script>alert('비번이 서로 일치하지 않음');location.href = 'join.php';</script>";
    }else{
        $sql = "insert into member set id='{$id}',pw='{$pw}'";
        $db -> query($sql);

        echo "<script>alert('완료');location.href = 'join.php';</script>";
    }
?>