<?php 
    include("db.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <ul id="menu">
      <li><a href="#one">wel</a></li>
      <li><a href="#two">login</a></li>
      <li><a href="#three">Comment Board</a></li>
      <li><a href="#four">info</a></li>
  </ul>
   <div id="one" class="content">
       <h2 id="wel">WELCOME</h2>
    `<div id="onelog">
        <h1 id="calog">CATBLOG</h1>
    `</div>
   </div>
   <div id="two" class="content">
       <div id="lobox">

           <?php if(isset($_SESSION['id'])){?>
           <p>로그인 중</p>
           <p><?= $_SESSION['id']."환영합니다"?></p>
           <a href="logout.php">로그아웃</a>
           <?php }else{?>
            <p id="lom">Login</p>
           <form id="lo" action="login_ok.php" method="post">
               <input class="id"type="text" name='id'>
               <input class="id"type="password" name="pw">
               <button id="do" type="submit">로그인</button>
               <a href="join.php"><button id="join">회원가입</button></a>
           </form>
           <?php }?>
       </div> 
   </div>
   <div id="three" class="content">
      <a href="write.php"><button>글쓰기</button></a>

       <table id="list">
           <thead>
             <th>글쓴이</th>
             <th>제목</th>
             <th>내용</th>
             <th>쓴 날짜</th>
           </thead>
        <?php 
           $sql = "select * from board order by idx desc";
           $rs = $db->query($sql);
           foreach($rs as $data){;
       ?>
           <tr>
               <td><?= $data['id']?></td>
               <td><?= $data['title']?></td>
               <td><?= $data['text']?></td>
               <td><?= $data['wdate']?></td>
           </tr>
      <?php }?>
       </table>
    
   </div>
   <div id="four" class="content">
     <h1 id="sub_4">Made by</h1>
    <br><br>
    <div id="slidebox">
		<ul id="slider">
			<li>
				<h2 class="name">오병현</h2>
				<p style="white-space: nowrap" class="Explan">총괄기획 및 서버<br>로그인,게시판 페이지<br>제작</p>
			</li>
			<li>
			    <h2 class="name">류민송</h2>
			    <p style="white-space: pre-line" class="Explan">메인페이지<br>info페이지 제작</p>
			</li>
		</ul>
	</div>
   </div>
</body>
<script type="text/javascript" src="js/main.js"></script>
</html>