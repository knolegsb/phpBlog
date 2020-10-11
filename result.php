<?php
include('session.php'); 
include('header.php'); ?>
<?php
include('post.php');
$post = new Post($db);

?>

<div class="container">
	<h2>All Posts</h2>
	<a href="view-comment.php" style="float:right;">comments</a>
	
	<?php
		if(!empty($_SESSION['username'])){
			echo "Hello, {$_SESSION['username']}";
		}else{
			echo"You're not logged in!";
		}
	?>

	</h2>
	<table class="table table-striped">
		<thead>
			<tr class="row">
				<th class="col-md-2">제목</th>
				<th class="col-md-6">내용</th>
				<th class="col-md-2">작성일</th>
				<th class="col-md-2">선택</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($post->getPost() as $post){ ?>
			<tr class="row">
				<td class="col-md-2"><?php echo $post['title']; ?></td>
                <!-- <td><?php echo substr($post['content'],0,20); ?></td> -->
                <td class="col-md-6"><?php echo $post['content']; ?></td>
				<td class="col-md-2"><?php echo date('Y-m-d',strtotime($post['create_at'])); ?></td>
				<td class="col-md-2">
					<a href="view.php?slug=<?php echo $post['slug'];?>"><button type="submit" class="btn btn-outline-success btn-sm">View</button></a>
					<a href="edit.php?slug=<?php echo $post['slug'];?>"><button type="submit" class="btn btn-outline-primary btn-sm">Edit</button></a>
					<a href="delete.php?slug=<?php echo $post['slug'];?>"><button type="submit" class="btn btn-outline-danger btn-sm">Delete</button></a>
				</td>
			<?php }?>
			</tr>
		</tbody>
	</table>
</div>