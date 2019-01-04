<?php 
  require_once '../inc/session.php';
  require_once '../inc/db.php';
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>首页 - 博客</title>
    <style>
    div.background{
      width:1400px;
      height:1100px;
      background:url(klematis.jpg) repeat;
      border:2px solid black;
    }
    div.transbox{
      width:1200px;
      height:1000px;
      margin:30px 50px;
      background-color:#ffffff;
      border:1px solid black;
      opacity:0.6;
      filter:alpha(opacity=60);
    }
    div.transbox p{
      margin:30px 40px;
      font-weight:bold;
      color:#000000;
    }
    div.exp3{font-size:small;} 
  </style>
</head>
<body>
  <table>
    <tbody>
    <div class="thumbnail">
    <div class="background">
    <div class="transbox"> 
      <?php 
        $query = $db->query('select * from posts');
        while ( $post =  $query->fetchObject())
      {?>
        <p> 
          <a href="show.php?id=<?php print $post->id; ?>"><?php echo $post->title; ?></a>
         <?php echo $post->created_at; ?>
          <a href="edit.php?id=<?php echo $post->id; ?>">修改</a> 
          <a href="delete.php?id=<?php echo $post->id; ?>">删除</a>
        </p>

      <?php  } ?>
  </div></div></div>
    </tbody>
  </table>
  <a href="new.php">新增</a>
</body>
</html>