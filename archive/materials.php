<?php
	$y = $_GET['sem'];
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
	function loadNotes(sem){
		$.ajax({
				type: 'GET',
				url: 'subjects.php',
				data: {"sem":sem,"type":"notes"},
				success : function(data){
					$('#explorer-body').hide();
					$('#explorer-materials').hide();
					$('#explorer-subjects').html(data);
					$('#explorer-subjects').show();
				}
		});
	}
	function loadSyllabus(sem){
		$.ajax({
				type: 'GET',
				url: 'subjects.php',
				data: {"sem":sem,"type":"syllabus"},
				success : function(data){
					$('#explorer-body').hide();
					$('#explorer-materials').hide();
					$('#explorer-subjects').html(data);
					$('#explorer-subjects').show();
				}
		});
	}
	function loadPapers(sem){
		$.ajax({
				type: 'GET',
				url: 'subjects.php',
				data: {"sem":sem,"type":"papers"},
				success : function(data){
					$('#explorer-body').hide();
					$('#explorer-materials').hide();
					$('#explorer-subjects').html(data);
					$('#explorer-subjects').show();
				}
		});
	}
</script>