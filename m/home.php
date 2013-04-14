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
            .success{
                color: green;
                font-weight: bold;
            }
            .homecontent{
                padding-bottom: 60px;
            }
            .thumb{
                max-width: 100px;
                max-height: 100px;
            }
            .table-stroke{
                width: 100%;
            }
            .table-stroke tbody td {
              border-top: 1px solid rgba(0, 0, 0, .05);
              border-bottom: 1px solid rgba(0, 0, 0, .05);
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

        <!-- Inventory -->
        <div data-role="page" id="inventory">
            <div data-theme="a" data-role="header">
                <h3>Fuber</h3>
            </div>
            <div data-role="content" class="homecontent">
		      <?php

               if(isset($_GET['msg'])){
                   echo "<div class=\"success\">{$_GET['msg']}</div>";
               }


                if(isset($_GET['error'])){
                    echo "<div class=\"error\">{$_GET['error']}</div>";
                }

              $role = get_current_user_role();
              if($role == 'seller') {
              ?>
                <h2>Current Inventory</h2>
                <table data-role="table" id="inv-table" data-mode="reflow" class="table-stroke">
                    <tr>
                        <td><img src="upload/tang.jpg" class="thumb"/></td>
                        <td><b>Tangerines</b>
                            <ul>
                                <li>Qty: 124 nos</li>
                                <li>Price: $30</li>
                            </ul>
                        </td>
                        <td><img src="images/del.png" /></td>
                    </tr>
                    <tr>
                        <td><img src="upload/mang.jpg" class="thumb" /></td>
                        <td><b>Mangoes</b>
                            <ul>
                                <li>Qty: 16 nos</li>
                                <li>Price: $18</li>
                            </ul>
                        </td>
                        <td><img src="images/del.png" /></td>
                    </tr>
                    <tr>
                        <td><img src="upload/pepper.jpg" class="thumb" /></td>
                        <td><b>Peppers</b>
                            <ul>
                                <li>Qty: 50 nos</li>
                                <li>Price: $18</li>
                            </ul>
                        </td>
                        <td><img src="images/del.png" /></td>
                    </tr>
                    <tr>
                        <td><img src="upload/watermellon.jpg" class="thumb" /></td>
                        <td><b>Watermellon</b>
                            <ul>
                                <li>Qty: 4 nos</li>
                                <li>Price: $3.60</li>
                            </ul>
                        </td>
                        <td><img src="images/del.png" /></td>
                    </tr>
                    <tr>
                        <td><img src="upload/pineapple.jpg" class="thumb" /></td>
                        <td><b>Pineapple</b>
                            <ul>
                                <li>Qty: 3 nos</li>
                                <li>Price: $2.40</li>
                            </ul>
                        </td>
                        <td><img src="images/del.png" /></td>
                    </tr>
                </table>

                <h2>Add To Inventory</h2>
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
                } else if($role == 'buyer') {
                    
              ?>
            <ul data-role="listview" data-inset="true" data-filter="true">
                <li data-filtertext="Tangerines Fruit" data-theme="c">
                    <a href="add.php?id=1" data-rel="dialog">
                        <img src="upload/tang.jpg" class="ui-li-thumb">
                        <h3 class="ui-li-heading">Oranges</h3>
                        <p class="ui-li-desc">
                            Citrus Fruit, Qty: 124 <br/>
                            Price: $0.5 for 3 (compared to $0.87 per lb at Publix)
                        </p>
                    </a>
                </li>
                <li data-filtertext="Mangoes Fruit" data-theme="c">
                    <a href="add.php?id=1" data-rel="dialog">
                        <img src="upload/mang.jpg" class="ui-li-thumb">
                        <h3 class="ui-li-heading">Mangoes</h3>
                        <p class="ui-li-desc">
                            Fruit, Qty: 18 <br/>
                            Price: $1.36 each (compared to $2 at Publix)
                        </p>
                    </a>
                </li>
                </li>
                <li data-filtertext="Peppers" data-theme="c">
                    <a href="add.php?id=1" data-rel="dialog">
                        <img src="upload/pepper.jpg" class="ui-li-thumb">
                        <h3 class="ui-li-heading">Peppers</h3>
                        <p class="ui-li-desc">
                            Vegetable, Qty: 50 <br/>
                            Price: $0.47 each (compared to $1.68 at Walmart)
                        </p>
                    </a>
                </li>
                <li data-filtertext="Watermellon" data-theme="c">
                    <a href="add.php?id=1" data-rel="dialog">
                        <img src="upload/watermellon.jpg" class="ui-li-thumb">
                        <h3 class="ui-li-heading">Watermellon</h3>
                        <p class="ui-li-desc">
                            Fruit, Qty: 4 <br/>
                            Price: $3.60 each (compared to $5.00 at Walmart)
                        </p>
                    </a>
                </li>
                <li data-filtertext="Pineapple" data-theme="c">
                    <a href="add.php?id=1" data-rel="dialog">
                        <img src="upload/pineapple.jpg" class="ui-li-thumb">
                        <h3 class="ui-li-heading">Pineapple</h3>
                        <p class="ui-li-desc">
                            Fruit, Qty: 4 <br/>
                            Price: $2.40 each (compared to $4.99 at Publix)
                        </p>
                    </a>
                </li>
            </ul>

            <?php


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
              <?php

               if(isset($_GET['msg'])){
                   echo "<div class=\"success\">{$_GET['msg']}</div>";
               }

              $role = get_current_user_role();
              if($role == 'seller') {
              ?>
                <h2>Orders for me</h2>


              <?php
                }  else if($role == 'buyer') {
              ?>
                <h2>My Orders</h2>  


              <?php
                }   
              ?>
            </div>
            <?php footer();?>
        </div>


        <!-- Place Order -->
        <div data-role="page" id="orderdetail">
            <div data-theme="a" data-role="header">
                <h3>Fuber</h3>
            </div>
            <div data-role="content">
              <?php

               if(isset($_GET['msg'])){
                   echo "<div class=\"success\">{$_GET['msg']}</div>";
               }

              $role = get_current_user_role();
              if($role == 'seller') {
              ?>
                <h2>Acknowledge Order</h2>


              <?php
                }  else if($role == 'buyer') {
              ?>
                <h2>Place Order</h2>  


              <?php
                }   
              ?>
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

