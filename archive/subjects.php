<?php
	$one = ['Fundamentals of Computer','Mathematics I','Digital Design',"Communication Skills","C Programming"];
	$two = ['Mathematics II','Data Structures','Financial Manangement','Computer Architecture','OOP using Java'];
	$three = ['Mathematics III','Formal Language and Automata','Software Engineering','System Software','Operating System'];
	$four = [];
	$five = ['Computer Graphics','Operations Research','Internet and WP','Cloud Computing'];
	$six = ['PROJECT'];
	$subjects = [];

	$x = $_GET['sem'];
	$y = $_GET['type'];

	switch ($_REQUEST['sem']) {
	 	case 1: $subjects=$one; break;
	 	case 2: $subjects=$two; break;
	 	case 3: $subjects=$three; break;
	 	case 4: $subjects=$four; break;
	 	case 5: $subjects=$five; break;
	 	case 6: $subjects=$six; break;
	 	default: break;
	 }
	for ($i=0; $i < count($subjects); $i++) { 
		?>
			<div class="item">
				<img src="../static/img/dir.png" alt="dir" onclick="loadMat('<?php echo $subjects[$i] ?>','<?php echo $y ?>','<?php echo $x ?>')" name="<?php echo $subjects[$i] ?>">
				<p onclick="loadMat('<?php echo $subjects[$i] ?>','<?php echo $y ?>')" name="<?php echo $subjects[$i] ?>"><?php echo $subjects[$i]; ?></p>
			</div>
		<?php
	}
?>
<script>
	function loadMat(subject,type,sem){
			$.ajax({
				type: 'GET',
				url: 'files.php',
				data: {"subject":subject,"type":type,"sem":sem},
				success : function(data){
					$('#explorer-subjects').hide();
					$('#explorer-body').hide();
					$('#explorer-materials').hide();
					$('#explorer-files').html(data);
					$('#explorer-files').show();
					$('#path').text(" >>HOME/ SEMESTER "+sem+" / "+type.toUpperCase()+" / "+subject.toUpperCase());
				}
		});
	}
	function loadUp(){
		$('#explorer-subjects').hide();
		$('#explorer-body').hide();
		$('#explorer-materials').show();
		$('#path').text(" >>HOME/ SEMESTER / ");

	}
</script>