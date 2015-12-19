<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="http://localhost:8889/CodeIgniter/css/style.css " type="text/css" charset="utf-8">
    <link href="http://localhost:8889/CodeIgniter/css/bootstrap.min.css" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <div type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="http://localhost:8889/CodeIgniter/index.php/site/members_area">Home</a>
                        </li>
                        <li>
                            <a href="http://localhost:8889/CodeIgniter/index.php/employee">Employee list</a>
                        </li>
                        <li>
                            <a href="http://localhost:8889/CodeIgniter/index.php/email">Email</a>
                        </li>
                        <li>
                            <a href="http://localhost:8889/CodeIgniter/index.php/mycal/display/">Calendar</a>
                        </li>
                        <li style="padding-left: 600px">
                            <a href="http://localhost:8889/CodeIgniter/index.php/gallery">Gallery</a>
                        </li>
                        <li style="padding-left: 5px">
                            <a href="http://localhost:8889/CodeIgniter/">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="gallery" style="margin-top: 150px">
        <?php if (isset($images) && count($images)):
            foreach($images as $image): ?>
            <div class="thumb">
                <a href="<?php echo $image['url']; ?>">
                    <img src="<?php echo $image['thumb_url']; ?>"/>
                </a>
            </div>
        <?php endforeach; else: ?>
    <div id="blank_gallery">Please Upload Image Here</div>
        <?php endif; ?>
    </div>

    <div style="text-align: center; margin: auto" id="upload">
        <?php
        echo form_open_multipart('gallery');
        echo form_upload('userfile');
        echo form_submit('upload', 'Upload');
        echo form_close();
        ?>
    </div>
    <footer class="footer">
    </footer>
</body>
<script src="http://localhost:8889/CodeIgniter/js/jquery.js"></script>
<script src="http://localhost:8889/CodeIgniter/js/bootstrap.min.js"></script>
</html>