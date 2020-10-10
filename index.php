<?php
    include('header.php');
    include('post.php');
    include('tag.php');
?>

<?php
    $post = new Post($db);
    $tags = new Tag($db);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if(isset($_GET['keyword'])) {
                echo 'Search for:'.'<i>'.$_GET['keyword'].'</i>';
            } ?>

            <?php foreach($post->getPost() as $post) {?>
            <div class="media">
                <div class="media-left media-top">
                    <img src="https://graphicriver.img.customer.envatousercontent.com/files/277000417/17_quokka001.jpg?auto=compress%2Cformat&q=80&fit=crop&crop=top&max-h=8000&max-w=590&s=10ee9d732545180cf430537d3b2dc62d" class="media-object" style="width:200px">
                    <p>작성자: 어드민 <br/>
                     작성일: <?php echo date('Y-m-d',strtotime($post['create_at'])); ?>
                    </p>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="view.php?slug=<?php echo $post['slug']; ?>"><?php echo $post['title'] ?></a></h4>
                    <P>
                        <?php echo htmlspecialchars_decode($post['content']) ?>
                    </P>                    
                </div>
            </div>
            <?php }?>
        </div>
        <div class="col-md-4">
                <h4>Browse by Tags</h4>
                <!-- <?php 
                    foreach($tags->getAllTags() as $tag) {
                        echo $tag['tag'].'<br />';
                    }
                ?> -->
                <p>
                    <?php foreach($tags->getAllTags() as $tag) { ?>
                        <a href="index.php?tag=<?php echo $tag['tag']; ?>"><button type="button" class="btn btn-outline-warning btn-sm">
                            <?php echo $tag['tag']; ?>
                        </button>                    
                    <?php } ?>
                </p>
                <p>
                    <h4>Search Posts</h4>
                    <form action="" method="GET">
                        <input type="text" name="keyword" class="form-control" placeholder="search...">
                    </form>
                </p>
        </div>
    </div>
</div>

<style type="text/css">
    body {
        text-align: justify;
    }

    img {
        margin-right: 10px;
    }

    .media {
        margin-top: 10px;
    }

    .btn-group-sm>.btn, .btn-sm {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
        margin-top: 12px;
    }
</style>