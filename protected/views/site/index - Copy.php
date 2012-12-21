<div id="header">header</div>
	<div id="content">
		<ul id="books">
			<?php foreach ($books as $b): ?>
			<li class="book">
				<a href="<?php echo Yii::app()->request->baseUrl.'/?r=site/bookdetail&id='.$b->id; ?>"><img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$b->cover; ?>"></a>
				<h1><a href="<?php echo Yii::app()->request->baseUrl.'/?r=site/bookdetail&id='.$b->id; ?>"> <?php echo $b->title; ?></a> </h1>
				<p class="detail"><?php echo $b->description; ?></p>
			</li>
		<?php endforeach; ?>
		</ul>
		<div class="clear"></div>
	</div>
	<div id="footer">footer</div>

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-1.8.3.min.js"></script>