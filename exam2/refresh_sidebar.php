<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo '<a href="archiveTest.html">Archive Test</a>';
  echo '<button id="refresh_button" onclick="refresh_sidebar_function()">Refresh</button>';
  echo "<ul>";
  //Open PHP database
  $dbOk = false;
  @ $db = new mysqli('localhost', 'root', '', 'lab6');

  if ($db->connect_error) {
    echo '<div class="messages">Could not connect to the database. Error: ';
    echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
  } else {
    $dbOk = true;
  }
  $havePost = isset($_POST["save"]);
  $errors = '';
  if ($dbOk) {
    //Get Web System's json
    $query = "select * from `courses` where crn=501";
    $result = $db->query($query);
    $record = $result->fetch_assoc()['course_details'];
    $courses = json_decode($record, true);
    //Print Lectures
    echo '<li><a href="#">Lectures:</a></li>';
    echo '<ul class="sub-menu">';
    foreach ($courses['Lectures'] as $lecture){    
      echo '<li><a href="#" onclick="ShowContent(0,\''.$lecture['Title'].'\')">'.$lecture['Title'].'</a></li>';     
    } 
    //Print Labs
    echo '</ul>';
    echo '<li><a href="#">Labs:</a></li>';
    echo '<ul class="sub-menu">';
    foreach ($courses['Labs'] as $lab){    
      echo '<li><a href="#" onclick="ShowContent(1,\''.$lab['Title'].'\')">'.$lab['Title'].'</a></li>'; 
    } 
    echo '</ul>';
    //Done
    $result->free();
    $db->close();
  }
}
?>