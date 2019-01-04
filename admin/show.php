<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>show | 博客</title>
  
  <style type="text/css">
  .exp1{
    border-bottom-style:solid;
    border-width:1px;
    border-color:gray;
    padding-top:10px;
    padding-bottom:10px;
    padding-right:50px;
    padding-left:50px;
  }
  .exp2{
    background-color:gray;
    padding:3px 20px;
  }
  .exp3{font-size:small;} 
  </style>

</head> 
<body>
  <?php
    require_once '../inc/db.php';

    $query = $db->prepare('select * from posts where id = :id');
    $query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
    $query->execute();
    $post = $query->fetchObject(); 

    $query = $db->prepare('select tag_id from tags_posts where post_id = :id');
    $query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
    $query->execute();
  ?>

  <h1><?php echo $post->title; ?>  </h1>
  <?php echo $post->created_at; ?>
  <p><?php echo $post->body; ?></p>
  
  标签：
  <?php
    while($tag = $query->fetchObject()){
    $sql = "select name from tags where id = $tag->tag_id";
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchObject();
    echo $result->name;
   }
  ?>

  <div class="exp2">评论</div>
  <?php
  $query = $db->query('select * from comments where post_id = ' . $post->id);
  while ( $comment =  $query->fetchObject() ) {
      ?>
    <div class="exp1">
      <?php echo $comment->title; ?>
      <div class="exp3"><?php echo $comment->created_at;?></div>
      <p><?php echo $comment->body; ?></p>            
    </div>
  <?php  } ?>

  <form action="../comments/save.php" method="post">
    <input type="hidden" name='post_id' value='<?php echo $_GET['id']; ?>'/>
    <label for="title">title</label>
    <input type="text" name="title" value="" />
    <br/>
    <label for="body">body</label>
    <textarea name="body"></textarea>
    <br/>
    <input type="submit" value="提交" />
  </form>


  <a href="./index.php">返回</a>
</body>
</html>