<?php include 'database.php'; ?>
<?php include 'process.php'; ?>
<?php $query = "SELECT * FROM shouts ORDER BY id DESC";
    $shouts = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Shoutit</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <header>
                <h1>SHOUT IT! Shoutbox</h1>
            </header>
            <div id="shouts">
                <ul>
                    <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                        <li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?>: </strong><?php echo $row['message'] ?></li>
                    <?php endwhile; ?>
                </ul> 
            </div>
            <div id="input">
                <form method="POST" action="process.php">
                    <input type="text" name="user" placeholder="Enter your name">
                    <input type="text" name="message" placeholder="Enter your message">
                    <br />
                    <input type="submit" class="shout-btn" name="submit" value="Shout It Out"> 
                </form>
            </div>
        </div>
        <?php if(isset($_GET["error"])){
            echo $_GET["error"];
        }
        ?>
    </body>
</html>