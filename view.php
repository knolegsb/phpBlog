<?php 
include('header.php');
include('post.php');

$posts = new Post($db);

?>

<div class="container">
    <div class="row">
    <?php foreach($posts->getSinglePost($_GET['slug']) as $post); { ?>
        <div class="card">
            <img src="">
        </div>
        <div class="card-body">
            <h4 class="card-title"><?php echo $post['title']; ?></h4>
            <p class="card-text"><?php echo $post['content'] ?></p>
        </div>
    </div>
    <?php } ?>
</div>