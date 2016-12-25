<?php include 'includes/header.php'; ?>
<?php
  // Create DB object
  $db = new Database();

  // Create Query
  $query = "SELECT * FROM categories";

  // Run Query
  $categories = $db->select($query);

?>
<form>
	<div class="form-group" method="post" action="add_post.php">
		<label>Post Title</label>
		<input  name="title" type="text" class="form-control" placeholder="Enter Title">
	</div>
	<div class="form-group" method="post" action="add_post.php">
		<label>Post Body</label>
		<textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
	</div>
	<div class="form-group" method="post" action="add_post.php">
		<label>Category</label>
		<select name="category" class="form-control">
			<?php while($row = $categories->fetch_assoc()) : ?>
				<?php if($row['id'] == $post['category']){
					$selected = 'selected';
				} else {
					$selected = '';
				}
				?>
				<option <?php echo $selected; ?>><?php echo $row['name']; ?></option>
			<?php endwhile; ?>
		</select>
	</div>
	<div class="form-group" method="post" action="add_post.php">
		<label>Author</label>
		<input  name="author" type="text" class="form-control" placeholder="Enter Author Name">
	</div>
	<div class="form-group" method="post" action="add_post.php">
		<label>Tags</label>
		<input  name="tags" type="text" class="form-control" placeholder="Enter Tags">
	</div>
	<div>
		<input name="submit" type="submit" class="btn btn-default" value="Submit"/>
		<a href="index.php" class="btn btn-default">Cancel</a>
	</div>
	<br>
</form>
<?php include 'includes/footer.php'; ?>