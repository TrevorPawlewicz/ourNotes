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







    <!-- login form modal -->
    <form id="loginForm" method="POST">
        <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" arai-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 id="myModalLabel">Login</h4>
                    </div>

                    <div class="modal-body">
                        <!-- error messages in php -->
                        <div id="loginMessage">

                        </div>
                        <!-- inputs -->
                        <div class="form-group">
                            <label for="loginEmail" class="sr-only">Email:</label>
                            <input class="form-control" type="email" name="loginEmail" id="loginEmail" placeholder="Email" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="loginPassword" class="sr-only">Password:</label>
                            <input class="form-control" type="password" name="loginPassword" id="loginPassword" placeholder="Password" maxlength="30">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="remember" name="remember">
                                Remember me
                            </label>
                            <a class="pull-right" data-dismiss="modal" data-target="#forgotPasswordModal" data-toggle="modal">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                    <!-- buttons -->
                    <div class="modal-footer">
                        <!-- login button with input-->
                        <input class="btn btn-success" type="submit" name="login" value="Login">

                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>

                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal"
                                data-target="#signupModal" data-toggle="modal">
                            Register
                        </button>
                    </div>
                </div> <!-- end modal-content -->

            </div> <!-- end modal-dialog -->
        </div> <!-- end modal -->
    </form> <!-- end Login form -->







    <!-- sign up form modal -->
    <form id="signupForm" method="POST">
        <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel"  arai-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 id="myModalLabel">Sign up and start using ourNotes online!</h4>
                    </div>

                    <div class="modal-body">
                        <!-- error messages in php -->
                        <div id="signupMessage">

                        </div>
                        <!-- inputs -->
                        <div class="form-group">
                            <label for="username" class="sr-only">Username:</label>
                            <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email:</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Choose a password:</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Confirm password:</label>
                            <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm password" maxlength="30">
                        </div>
                    </div>
                    <!-- buttons -->
                    <div class="modal-footer">
                        <input class="btn btn-success" type="submit" name="signup" value="Sign Up">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div> <!-- end modal-content -->

            </div> <!-- end modal-dialog -->
        </div> <!-- end modal -->
    </form> <!-- end signUp form -->







    <!-- forgot password modal -->
    <form id="forgotPasswordForm" method="POST">
        <div class="modal" id="forgotPasswordModal" role="dialog" aria-labelledby="myModalLabel" arai-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 id="myModalLabel">Forgot Password? Enter your email address:</h4>
                    </div>

                    <div class="modal-body">
                        <!-- error messages in php -->
                        <div id="forgotPasswordMessage">

                        </div>
                        <!-- inputs -->
                        <div class="form-group">
                            <label for="forgotEmail" class="sr-only">Email:</label>
                            <input class="form-control" type="email" name="forgotEmail" id="forgotEmail" placeholder="Email" maxlength="50">
                        </div>

                    </div>
                    <!-- buttons -->
                    <div class="modal-footer">
                        <!-- submit button with input -->
                        <input class="btn btn-success" type="submit" name="forgotPassword" value="Submit">

                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>

                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal"
                                data-target="signupModal" data-toggle="modal">
                            Register
                        </button>
                    </div>
                </div> <!-- end modal-content -->

            </div> <!-- end modal-dialog -->
        </div> <!-- end modal -->
    </form> <!-- end forgot password form -->






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
