<div id="header">header</div>
	<div id="content">
		<img id="loading" src="<?php echo Yii::app()->request->baseUrl.'/images/338.gif'?>" alt="">
		<ul id="books">
			
		</ul>
		<div class="clear"></div>
	</div>
	<div id="footer">footer</div>

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$.getJSON('<?php echo Yii::app()->request->baseUrl;?>/?r=book/listjson', function(data){
			console.log(data);
			$('#loading').hide(0);
			$.each(data,function(i, v){
				$('ul#books').append('<li>' + v.title + '</li>');
			});
		});
	</script>