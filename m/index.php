<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
        </title>
        <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="my.css" />
        <script src="jquery-1.7.2.min.js"></script>
        <script src="jquery.mobile-1.2.0.min.js"></script>
        <script src="my.js"></script>
        <!-- User-generated css -->
        <style>
            .error{
                color: red;
                font-weight: bold;
            }
        </style>
        <!-- User-generated js -->
        <script>
            $("#target").click(function() {
                alert("Handler for .click() called.");
            });


            try {

    $(function() {

    });

  } catch (error) {
    console.error("Your javascript has an error: " + error);
  }
        </script>
    </head>
    <body>

        <!-- Home -->
        <div data-role="page" id="page1">
          <div data-theme="a" data-role="header">
            <h3 id="header">
              Fuber
            </h3>
          </div>
           <div data-role="content">
                <a href="#page1">
                    <div style="display: inline">
                        <img style="width: 100%; height: 100%" src="food.jpg" />
                    </div>
                </a>
                <a id="login" data-role="button" href="#login-page">
                    Login
                </a>
                <a id="signup" data-role="button" href="#signup-page">
                    Signup
                </a>
            </div>
        </div>

        <!-- Login Page -->
        <div data-role="page" id="login-page">
          <div data-theme="a" data-role="header">
            <h3 id="header">
              Fuber
            </h3>
          </div>

             <div data-role="content">
                <h2>
                    Login
                </h2>
                 <?php

                   if(isset($_GET['error'])){
                       echo "<div class=\"error\">{$_GET['error']}</div>";
                   }
                  ?>
                <form action="login.php" method="POST" data-ajax="false">
                    <div data-role="fieldcontain">
                        <label for="textinput3">
                            Username
                        </label>
                        <input name="username" id="textinput3" placeholder="" value="" type="text" />
                    </div>
                    <div data-role="fieldcontain">
                        <label for="textinput4">
                            Password
                        </label>
                        <input name="password" id="textinput4" placeholder="" value="" type="password" />
                    </div>
                    <input type="submit" value="Login" />
                </form>
                <a href="#signup-page">Create an account instead?</a>
            </div>
        </div>

        <!-- Signup -->
        <div data-role="page" id="signup-page">
            <div data-theme="a" data-role="header">
                <h3>
                    Fuber
                </h3>
            </div>
            <div data-role="content">
                <h2>
                    Sign Up
                </h2>
                <?php

                if(isset($_GET['error'])){
                    echo "<div class=\"error\">{$_GET['error']}</div>";
                }
                ?>
                <form action="entry.php"  enctype="multipart/form-data" method="POST" data-ajax="false">
                        <div id="role" data-role="fieldcontain">
                            <fieldset data-role="controlgroup" data-type="horizontal">
                                <legend>
                                    I am a:
                                </legend>
                                <input id="radio1" name="role" value="seller" type="radio" />
                                <label for="radio1">
                                    Seller
                                </label>
                                <input id="radio2" name="role" value="buyer" type="radio" />
                                <label for="radio2">
                                    Buyer
                                </label>
                                <input id="radio3" name="role" value="deliverer" type="radio" />
                                <label for="radio3">
                                    Deliverer
                                </label>
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <label for="textinput1">
                                Name
                            </label>
                            <input name="name" id="textinput1" placeholder="" value="" type="text" />
                        </div>
                        <div data-role="fieldcontain">
                            <label for="textinput3">
                                Username
                            </label>
                            <input name="username" id="textinput3" placeholder="" value="" type="text"/>
                        </div>
                        <div data-role="fieldcontain">
                            <label for="textinput4">
                                Password
                            </label>
                            <input name="password" id="textinput4" placeholder="" value="" type="password" />
                        </div>
                        <div data-role="fieldcontain">
                            <label for="textinput5">
                                Phone
                            </label>
                            <input name="phone" id="textinput5" placeholder="" value="" type="tel" />
                        </div>
                        <div data-role="fieldcontain">
                            <label for="textinput6">
                                Email
                            </label>
                            <input name="email" id="textinput6" placeholder="" value="" type="email" />
                        </div>
                        <div data-role="fieldcontain">
                            <label for="textinput7">
                                Photo
                            </label>
                            <input name="photo" id="textinput7" placeholder="" value="" type="file" accept="image/*;capture=camera" />
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup" data-type="horizontal">
                                <legend>
                                    Will you Deliver?
                                </legend>
                                <input id="radio4" name="deliver" value="1" type="radio" />
                                <label for="radio4">
                                    Yes
                                </label>
                                <input id="radio5" name="deliver" value="0" type="radio" />
                                <label for="radio5">
                                    No
                                </label>
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <label for="textinput8">
                                Delivery rate ($ per hour)
                            </label>
                            <input name="rate" id="textinput8" placeholder="" value="" type="text" />
                        </div>

                        <div data-role="fieldcontain">
                            <label for="textinput9">
                                Location
                            </label>
                            <input name="location" id="textinput9" placeholder="" value="" type="text" />
                        </div>


                        <div data-role="fieldcontain">
                            <label for="textinput10">
                                Details
                            </label>
                            <textarea name="description" id="textinput10" placeholder="" value=""></textarea>
                        </div>

                    <input type="submit" value="Sign Up" />
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>