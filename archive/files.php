<?php
	$x = $_GET['type'];
	$y = $_GET['subject'];
	?>
	<div class="file">
		<span id="filename"><?php echo $x." : ".$y; ?></span>
		<span id="filedate">01/01/2020</span>
		<span id="filedownload" onclick="download()">DOWNLOAD</span>
		<hr>
	</div>
	<div class="file">
		<span id="filename"><?php echo $x." : ".$y; ?></span>
		<span id="filedate">01/01/2020</span>
		<span id="filedownload" onclick="download()">DOWNLOAD</span>
		<hr>
	</div>
	<div class="file">
		<span id="filename"><?php echo $x." : ".$y; ?></span>
		<span id="filedate">01/01/2020</span>
		<span id="filedownload" onclick="download()">DOWNLOAD</span>
		<hr>
	</div>
	<?php
?>
<script>
	function download(){
		alert("download clicked!");
	}
</script>