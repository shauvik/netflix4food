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

            .colorpage{
                background-color:   #0176A0;
                background-image:   -moz-radial-gradient(center, ellipse cover, #F6E4CC 0%, #005077 100%);
                background-image:   -webkit-radial-gradient(center, ellipse cover, #F6E4CC 0%, #E9967A 100%);
                background-image:   -o-radial-gradient(center, ellipse cover, #F6E4CC 0%, #005077 100%);
                background-image:   -ms-radial-gradient(center, ellipse cover, #F6E4CC 0%, #005077 100%);
                background-image:   radial-gradient(center, ellipse cover, #F6E4CC 0%, #005077 100%);
                filter:             progid:DXImageTransform.Microsoft.gradient(startColorstr = '#F6E4CC', endColorstr = '#005077', GradientType = 0);
            }

            .spacer{
                height: 50px;
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
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-40132115-1', 'fuber.co');
          ga('send', 'pageview');

        </script>
    </head>
    <body>

        <!-- Home -->
        <div data-role="page" class="colorpage" id="homepage" style="padding-top: 100px;">
           <div data-role="content">
                <a href="#">
                    <div style="display: inline">
                        <img style="width: 100%; height: 100%" src="fuber_logo.png" />
                    </div>
                </a>
                <div class="spacer"></div>
                <a id="login" data-role="button" href="#login-page">
                    Login
                </a>
                <a id="signup" data-role="button" href="#signup-page">
                    Signup
                </a>
                <a id="about" data-role="button" href="#about-page">
                    About Us
                </a>
            </div>
        </div>

        <!-- Login Page -->
        <div data-role="page" id="login-page">
          <div data-theme="a" data-role="header">
                <h3>Fuber</h3>
                <a href="#homepage" data-role="button" data-icon="home" data-iconpos="notext" data-theme="a" data-inline="true" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" class="ui-btn ui-btn-inline ui-btn-icon-notext ui-btn-up-a"><span class="ui-btn-inner"><span class="ui-icon ui-icon-home ui-icon-shadow">&nbsp;</span></span></a>
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
                <h3>Fuber</h3>
            </div>
            <div data-role="content">
                <h2>
                    Sign Up
                </h2>
                <?php

                if(isset($error)){
                    echo "<div class=\"error\">$error</div>";
                }
                ?>
                <form action="entry.php#signup-page"  enctype="multipart/form-data" method="POST" data-ajax="false">
                        <div id="role" data-role="fieldcontain">
                            <fieldset data-role="controlgroup" data-type="horizontal">
                                <legend>
                                    I am a:
                                </legend>
                                <input id="radio1" name="role" value="seller" type="radio" <?php if ($role == "seller") echo 'checked="checked";' ?>/>
                                <label for="radio1">
                                    Seller
                                </label>
                                <input id="radio2" name="role" value="buyer" type="radio" <?php if ($role == "buyer") echo 'checked="checked"'; ?>/>
                                <label for="radio2">
                                    Buyer
                                </label>
                                <input id="radio3" name="role" value="deliverer" type="radio" <?php if ($role == "deliverer") echo 'checked="checked"'; ?> />
                                <label for="radio3">
                                    Deliverer
                                </label>
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <label for="textinput1">
                                Name
                            </label>
                            <input name="name" id="textinput1" placeholder="" value="<?php echo $name; ?>" type="text"  />
                        </div>
                        <div data-role="fieldcontain">
                            <label for="textinput3">
                                Username
                            </label>
                            <input name="username" id="textinput3" placeholder="" value="<?php echo $userName; ?>" type="text" />
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
                            <input name="phone" id="textinput5" placeholder="" value="<?php if($phone == 0) echo ""; else echo $phone; ?>" type="tel"  />
                        </div>
                        <div data-role="fieldcontain">
                            <label for="textinput6">
                                Email
                            </label>
                            <input name="email" id="textinput6" placeholder="" value="<?php echo $email; ?>" type="email" />
                        </div>
                        <div data-role="fieldcontain">
                            <label for="photo_control">
                                Photo
                            </label>
                            <input name="photo" id="photo_control" placeholder="" value="" type="file" accept="image/*;capture=camera"/>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup" data-type="horizontal">
                                <legend>
                                    Will you Deliver?
                                </legend>
                                <input id="radio4" name="deliver" value="1" type="radio" <?php if ($deliver == 1) echo 'checked="checked"'; ?>/>
                                <label for="radio4">
                                    Yes
                                </label>
                                <input id="radio5" name="deliver" value="0" type="radio" <?php if ($deliver == 0) echo 'checked="checked"'; ?>/>
                                <label for="radio5">
                                    No
                                </label>
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <label for="textinput8">
                                Delivery rate ($ per hour)
                            </label>
                            <input name="rate" id="textinput8" placeholder="" value="<?php echo $rate; ?>" type="text" />
                        </div>

                        <div data-role="fieldcontain">
                            <label for="textinput9">
                                Location
                            </label>
                            <input name="location" id="textinput9" placeholder="" value="<?php echo $location; ?>" type="text" />
                        </div>


                        <div data-role="fieldcontain">
                            <label for="textinput10">
                                Details
                            </label>
                            <textarea name="description" id="textinput10" placeholder="" ><?php echo $description; ?></textarea>
                        </div>

                    <input type="submit" value="Sign Up" />
                    </div>
                </form>
            </div>
        </div>

        <!-- About  -->
        <div data-role="page" id="about-page">
           <div data-role="content">
                <a href="#homepage">
                    <div style="display: inline;text-align:center;">
                        <img style="width: 50%; height: 50%" src="fuber_logo.png" />
                    </div>
                </a>
                <h1>About Us</h1>
                <p>
                    We are .... 

                </p>
                    <h1 class="top-h1">
                    Frequently Asked Questions
                    </h1>
                    <div class="top-faq">
                    <h4>
                    <a href="#ok-so-how-does-this-work" data-ajax="false">Ok, so how does this work?</a>
                    </h4>
                    <h4>
                    <a href="#alright-i-signed-up-what-happens-next" data-ajax="false">Alright, I signed up, what happens next?</a>
                    </h4>
                    <h4>
                    <a href="#how-do-you-match-the-two-groups" data-ajax="false">How do you register? </a>
                    </h4>
                    <h4>
                    <a href="#what-part-of-my-facebook-profile-are-you-looking-at" data-ajax="false">Can I register as Seller?</a>
                    </h4>
                    <h4>
                    <a href="#i-included-a-few-friends-as-my-wingmen-when-i-signed-up-do-i-need-to-bring-those-friends" data-ajax="false">Can I upload photos of the fruit?</a>
                    </h4>
                    <h4>
                    <a href="#when-do-i-find-out-who-i-m-going-to-meet-and-how-will-we-find-them" data-ajax="false">How do you Manage Inventory?</a>
                    </h4>
                    <h4>
                    <a href="#how-do-i-cancel-or-change-the-date-of-my-grouper" data-ajax="false">Is Fuber available in Spanish? </a>
                    </h4>
                    <h4>
                    <a href="#what-kind-of-bars-and-lounges-do-you-work-with" data-ajax="false">How are prices determined?</a></h4></div>
                    <div class="bottom-faq">
                    <h1 class="bottom-h1">
                    Frequently Given Answers
                    </h1>
                    <div class="answer-con" id="ok-so-how-does-this-work">
                    <h3>
                    Ok, so how does this work?
                    </h3>
                    <div class="answer">
                      <p>Good question, glad you asked. We set connect buyer and sellers of food. We makeit easy to purchase, negotiate, and have food delivered.</p>
                      <p><img src="http://fubar20130414.s3.amazonaws.com/deliver.PNG" alt="" width="128"></p>
                    </div>
                    </div>
                    <div class="answer-con" id="alright-i-signed-up-what-happens-next">
                    <h3>
                    Alright, I signed up, what happens next?
                    </h3>
                    <div class="answer">
                      <p>Be you can shop choose your items. They will be delivered. Be sure to order before the food sells out.</p>
                      <p><img src="http://fubar20130414.s3.amazonaws.com/inven5.PNG" alt="" width="128"></p>
                    </div>
                    </div>
                    <div class="answer-con" id="how-do-you-match-the-two-groups">
                    <h3>
                    How do you register?
                    </h3>
                    <div class="answer"> 
                      <p>Go to FUBER.co and click Register. </p>
                      <p><img src="http://fubar20130414.s3.amazonaws.com/login.PNG" width="128"> <img src="http://fubar20130414.s3.amazonaws.com/login3.PNG" alt="" width="128"></p>
                      <p>&nbsp;</p>
                    </div>
                    </div>
                    <div class="answer-con" id="what-part-of-my-facebook-profile-are-you-looking-at">
                    <h3>Can I register as Seller?</h3>
                    <div class="answer"> 
                      <p>Yes. It is easy to register as a seller. It is important to make sure you are able to keep your inventory accurate.</p>
                      <p><img src="http://fubar20130414.s3.amazonaws.com/login2.PNG" alt="" width="128"></p>
                    </div>
                    </div>
                    <div class="answer-con" id="i-included-a-few-friends-as-my-wingmen-when-i-signed-up-do-i-need-to-bring-those-friends">
                    <h3>Can I upload photos of the fruit?</h3>
                    <div class="answer"> 
                      <p>Yes it is easy to do so. We have written our application on JQueery Mobile and HTML5. You can directly take photos from your camera. </p>
                      <p><img src="http://fubar20130414.s3.amazonaws.com/photo.PNG" alt="" width="128"></p>
                    </div>
                    </div>
                    <div class="answer-con" id="when-do-i-find-out-who-i-m-going-to-meet-and-how-will-we-find-them">
                    <h3>How do you Manage Inventory?</h3>
                    <div class="answer"> 
                      <p>It is easy to manage to inventory. Just Follow the .</p>
                      <p><img src="http://fubar20130414.s3.amazonaws.com/inv.PNG" alt="" width="128"></p>
                      <p>&nbsp;</p>
                    </div>
                    </div>
                    <div class="answer-con" id="how-do-i-cancel-or-change-the-date-of-my-grouper">
                    <h3>
                    Is Fuber available in Spanish?
                    </h3>
                    <div class="answer"> 
                      <p>We use the Google translate API, and have a spanish version for our sellers. </p>
                      <p>&nbsp;</p>
                    </div>
                    </div>
                    <div class="answer-con" id="what-kind-of-bars-and-lounges-do-you-work-with">
                    <h3>How are prices determined?</h3>
                    <div class="answer"> 
                      <p>Fuber takes a small fee, and prices are determined by the market. </p>
                      <p><img src="http://fubar20130414.s3.amazonaws.com/deliver.PNG" alt="" width="128"></p>
                    </div>
                    </div>
                    <h3>&nbsp;</h3>
                    </div>
                    </div>
            </div>
        </div>

    </body>
</html>
