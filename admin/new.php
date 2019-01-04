 <!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>new | 博客</title>
</head>
<body>
<h1>新建</h1>

	<form action="save.php" method="post"  enctype="multipart/form-data">
	<label for="title">title</label>
	<input type="text" name="title" value="" />
	<br/>
	<label for="pic">pic</label>
	<input type="file" name="pic" >
	<br/>
	<label for="tags">标签（多个标签使用,分隔）：</label>
	<input type="text" name="tags" />
	<br/>
		<label for="body">body</label>
		<textarea name="body"></textarea>
		<br/>
		<input type="submit" value="提交" />
</form>

</body>
</html>