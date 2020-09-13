<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="with=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style.css">
  </head>
  <style>
    .form{
      width: 1000px;
    }
    .form > div {
      display: flex;
      justify-content: center;
      padding-bottom: 7px;
      align-items: center;
    }
    .menu{
      clear: right;
      float: right;
      line-height: 100px;
    }
  </style>
  <body>
    <div class="header" style="padding-top: 20px;">
      <div class="search" >
      <button style="float: right; padding: 3px;">검색</button>
       <input type="text" placeholder="검색어를 입력해주세요." style="display:inline-block; font-size:15px; padding:2px; float: right;">
    </div>

    <div class="header">
      <h2 class="logo"><a href="index.html">Question Web</a></h2>
      <input type="checkbox" id="chk">
      <label for="chk" class="show-menu-btn">
        <i class="fa fa-ellipsis-h"></i>
      </label>

      <ul class="menu">
        <?php
        session_start();
          if(isset($_SESSION['uid'])){
            echo "<a href='./logout.php'>".$_SESSION['uid']."</a>님";
          } else{
         ?>
          <a href="./login.html">Login</a>
        <?php
       }
         ?>
        <a href="index.php">Home</a>
        <a href="question.php">Question</a>
        <a href="free.php">Free</a>
        <label for="chk"  class="hide-menu-btn">
          <i class="fa fa-times"></i>
        </label>
      </ul>


    </div>

    <div class="content">
      <center>
        <img src="img.jpg" alt="">
      </center>
      <p>
        Computer science is the study of computation and information.[1][2] Computer science deals with theory of computation, algorithms, computational problems and the design of computer systems hardware, software and applications.[3][4] Computer science addresses both human-made and natural information processes, such as communication, control, perception, learning and intelligence especially in human-made computing systems and machines.[5][6][7] According to Peter Denning, the fundamental question underlying computer science is, What can be automated?[8][5]

        Its fields can be divided into theoretical and practical disciplines. Computational complexity theory is highly abstract, while computer graphics and computational geometry emphasizes real-world applications. Algorithmics is called the heart of computer science.[9] Programming language theory considers approaches to the description of computational processes, while software engineering involves the use of programming languages and complex systems. Computer architecture and computer engineering deals with construction of computer components and computer-controlled equipment.[5][10] Human–computer interaction considers the challenges in making computers useful, usable, and accessible. Artificial intelligence aims to synthesize goal-orientated processes such as problem-solving, decision-making, environmental adaptation, motion planning, learning, and communication found in humans and animals.
      </p>
      </div>

  </body>
</html>
