<?php
$conn = mysqli_connect("localhost","","","task4");

$query = "SELECT * FROM info ORDER BY created_at DESC LIMIT 5"; // select the latest inserted chareacter
$query_run = mysqli_query($conn,$query); //retrive form the database
if(mysqli_num_rows($query_run) > 0){
    foreach($query_run as $row){
        ?>
        <p> temperature is: <?= $row['temperature']; ?> </p> <!--print it out-->
        <p> humidity is: <?= $row['humidity']; ?> </p>
        <p> At: <?= $row['created_at']; ?> </p><hr>
        <?php
    }
}

?>