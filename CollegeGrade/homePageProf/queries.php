<?php
 if (isset($_POST['assignmentName'])) {
  echo'<div class="submittedAssign" style="display:none;">submittedAssign</div>';
  //we would query here, but random data for now
  $num = rand(1,10);
  echo "<div class='numStu' style='display:none'>".$num."</div>";
 }
 if (isset($_POST['score1'])) {
  //push data into db
  echo '<div class="submittedGrades" style="display:none;">submittedGrades</div>';
 }
?>
