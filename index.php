<!doctype html>
<html lang="en">
    <head>
        <title>One Page Site</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <main>
            <header>
                <h1>One Page Site</h1>
            </header>
            <article>
                <h1>Slider</h1>
                <div id="container">
                    <div id="inner_container">
                        <div id="images_container">
                            <div class="img_container">
                                <p><img src="pictures/pic1.jpg" alt="pic1.jpg"></p>
                            </div>
                            <div class="img_container">
                                <p><img src="pictures/pic2.jpg" alt="pic2.jpg"></p>
                                </div>
                            <div class="img_container">
                                <p><img src="pictures/pic3.jpg" alt="pic3.jpg"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="overlay">
                    <div id="left_button" class="overlay_button" onclick="onLeftButton()"><</div>
                    <div id="right_button" class="overlay_button" onclick="onRightButton()">></div>
                </div>
                <h1>Gallery</h1>
                <div id="gallery">
                    <a class="image-link" href="pictures/pic4.jpg"><img src="pictures/pic4.jpg" alt="pic4" /></a>
                    <a class="image-link" href="pictures/pic5.jpg"><img src="pictures/pic5.jpg" alt="pic5" /></a>
                    <a class="image-link" href="pictures/pic6.jpg"><img src="pictures/pic6.jpg" alt="pic6" /></a>
                </div>
                <div id="gallery_2">
                    <a class="image-link" href="pictures/pic7.jpg"><img src="pictures/pic7.jpg" alt="pic7" /></a>
                    <a class="image-link" href="pictures/pic8.jpg"><img src="pictures/pic8.jpg" alt="pic8" /></a>
                    <a class="image-link" href="pictures/pic9.jpg"><img src="pictures/pic9.jpg" alt="pic9" /></a>
                </div>
                <h1>Contact</h1>
                    <p>Your opinion is very important for us. Send us your feedback and we will reply in short notice. Thank you.</p><br>
                <div id="contact">
                    <form method="post">
                        <label>Your Name:<br>
                            <input type="text" name="name" maxlength="30"><br>
                        </label>
                        <label>Your Email:<br>
                            <input type="email" name="email"><br>
                        </label>
                        <label>Message:<br>
                            <textarea name="message" maxlength="987"></textarea>
                        </label><br>
                        <input type="submit" name="submit">
                    </form>
                </div>
            </article>
            <footer>
                <p>One page site</p>
            </footer>
        </main>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $fp = fopen('contact.txt', 'ab');
    fwrite($fp, "\n".$name);
    fwrite($fp, "\n".$email);
    fwrite($fp, "\n".$message."\n"." ");
    fclose($fp);
}
?>
