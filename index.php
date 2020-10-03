<?php
    include('header.php');
    include('post.php');
?>

<?php
    $post = new Post($db);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php foreach($post->getPost() as $post) {?>
            <div class="media">
                <div class="media-left media-top">
                    <img src="https://graphicriver.img.customer.envatousercontent.com/files/277000417/17_quokka001.jpg?auto=compress%2Cformat&q=80&fit=crop&crop=top&max-h=8000&max-w=590&s=10ee9d732545180cf430537d3b2dc62d" class="media-object" style="width:200px">
                    <p>작성자: 어드민 <br/>
                     작성일: <?php echo date('Y-m-d',strtotime($post['create_at'])); ?>
                    </p>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="#"><?php echo $post['title'] ?></a></h4>
                    <P>
                        <?php echo htmlspecialchars_decode($post['content']) ?>
                    </P>                    
                </div>
            </div>
            <?php }?>
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
</style>