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
                    <li class="shout"><span>8pm</span>nathe: Sup</li>
                    <li class="shout"><span>8pm -</span>nate: Sup</li>
                    <li class="shout"><span>8pm -</span>nate: sup</li>
                    <li class="shout"><span>8pm -</span>nate: Sup</li>
                    <li class="shout"><span>8pm -</span>nate: Sup</li>
                    <li class="shout"><span>8pm -</span>nate: Sup</li>
                </ul> 
            </div>
            <div id="input">
                <form method="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter your name">
                    <input type="text" name="message" placeholder="Enter your name">
                    <br />
                    <input type="submit" class="shout-btn" name="submit" value="Shout It Out"> 
                </form>
            </div>
        </div>
    </body>
</html>