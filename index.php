<?php include 'config/config.php'; ?>
<?php include 'libraries/Database.php'; ?>
<?php include 'includes/header.php'; ?>
<?php
  // Create DB object
  $db = new Database();

  // Create Query
  $query = "SELECT * FROM posts";

  // Run Query
  $posts = $db->select($query);

?>
<?php if($posts) :?>
  <?php while($row = $posts->fetch_assoc()) : ?>
    <div class="blog-post">
      <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
      <p class="blog-post-meta"><?php echo $row['date']; ?> by <a href="#"><?php echo $row['author']; ?></a></p>
      <p><?php echo $row['body']; ?></p>
      <a class="readmore" href="post.php?id=1">Read More</a>
    </div><!-- /.blog-post -->

<?php endwhile; ?>

<?php else: ?>
  <p>There are no posts yet </p>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>