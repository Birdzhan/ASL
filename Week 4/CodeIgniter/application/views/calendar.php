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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Calendar</title>
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
<div style="padding-top: 150px">
    <div class="row">
        <div class="col-sm-3" style="margin:0px 0px 0px 50px">
            <h3>Holidays in 2015</h3>
            <p>January 1 New Year's Day<br>
                January 19	Martin Luther King Day<br>
                February 16	Presidents Day and Washington's Birthday<br>
                April 5	Easter<br>
                May 10	Mother's Day<br>
                May 25	Memorial Day<br>
                June 14	Flag Day<br>
                July 4	Independence Day<br>
                September 7	Labor Day<br>
                October 31	Halloween<br>
                November 11	Veterans' Day<br>
                November 26	Thanksgiving<br>
                December 25	Christmas Day<br>
                December 31	New Year's Eve</p>
        </div>

        <div class="col-sm-5">
        <?php echo $calendar; ?>

        <script type="text/javascript">

            $(document).ready(function() {
                $('.calendar .day').click(function() {
                    day_num = $(this).find('.day_num').html();
                    day_data = prompt('Enter Event', $(this).find('.content').html());
                    if (day_data != null) {

                        $.ajax({
                            url: window.location,
                            type: 'POST',
                            data: {
                                day: day_num,
                                data: day_data
                            },
                            success: function() {
                                location.reload();
                            }
                        });
                    }

                });
            });

        </script>
        </div>
        <div class="col-sm-3" style="margin:0px 20px 0px 0px">
            <h3>Important dates</h3>
            <p>January 5 Staff Meeting<br>
                February 10	New Payroll<br>
                March 28 Quarterly Budget<br>
                May 8 Employee Training<br>
                May 19 New Business Meeting<br>
                July 10	Staff Meeting<br>
                Nov 5 New building <br></p>
        </div>
    </div>
    <footer class="footer">
    </footer>
</body>
</div>
    <script src="http://localhost:8889/CodeIgniter/js/jquery.js"></script>
    <script src="http://localhost:8889/CodeIgniter/js/bootstrap.min.js"></script>
    </body>
</div>
</html>
