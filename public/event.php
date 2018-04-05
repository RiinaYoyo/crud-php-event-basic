<?php
    require "functions.php";
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //filter all the input value => get no space and special char
        $name = trim(filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING ));
        $date = trim(filter_input(INPUT_POST,'date', FILTER_SANITIZE_URL ));
        $start = trim(filter_input(INPUT_POST,'start', FILTER_SANITIZE_URL ));
        $end = trim(filter_input(INPUT_POST,'end', FILTER_SANITIZE_URL ));
        $description = trim(filter_input(INPUT_POST,'description', FILTER_SANITIZE_STRING ));
        $price = trim(filter_input(INPUT_POST,'price', FILTER_SANITIZE_NUMBER_INT));
        $image = trim(filter_input(INPUT_POST,'image', FILTER_SANITIZE_URL ));
       
        //if all form input are ready and writed
        if(empty($name)||empty($date)||empty($start)||empty($end)||empty($description)||empty($price)||empty($image)){
            $error_message = "please fill in the required field";
        }
        else{
            if(add_event($name,$date,$start,$end,$description,$price,$image)){
                header('Location: index.php');
                exit;
            }
            else{
                $error_message = "Could not add event";
            }
        }
    }
?>

<?php require "templates/header.php"; ?>

<h2>Add an event</h2>

<form method="post" action="event.php">
	<label for="name">Event name</label>
	<input type="text" name="name" id="name" value="">

	<label for="date">Date</label>
	<input type="date" name="date" id="date" value="">

	<label for="start">Start</label>
	<input type="time" name="start" id="start" value="">

	<label for="end">End</label>
	<input type="time" name="end" id="end" value="">

	<label for="description">Description</label>
    <textarea id="description" name="description"></textarea>

	<label for="price">Price</label>
	<input type="text" name="price" id="price" value="">

	<label for="image">Image</label>
	<input type="text" name="image" id="image" value="">

	<input type="submit" name="submit" value="Envoyer">
</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>