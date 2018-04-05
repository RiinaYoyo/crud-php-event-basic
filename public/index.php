<?php include "templates/header.php"; ?>

<ul>
	<li><a href="event.php"><strong>Create</strong></a> - Add an event</li>
</ul>

<?php
	require "functions.php";
    require "../connection.php";
?>

<ul>
<?php 
foreach(get_event_list() as $event){
    echo "<li><a href='event.php?id=".$event["id"]."' >".$event["name"]."</a></li>";
}    
?>
</ul>


<?php include "templates/footer.php"; ?>