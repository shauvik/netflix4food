<?php
include_once("common.php");

if(!is_loggedIn()) {
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
        <div data-role="page" id="inventory">
            <div data-theme="a" data-role="header">
                <h3>Fuber</h3>
            </div>
            <div data-role="content">
		      <?php
              $role = get_current_user_role();
              if($role == 'seller') {
              ?>
                <h2>
                    Add Inventory
                </h2>
                <form action="saveInventory.php" method="POST" data-ajax="false">
                    <div data-role="fieldcontain">
                        <label for="textinput1">
                            Item Name
                        </label>
                        <input name="name" id="textinput1" placeholder="" value="" type="text">
                    </div>
                    <div data-role="fieldcontain">
                        <label for="textinput2">
                            Quantity
                        </label>
                        <input name="quantity" id="textinput2" placeholder="" value="" type="text">
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-type="horizontal">
                            <legend>
                                Unit
                            </legend>
                            <input id="radio3" name="unit" value="lbs" type="radio">
                            <label for="radio3">
                                Lbs
                            </label>
                            <input id="radio4" name="unit" value="number" type="radio">
                            <label for="radio4">
                                Number
                            </label>
                            <input id="radio5" name="unit" value="boxes" type="radio">
                            <label for="radio5">
                                Boxes
                            </label>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-type="horizontal">
                            <legend>
                                Organic
                            </legend>
                            <input id="radio1" name="organic" value="1" type="radio">
                            <label for="radio1">
                                Yes
                            </label>
                            <input id="radio2" name="organic" value="-1" type="radio">
                            <label for="radio2">
                                No
                            </label>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <label for="textinput3">
                            Price in USD
                        </label>
                        <input name="price" id="textinput3" placeholder="" value="" type="text">
                    </div>
                    <div data-role="fieldcontain">
                        <label for="photo_control">
                            Photo (optional)
                        </label>
                        <input name="image" id="photo_control" placeholder="" value="" type="file" accept="image/*;capture=camera"/>
                    </div>
                    <input type="submit" value="Add Item to Inventory">
                </form>
              <?php
                } else if(role == 'buyer') {
                    echo "Buyer inventory listing";
                }
              ?>
            </div>
            <?php footer();?>
        </div>

        <!-- Orders -->
        <div data-role="page" id="orders">
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
        <a href="#inventory" data-transition="fade" data-theme="a" data-icon="search" class="ui-btn ui-btn-inline ui-btn-icon-top ui-btn-up-a" data-corners="false" data-shadow="false" data-iconshadow="true" data-iconsize="18" data-wrapperels="span" data-iconpos="top" data-inline="true">
            <span class="ui-btn-inner"><span class="ui-btn-text">Inventory</span><span class="ui-icon ui-icon-search ui-icon-shadow ui-iconsize-18">&nbsp;</span></span></a></li>
    
    <li class="ui-block-b">
        <a href="#orders" data-transition="fade" data-theme="a" data-icon="check" class="ui-btn ui-btn-inline ui-btn-icon-top ui-btn-up-a" data-corners="false" data-shadow="false" data-iconshadow="true" data-iconsize="18" data-wrapperels="span" data-iconpos="top" data-inline="true">
            <span class="ui-btn-inner"><span class="ui-btn-text">Orders</span><span class="ui-icon ui-icon-check ui-icon-shadow ui-iconsize-18">&nbsp;</span></span></a></li>
    
    <li class="ui-block-c">
        <a href="logout.php" data-ajax="false" data-transition="fade" data-theme="a" data-icon="delete" class="ui-btn ui-btn-inline ui-btn-icon-top ui-btn-up-a" data-corners="false" data-shadow="false" data-iconshadow="true" data-iconsize="18" data-wrapperels="span" data-iconpos="top" data-inline="true">
            <span class="ui-btn-inner"><span class="ui-btn-text">Logout</span><span class="ui-icon ui-icon-delete ui-icon-shadow ui-iconsize-18">&nbsp;</span></span></a></li>
    
    </ul>
  </div>
<?php
}

?>

