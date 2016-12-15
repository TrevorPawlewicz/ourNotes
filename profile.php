<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile</title>
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
    <div class="container profile-container">
        <div class="row">
            <!-- skip the first 3 columns then use next 6 columns: -->
            <div class="col-md-offset-3 col-md-6">
                <h2>General Account Settings:</h2>

                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered">
                        <tr data-target="#updateUsername" data-toggle="modal">
                            <td>Username</td>
                            <td>value</td>
                        </tr>

                        <tr data-target="#updateEmail" data-toggle="modal">
                            <td>Email</td>
                            <td>value</td>
                        </tr>

                        <tr data-target="#updatePassword" data-toggle="modal">
                            <td>Password</td>
                            <td>hidden</td>
                        </tr>
                    </table>
                </div>
            </div> <!-- end col-md-offset-3 col-md-6 -->

        </div> <!-- end row -->
    </div> <!-- end container -->







    <!-- updateUsername modal -->
    <form id="updateUsernameForm" method="POST">
        <div class="modal" id="updateUsername" role="dialog" aria-labelledby="myModalLabel" arai-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 id="myModalLabel">Edit Username</h4>
                    </div>

                    <div class="modal-body">
                        <!-- error messages in php -->
                        <div id="loginMessage">

                        </div>
                        <!-- inputs -->
                        <div class="form-group">
                            <label for="loginEmail">Username:</label>
                            <input class="form-control" type="text" name="username" id="username"
                                   value="username value" maxlength="30">
                        </div>
                    </div>
                    <!-- buttons -->
                    <div class="modal-footer">
                        <!-- updateUsername button with input-->
                        <input class="btn btn-success" type="submit" name="updateUsername" value="Submit">

                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div> <!-- end modal-content -->

            </div> <!-- end modal-dialog -->
        </div> <!-- end modal -->
    </form> <!-- end updateUsername form -->








    <!-- updateEmail modal -->
    <form id="updateEmailForm" method="POST">
        <div class="modal" id="updateEmail" role="dialog" aria-labelledby="myModalLabel" arai-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 id="myModalLabel">Enter New Email:</h4>
                    </div>

                    <div class="modal-body">
                        <!-- error messages in php -->
                        <div id="loginMessage">

                        </div>
                        <!-- inputs -->
                        <div class="form-group">
                            <label for="loginEmail">Email:</label>
                            <input class="form-control" type="email" name="email" id="email"
                                   value="email value" maxlength="50">
                        </div>
                    </div>
                    <!-- buttons -->
                    <div class="modal-footer">
                        <!-- updateUsername button with input-->
                        <input class="btn btn-success" type="submit" name="updateUsername" value="Submit">

                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div> <!-- end modal-content -->

            </div> <!-- end modal-dialog -->
        </div> <!-- end modal -->
    </form> <!-- end updateEmail form -->








    <!-- updatePassword modal -->
    <form id="updatePasswordForm" method="POST">
        <div class="modal" id="updatePassword" role="dialog" aria-labelledby="myModalLabel" arai-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 id="myModalLabel">Enter Current and New Password:</h4>
                    </div>

                    <div class="modal-body">
                        <!-- error messages in php -->
                        <div id="loginMessage">

                        </div>
                        <!-- inputs -->
                        <div class="form-group">
                            <label for="currentPassword" class="sr-only">Your current password:</label>
                            <input class="form-control" type="password" name="currentPassword" id="currentPassword"
                                   placeholder="Your current password" maxlength="30">
                        </div>

                        <div class="form-group">
                            <label for="password" class="sr-only">Choose a password:</label>
                            <input class="form-control" type="password" name="password" id="password"
                                   placeholder="Choose a password" maxlength="30">
                        </div>

                        <div class="form-group">
                            <label for="password2" class="sr-only">Confirm password:</label>
                            <input class="form-control" type="password" name="password2" id="password2"
                                   placeholder="Confirm password" maxlength="30">
                        </div>
                    </div>
                    <!-- buttons -->
                    <div class="modal-footer">
                        <!-- updateUsername button with input-->
                        <input class="btn btn-success" type="submit" name="updateUsername" value="Submit">

                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div> <!-- end modal-content -->

            </div> <!-- end modal-dialog -->
        </div> <!-- end modal -->
    </form> <!-- end updatePassword form -->






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
