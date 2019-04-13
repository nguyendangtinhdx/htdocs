<?php
include_once './Entities/Article.php';
include_once './Entities/Category.php';
include_once './DAL/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $error = array();

    if(empty($_POST['id'])) {
        $error['id'] = 'ID không để trống';
    }
    if(empty($_POST['title'])) {
        $error['title'] = 'Title không để trống';
    }
    if(empty($_POST['description'])) {
        $error['description'] = 'Description không để trống';
    }
    if(empty($_POST['content'])) {
        $error['content'] = 'Content không để trống';
    }
    if(empty($_POST['dateCreated'])) {
        $error['dateCreated'] = 'DateCreated không để trống';
    }
    if(empty($_POST['dateModifier'])) {
        $error['dateModifier'] = 'DateModifier không để trống';
    }
    if(empty($_POST['author'])) {
        $error['author'] = 'Author không để trống';
    } 
    if(empty($_POST['id_Category'])) {
        $error['id_Category'] = 'ID_Category không để trống';
    }


    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $dateCreated = $_POST['dateCreated'];
    $dateModifier = $_POST['dateModifier'];
    $author = $_POST['author'];
    $id_Category = $_POST['id_Category'];

    if ($_POST["them"] && !$error){
        Article::them($id, $title, $description, $content, $dateCreated, $dateModifier, $author, $id_Category);
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="ckeditor/ckeditor.js"></script>
    <style>
    #form{
        width: 800px;
        margin: auto;
    }
    select{
        margin-top: 30px;
        width: 200px;
    }
</style>
</head>
<body>
    <p style="text-align: center; color: green; font-size: 30px; font-weight: bold; margin-bottom: -20px">Thêm bài viết mới</p>
    <form id="form" action="them.php" method="post">
        <label>Category: </label>
        <select name="id_Category">
           <?php
           $listCategory = Category::getList();
           $id_Category = "";

           if (isset($_REQUEST["id_Category"]))
            $id_Category = $_REQUEST["id_Category"];
        foreach ($listCategory as $key => $category)
            echo "<option value='$category->ID'>$category->Name</option>";
        ?> 
      </select>
    <div class="form-group">
        <label>ID:</label>
        <input type="text" class="form-control input-sm" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id'] ?>">
        <span style="color: red"><?php echo isset($error['id']) ? $error['id'] : ''; ?></span>
    </div>
    <div class="form-group">
      <label>Title:</label>
      <input type="text" class="form-control input-sm" name="title" value="<?php if(isset($_POST['title'])) echo $_POST['title'] ?>">
      <span style="color: red"><?php echo isset($error['title']) ? $error['title'] : ''; ?></span>
  </div>
  <div class="form-group">
      <label >Description</label>
      <input type="text" class="form-control input-sm" name="description" value="<?php if(isset($_POST['description'])) echo $_POST['description'] ?>">
      <span style="color: red"><?php echo isset($error['description']) ? $error['description'] : ''; ?></span>
  </div>
  <div class="form-group">
      <label >Content</label>
      <textarea name="content" id="ten"></textarea>
      <script>CKEDITOR.replace('ten');</script>
      <span style="color: red"><?php echo isset($error['content']) ? $error['content'] : ''; ?></span>
  </div>
  <div class="form-group">
      <label>DateCreated</label>
      <input type="date" class="form-control input-sm" name="dateCreated" value="<?php if(isset($_POST['dateCreated'])) echo $_POST['dateCreated'] ?>">
      <span style="color: red"><?php echo isset($error['dateCreated']) ? $error['dateCreated'] : ''; ?></span>
  </div>
  <div class="form-group">
      <label>DateModifier</label>
      <input type="date" class="form-control input-sm" name="dateModifier" value="<?php if(isset($_POST['dateModifier'])) echo $_POST['dateModifier'] ?>">
      <span style="color: red"><?php echo isset($error['dateModifier']) ? $error['dateModifier'] : ''; ?></span>
  </div>
  <div class="form-group">
      <label>Author</label>
      <input type="text" class="form-control input-sm" name="author" value="<?php if(isset($_POST['author'])) echo $_POST['author'] ?>">
      <span style="color: red"><?php echo isset($error['author']) ? $error['author'] : ''; ?></span>
  </div>

  <input type="submit" class="btn btn-danger" name="them" value="Thêm" >
</form>
</body>

</html>
