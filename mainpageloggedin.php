<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>myNotes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Calligraffitti|Nothing+You+Could+Do|Rock+Salt" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <nav role="navigation" class="navbar navbar-custom">

        <div class="conatiner-fluid">

            <div class="navbar-header">
                <a class="navbar-brand">ourNotes</a>
                <button type="button" class="navbar-toggle" data-target="#myNav" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <!-- spans below make the burger -->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="myNav">
                <ul class="nav navbar-nav">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li class="active"><a href="#">My Notes</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Logged in as <b>username</b></a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>

        </div> <!-- end container-fluid -->

    </nav> <!-- end navbar -->







    <!-- Body text area -->
    <div class="container notes-container">
        <div class="row">
            <!-- skip the first 3 columns then use next 6 columns: -->
            <div class="col-md-offset-3 col-md-6">
                <div class="note-buttons">
                    <button class="btn btn-lg btn-info" type="button" id="addNote">
                        Add Note
                    </button>
                    <button class="btn btn-lg btn-info pull-right" type="button" id="edit">
                        Edit
                    </button>
                    <button class="btn btn-lg btn-success pull-right" type="button" id="done">
                        Done
                    </button>
                    <button class="btn btn-lg btn-info" type="button" id="allNotes">
                        All Note
                    </button>
                </div>

                <!-- hidden text area -->
                <div id="notePad">
                    <textarea rows="10"></textarea>
                </div>

                <div id="notes">
                    <!-- AJAX call to a PHP file to display notes -->
                </div>
            </div> <!-- end col-md-offset-3 col-md-6 -->

        </div> <!-- end row -->
    </div> <!-- end container -->










    <!-- footer -->
    <div class="footer">
        <!-- container is used so the whole width of page is NOT taken -->
        <div class="container">
            <p>trevor-hq.rocks &copy Copyright
                <?php $today=date("Y"); echo $today ?>
            </p>
        </div>
    </div> <!-- end footer -->










    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
