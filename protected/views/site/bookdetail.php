<div id="header">header</div>		 
</div>
	<div id="content"> 
		<ul class="bookdetail">			
			<li class="bookcover">
				<img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$book->cover; ?>">
				<a href="http://www.amazon.com/Giving-Tree-40th-Anniversary-Book/dp/0060586753/ref=sr_1_3?s=books&ie=UTF8&qid=1355478348&sr=1-3&keywords=tree">Click To Look Inside</a>	
			</li>
			<li class="bookprop">
				<h1>Book Name: <span class="normalspan"><?php echo $book->title; ?></span></h1>		
			</li>
			<li class="bookprop">
				<h1>Author: <span class="normalspan"><?php echo $book->author; ?></span></h1>	
			</li>
			<li class="bookprop">
				<h1>Description: </h1>
				<p class="detail"><?php echo $book->description; ?></p>
			</li>
			<li class="bookprop">
				<h1>Price: <span class="normalspan"><?php echo $book->price; ?>$</span></h1>
			</li>
			<li class="bookprop">
				<h1>Status: <span class="normalspan"><?php echo $book->status; ?></span></h1>	
			</li>			
		</ul>  
	</div>
	<div id="footer">footer</div>