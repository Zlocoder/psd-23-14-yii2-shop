<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use site\assets\SiteAsset;

SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="templatemo_body_wrapper">
    <div id="templatemo_wrapper">
        <div id="templatemo_header">
            <div id="site_title"><h1><a href="#">Online Shoes Store</a></h1></div>
            <div id="header_right">
                <p>
                    <a href="#">My Account</a> | <a href="#">My Wishlist</a> | <a href="#">My Cart</a> | <a href="#">Checkout</a> | <a href="#">Log In</a></p>
                <p>
                    Shopping Cart: <strong>3 items</strong> ( <a href="shoppingcart.html">Show Cart</a> )
                </p>
            </div>
            <div class="cleaner"></div>
        </div> <!-- END of templatemo_header -->


        <div id="templatemo_menubar">
            <div id="top_nav" class="ddsmoothmenu">
                <ul>
                    <li><a href="index.html" class="selected">Home</a></li>
                    <li><a href=<?= \yii\helpers\Url::to(['catalog/products'])?>>Products</a>
                        <ul>
                            <li><a href="#submenu1">Sub menu 1</a></li>
                            <li><a href="#submenu2">Sub menu 2</a></li>
                            <li><a href="#submenu3">Sub menu 3</a></li>
                            <li><a href="#submenu4">Sub menu 4</a></li>
                            <li><a href="#submenu5">Sub menu 5</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a>
                        <ul>
                            <li><a href="#submenu1">Sub menu 1</a></li>
                            <li><a href="#submenu2">Sub menu 2</a></li>
                            <li><a href="#submenu3">Sub menu 3</a></li>
                        </ul>
                    </li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                <br style="clear: left" />
            </div> <!-- end of ddsmoothmenu -->
            <div id="templatemo_search">
                <form action="#" method="get">
                    <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                    <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
        </div> <!-- END of templatemo_menubar -->
        
        <div id="templatemo_main">
            <div id="sidebar" class="float_l">
                <div class="sidebar_box"><span class="bottom"></span>
                    <h3>Categories</h3>
                    <div class="content">
                        <ul class="sidebar_list">
                           <?php foreach ($this->params['categories'] as $category) {?>
                              <li><a href="<?= yii\helpers\Url::to(['catalog/category','id' => $category->id])?>"><?= $category->name ?></a> </li>
                           <?php }?>
                       </ul>
                    </div>
                </div>
                <div class="sidebar_box"><span class="bottom"></span>
                    <h3>Bestsellers </h3>
                    <div class="content">
                        <div class="bs_box">
                            <a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
                            <h4><a href="#">Donec nunc nisl</a></h4>
                            <p class="price">$10</p>
                            <div class="cleaner"></div>
                        </div>
                        <div class="bs_box">
                            <a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
                            <h4><a href="#">Lorem ipsum dolor sit</a></h4>
                            <p class="price">$12</p>
                            <div class="cleaner"></div>
                        </div>
                        <div class="bs_box">
                            <a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
                            <h4><a href="#">Phasellus ut dui</a></h4>
                            <p class="price">$20</p>
                            <div class="cleaner"></div>
                        </div>
                        <div class="bs_box">
                            <a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
                            <h4><a href="#">Vestibulum ante</a></h4>
                            <p class="price">$8</p>
                            <div class="cleaner"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="content" class="float_r">
                <?= $content ?>
            </div>

            <div class="cleaner"></div>
        </div>

        <div id="templatemo_footer">
            <p><a href="#">Home</a> | <a href="#">Products</a> | <a href="#">About</a> | <a href="#">FAQs</a> | <a href="#">Checkout</a> | <a href="#">Contact Us</a>
            </p>

            Copyright © 2072 <a href="#">Your Company Name</a> <!-- Credit: www.templatemo.com -->
        </div> <!-- END of templatemo_footer -->
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
