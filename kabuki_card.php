<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<form action="kabuki.php" method="POST">
				<textarea name="comment" rows="4" style="width:100%"></textarea>
				<input type="hidden" name="content_id" value="<?php echo $kabuki['id'];?>">
				<button  type= "submit" class="btn btn-block btn-primary">comment here</button><br>
				</form>
			</div>
		</div>
		<div style="overflow: scroll;height:200px;">
			<?php foreach ($kabuki['comment'] as $kabuki_comment): ?>
			<div class="row">
				<div class="col-md-5">
					<img src="picture_path/<?php echo $kabuki_comment['img_name']; ?>" height="60" style="text-align :left;"><br>
					<p style="text-align:left;"><strong><?php echo $kabuki_comment['name']; ?></strong></p>
				</div>
					<div class="col-md-7">
						<?php echo $kabuki_comment['comment']; ?>
					</div>
			</div>
			<?php endforeach ?>
			</div>
		</div>
					<div class="col-md-6">
						<img src="contents-img/<?php echo $kabuki['contents_img_name']; ?>" style="width:70%">
						<p><?php echo $kabuki['description']; ?></p>
					</div>
</div>