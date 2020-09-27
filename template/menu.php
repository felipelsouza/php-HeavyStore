 <!-- Fixed navbar -->
 <nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php"><img src="img/hs-logo.png"></a>
	    </div>
	    <div id="navbar" class="navbar-collapse collapse">
	        <ul class="nav navbar-nav">
	            <li <?php echo active($content); ?>><a href="index.php">Home</a></li>
                <li <?php echo active($content, 'albums'); ?>><a href="?page=albums">Albums</a></li>
                <li <?php echo active($content, 'addNewAlbum'); ?>><a href="?page=addNewAlbum">Add New Album</a></li>
                <li <?php echo active($content, 'about'); ?>><a href="?page=about">About</a></li>
	        </ul>
	    </div>
	</div>
</nav>