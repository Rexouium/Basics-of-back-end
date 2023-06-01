


<!DOCTYPE html>
<html>
<head>
    <title>Dynamische Webpagina</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<?php
$hour = date('G');
$time = date("h:i:sa");
$message = "";
$image = "";

$hour = 19;
if ($hour < 6) {
            $message = "Goede nacht";
            $image = "night";
        } elseif ($hour < 12) {
            $message = "Goede morgen";
            $image = "morning";
        } elseif ($hour < 18) {
            $message = "Goede middag";
            $image = "afternoon";
        } else {
            $message = "Goede avond";
            $image = "evening";
        }
    ?>

<body class= <?php echo $image ?>>
    <div id="greeting">
        <?php
        echo "<h1>$message</h1>";
        echo $time
        ?>
        <!-- <p>Huidige tijd: <?php echo date('H:i'); ?></p> -->
    </div>
</body> 
</html>
