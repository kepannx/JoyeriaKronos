	<link rel="stylesheet" href="css/page.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/anythingSlider.css" type="text/css" media="screen" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.2.js"></script>
	<script src="js/jquery.anythingslider.js" type="text/javascript" charset="utf-8"></script>

	<script type="text/javascript">

		function formatText(index, panel) {
			return index;
		}

		$(function () {

			$('#slider1').anythingSlider({
				easing: "swing",           // Anything other than "linear" or "swing" requires the easing plugin
				autoPlay: true,            // This turns off the entire FUNCTIONALY, not just if it starts running or not
				startStopped: false,       // If autoPlay is on, this can force it to start stopped
				delay: 5000,               // How long between slide transitions in AutoPlay mode
				animationTime: 1000,        // How long the slide transition takes
				hashTags: true,            // Should links change the hashtag in the URL?
				buildNavigation: true,     // If true, builds and list of anchor links to link to each slide
				pauseOnHover: true,        // If true, and autoPlay is enabled, the show will pause on hover
				startText: "Play",        // Start text
				stopText: "Stop",          // Stop text
				navigationFormatter: null, // Details at the top of the file on this use (advanced use)
				forwardText: "&raquo;",    // Link text used to move the slider forward
				backText: "&laquo;",       // Link text used to move the slider back
				buildArrows: true,         // If true, builds the forwards and backwards buttons
				resizeContents: true,      // If true, solitary images in the panel will expand to fit the panel
				width: 720                // Override the default CSS width
			});

			$('#slider2').anythingSlider({
				resizeContents: false,
				autoPlay: false,
				width: 720,                // if resizeContent is false, this is the default width if panel size is not defined
				height: 380                // if resizeContent is false, this is the default height if panel size is not defined
			})

			$("#slide-jump").click(function(){
				$('.anythingSlider').eq(1).anythingSlider(4);
				return false;
			});

		});
	</script>


	
			
	<ul id="slider1">
		<?php 
		$sql="SELECT * FROM banerprincipal";
		@$query=mysql_db_query($database_joyeria,$sql,$joyeria);
		while($baner=mysql_fetch_array($query)){
		?>
			<li>
			  <a href="<?php if($baner["url"]==NULL){ echo "ver_promocion.php?id_baner=".$baner["id_baner"]."";} else { echo $baner["url"]; };?>"/><img src="images/banner/<?php echo $baner["baner"];?>" alt="0" border="0" /></a>
              </li>
<?php }?>
	</ul>  <!-- END AnythingSlider #1 -->