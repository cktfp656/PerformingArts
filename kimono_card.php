<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<form action="kimono.php" method="POST">
				<textarea name="comment" rows="4" style="width:100%"></textarea>
				<input type="hidden" name="content_id" value="<?php echo $kimono['id'];?>">
				<button  type= "submit" class="btn btn-block btn-primary">comment here</button><br>
				</form>
			</div>
		</div>
		<div style="overflow: scroll;height:200px;">
			<?php foreach ($kimono['comment'] as $kimono_comment): ?>
			<div class="row">
				<div class="col-md-5">
					<img src="img/portfolio/kabuki2.jpg" height="60" width="60" style="text-align :left;"><br>
					<p style="text-align:left;"><strong><?php echo $kimono_comment['name']; ?></strong></p>
				</div>
					<div class="col-md-7">
						<?php echo $kimono_comment['comment']; ?>
					</div>
			</div>
			<?php endforeach ?>
			</div>
		</div>
					<div class="col-md-6">
						<img src="contents-img/<?php echo $kimono['contents_img_name']; ?>" style="width:70%">
						<p><?php echo $kimono['description']; ?></p>
					</div>
</div>