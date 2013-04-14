<?php
if(!isset($_SESSION['loggedIn'])) {
    header("Location: index.php?error=User Not Logged In#login-page");
}
?>
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

        <!-- Inventory -->
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h3>Fuber</h3>
            </div>
            <div data-role="content">

            </div>
            <?php footer();?>
        </div>

        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h3>Fuber</h3>
            </div>
            <div data-role="content">

            </div>
            <?php footer();?>
        </div>

    </body>
</html>

<?php
function footer() {
?>
  <div data-role="tabbar" data-iconpos="top" data-theme="a" data-cid="tabbar1" class="codiqa-control ui-footer ui-footer-fixed ui-bar-a ui-navbar ui-mini" role="navigation">
    <ul class="ui-grid-b">
    
    <li class="ui-block-a">
        <a href="#page1" data-transition="fade" data-theme="a" data-icon="search" class="ui-btn ui-btn-inline ui-btn-icon-top ui-btn-up-a" data-corners="false" data-shadow="false" data-iconshadow="true" data-iconsize="18" data-wrapperels="span" data-iconpos="top" data-inline="true">
            <span class="ui-btn-inner"><span class="ui-btn-text">Inventory</span><span class="ui-icon ui-icon-search ui-icon-shadow ui-iconsize-18">&nbsp;</span></span></a></li>
    
    <li class="ui-block-b">
        <a href="#" data-transition="fade" data-theme="a" data-icon="check" class="ui-btn ui-btn-inline ui-btn-icon-top ui-btn-up-a" data-corners="false" data-shadow="false" data-iconshadow="true" data-iconsize="18" data-wrapperels="span" data-iconpos="top" data-inline="true">
            <span class="ui-btn-inner"><span class="ui-btn-text">Orders</span><span class="ui-icon ui-icon-check ui-icon-shadow ui-iconsize-18">&nbsp;</span></span></a></li>
    
    <li class="ui-block-c">
        <a href="#" data-transition="fade" data-theme="a" data-icon="delete" class="ui-btn ui-btn-inline ui-btn-icon-top ui-btn-up-a" data-corners="false" data-shadow="false" data-iconshadow="true" data-iconsize="18" data-wrapperels="span" data-iconpos="top" data-inline="true">
            <span class="ui-btn-inner"><span class="ui-btn-text">Logout</span><span class="ui-icon ui-icon-delete ui-icon-shadow ui-iconsize-18">&nbsp;</span></span></a></li>
    
    </ul>
  </div>
<?php
}

?>

