<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<form action="rakugo.php" method="POST">
				<textarea name="comment" rows="4" style="width:100%"></textarea>
				<input type="hidden" name="content_id" value="<?php echo $rakugo['id'];?>">
				<button  type= "submit" class="btn btn-block btn-primary">comment here</button><br>
				</form>
			</div>
		</div>
		<div style="overflow: scroll;height:200px;">
			<?php foreach ($rakugo['comment'] as $rakugo_comment): ?>
			<div class="row">
				<div class="col-md-5">
					<img src="img/portfolio/kabuki2.jpg" height="60" style="text-align :left;"><br>
					<p style="text-align:left;"><strong><?php echo $rakugo_comment['name']; ?></strong></p>
				</div>
					<div class="col-md-7">
						<?php echo $rakugo_comment['comment']; ?>
					</div>
			</div>
			<?php endforeach ?>
			</div>
		</div>
					<div class="col-md-6">
						<img src="contents-img/<?php echo $rakugo['contents_img_name']; ?>" style="width:70%">
						<p><?php echo $rakugo['description']; ?></p>
					</div>
</div>