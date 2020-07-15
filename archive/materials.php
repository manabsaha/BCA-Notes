<?php
	$y = $_GET['subject'];
	?>
	<div class="item">
		<img src="../static/img/dir.png" alt="dir" onclick="loadNotes('<?php echo $y ?>')">
		<p onclick="loadNotes('<?php echo $y ?>')">NOTES</p>
	</div>
	<div class="item">
		<img src="../static/img/dir.png" alt="dir" onclick="loadSyllabus('<?php echo $y ?>')">
		<p onclick="loadSyllabus('<?php echo $y ?>')">SYLLABUS</p>
	</div>
	<div class="item">
		<img src="../static/img/dir.png" alt="dir" onclick="loadPapers('<?php echo $y ?>')">
		<p onclick="loadPapers('<?php echo $y ?>')">PAPERS</p>
	</div>
	<?php
?>
<script>
	function loadNotes(subject){
		$.ajax({
				type: 'GET',
				url: 'files.php',
				data: {"subject":subject,"type":"notes"},
				success : function(data){
					$('#explorer-body').hide();
					$('#explorer-subjects').hide();
					$('#explorer-materials').hide();
					$('#explorer-files').html(data);
					$('#explorer-files').show();
				}
		});
	}
	function loadSyllabus(subject){
		$.ajax({
				type: 'GET',
				url: 'files.php',
				data: {"subject":subject,"type":"syllabus"},
				success : function(data){
					$('#explorer-body').hide();
					$('#explorer-subjects').hide();
					$('#explorer-materials').hide();
					$('#explorer-files').html(data);
					$('#explorer-files').show();
				}
		});
	}
	function loadPapers(subject){
		$.ajax({
				type: 'GET',
				url: 'files.php',
				data: {"subject":subject,"type":"papers"},
				success : function(data){
					$('#explorer-body').hide();
					$('#explorer-subjects').hide();
					$('#explorer-materials').hide();
					$('#explorer-files').html(data);
					$('#explorer-files').show();
				}
		});
	}
</script>