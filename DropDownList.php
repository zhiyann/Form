<?php
	include("config.php");					
	$sql = "SELECT keyword FROM searchcriteria";
	$result = mysqli_query($mysql,$sql); //query the database with the condition, and storing it into a variable
	$json = array();
	
	$json = mysqli_fetch_all($result,MYSQLI_ASSOC);

	$encodedJSON = json_encode($json);
	$decodedJSON = json_decode($encodedJSON,TRUE);
	
	// $decodedJSON[0]['keyword'];  http://www.dyn-web.com/tutorials/php-js/json/decode.php
	
?>
<HTML>
<link rel="stylesheet" type="text/css" href="./bootstrap.css">
<script type="text/javascript" src="./jquery-3.2.0.min.js"></script>
<script>
	function testValue(){
		var selectedOptions = document.getElementById("selectedValue");
				
		document.getElementById("selectedLanguage").value = selectedOptions.options[selectedOptions.selectedIndex].value;
	}
</script>
	<BODY>
	
		<div class="container">
			<div class="row justify-content-center my-5">
				
				<div class="col-xs-6">
				<label for="selectedValue">Select a Programming Language:</label>
					<SELECT onchange="testValue()" id="selectedValue">
						<OPTION value=" "></OPTION>
						<?php
						foreach($decodedJSON as $a){
							echo "<OPTION value=".$a['keyword'].">".$a['keyword']."</OPTION>";
						}
						?>
					</SELECT>
				<BR>
				<P>Your selection:
					<input type="text" id="selectedLanguage">	
				</P>
					
				</div>
				
			</div>
		</div>
				
	</BODY>
</HTML>
