<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/index.css"); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/jcarousel.js", CClientScript::POS_END); ?>

<div class="container full-screen-banner">
    <div class="row banner" style="padding-right:20px; padding-left:20px;">
        <div class="col-lg-9 main-banner-img">
            <div id="myCarousel3" class="car-ousal slide">
                <div class="carousel-inner thumbnail">
                    <div class="item active">
                   		<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner-2.jpg" alt="Islamic Books" />
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner-4.jpg" alt="Islamic Apps" />
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner-9.jpg" alt="25+ Multi Lingual Translation of Holy Quran" />
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner-1.jpg" alt="Top Selling and Popular Islamic Books" />
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner-5.jpg" alt="Presence in 35 Countries" />
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner-6.jpg" alt="Endorsement by Dr. Zakir Naik" />
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner-3.jpg" alt="Presenting Books Written by yhe Most Serious Islamic Scholars" />
                    </div>
                </div>
                <a class="left carousel-control slider-left left-slider-arrow-bg" href="#myCarousel3" data-slide="prev"></a>
                <a class="right carousel-control slider-right right-slider-arrow-bg" href="#myCarousel3" data-slide="next"></a>
            </div>
        </div>
        <div class="col-lg-3 best-children-bg-part">

            <?php $this->renderPartial('//default/_kids_div'); ?>

        </div>
    </div> 
</div>
<div class="container responsive-banner">
    <div class="row" style="padding-right:20px; padding-left:20px;">
        <div class="col-lg-9 main-banner-img">
            <div id="myCarousel10" class="car-ousal slide">
                <div class="carousel-inner thumbnail">
                    <div class="item active">
                   		<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/responsive-1.jpg" alt="Islamic Books" class="img-responsive" />
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/responsive-2.jpg" alt="Islamic Apps" class="img-responsive" />
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/responsive-3.jpg" alt="Islamic Apps" class="img-responsive" />
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/responsive-4.jpg" alt="Islamic Apps" class="img-responsive" />
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/responsive-5.jpg" alt="Islamic Apps" class="img-responsive" />
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/responsive-6.jpg" alt="Islamic Apps" class="img-responsive" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 best-children-bg-part">

            <?php $this->renderPartial('//default/_kids_div'); ?>

        </div>
    </div> 
</div><?php
//finding only parent categories
$criteria = new CDbCriteria();
$criteria->limit = 2;
$criteria->select = "id,name";
$criteria->condition = "parent_category_id =:parent";
$criteria->params = array("parent" => 0);
$categories = Category::model()->findAll($criteria);
?>


<div class="container" style="padding-top: 20px; background-color:#FFF;">
    <div class="row" style="padding-right:20px; padding-left:20px;">
        <div class="col-lg-9 main-world-content">
            <div class="world-content">
                <a href="<?php echo $this->createUrl("/web/default/aboutUs", array("target" => "introduction")); ?>">
                    <?php echo $this->h1_tag; ?>
                    <p class="p-color-a"><span>Darussalam Publishers is a multilingual International Islamic publishing house serving Islam in 35 countries for 25 years...</span> <a href="<?php echo $this->createUrl("/web/default/aboutUs", array("target" => "introduction")); ?>" >READ MORE</p></a>
                </a>
            </div>
            <div class="detail-main-part hidden-detail-main-part">
                <div>
                    <div>
                        <ul style="top: 0px;">

                            <li class="col-lg-4 slider-width">
                                <h2 style="text-align:center;">Apps</h2>
                                <div class="apps-data">
                                    <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/apps-img.png', "Islamic Apps for android", array('title' => "Apps", 'alt' => "Islamic Apps for android")), $this->createUrl("/web/product/products", array("slug" => $categories[0]->slug)), array('data-ajax' => "false", "id" => $categories[0]->slug)); ?>
                                    <p>125,000+ App Downloads Biggest Collection of Interactive Learning and Kids Apps</p>
                                </div>
                            </li>
                            <li class="col-lg-4 slider-width">
                                <h2 style="text-align:center;">Books</h2>
                                <div class="apps-data">
                                    <?php
                                    echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/books-img.png', "Top Islamic Books", array('title' => "Books", 'alt' => "Top Islamic Books")), $this->createUrl("/web/product/products", array("slug" => 'books')), array(
                                        'data-ajax' => "false"));
                                    ?>
                                    <p>1400+ Books Published around the Globe in English, Arabic and twenty six other languages</p>
                                </div>
                            </li>
                            <li class="col-lg-4 slider-width">
                                <h2 style="text-align:center;">E-Books</h2>
                                <div class="apps-data apps-border-remove">
                                    <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/ebooks-img.png', "Islamic Ebooks", array('title' => "E-books", 'alt' => "Islamic Ebooks")), $this->createUrl("/web/product/products", array("slug" => $categories[1]->slug)), array('data-ajax' => "false", "id" => $categories[1]->slug)); ?>
                                    <p>100+ E-Books on Amazon Kindle and iBooks Stores on Hadith, Fiqh and History of Islam</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 best-app-slider-part">
            <?php $this->renderPartial('//default/_bestAppSlider'); ?>
        </div>
    </div>
</div>
<div class="container" style="padding-top: 20px; background-color:#FFF;">
    <div class="row" style="padding-right:20px; padding-left:20px;">
        <div class="col-lg-12 detail-main-part responsive-detail-main-part">
            <div id="myCarousel10" class="car-ousal slide">
                <div class="carousel-inner">
                    <div class="item active slider-response">
                    	<div class="apps-data">
                       		<h2 style="text-align:center;">Apps</h2>
                          	<p>125,000+ App Downloads Biggest Collection of Interactive Learning and Kids Apps</p>
                    	</div>
                  		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/apps-img.png', "Islamic Apps for android", array('title' => "Apps", 'alt' => "Islamic Apps for android")), $this->createUrl("/web/product/products", array("slug" => $categories[0]->slug)), array('data-ajax' => "false", "id" => $categories[0]->slug)); ?>
                  	</div>
                    <div class="item slider-response">
                    	<div class="apps-data">
                    		<h2 style="text-align:center;">Books</h2>
                          	<p>1400+ Books Published around the Globe in English, Arabic and twenty six other languages</p>
                    	</div>
                    	<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/books-img.png', "Top Islamic Books", array('title' => "Books", 'alt' => "Top Islamic Books")), $this->createUrl("/web/product/products", array("slug" => 'books')), array('data-ajax' => "false")); ?>
                	</div>
                    <div class="item slider-response">
                    	<div class="apps-data">
                        	<h2 style="text-align:center;">E-Books</h2>
                          	<p>100+ E-Books on Amazon Kindle and iBooks Stores on Hadith, Fiqh and History of Islam</p>
                      	</div>
						<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/ebooks-img.png', "Islamic Ebooks", array('title' => "E-books", 'alt' => "Islamic Ebooks")), $this->createUrl("/web/product/products", array("slug" => $categories[1]->slug)), array('data-ajax' => "false", "id" => $categories[1]->slug)); ?>
                   	</div>
                </div>
            </div>
        </div>
    </div> 
</div>


<div class="container">
    <div class="row" style="padding-right:20px; padding-left:20px; background-color:#FFF;">
        <div class="col-lg-9 nav-about-tabs-respond">
            <div style="border: 1px solid #c9c9c9; float:left; height:441px; width:100%; padding-bottom:10px;">
                <div class="nav-about-tabs" style="height:411px;">
                    <ul id="myTab arrowBar2" class="nav nav-tabs nav-all-tab-of-tab" style="max-height:70px !important;">
                        <!--<li class="active light-blue"><span></span><a data-toggle="tab" href="#top-apps">Top App</a></li>
                        <li class="light-yellow"><span></span><a data-toggle="tab" href="#top-books">Top Book</a></li>
                        <li class="light-red"><span></span><a data-toggle="tab" href="#blessings">Blessings of Ramadan</a></li>-->
                        <?php                      
                        $i = 0;
                        foreach ($news as $data) {
                            ?>
                            <li class="<?php echo $data->sprite; ?> <?php echo $i == 0 ? "active" : ""; ?>"><span></span>
                                <a data-toggle="tab" href="<?php echo "#" . str_replace(" ", "-", strtolower($data->title)); ?>">
                                    <?php echo $data->title; ?></a></li>                        
                                    <?php
                            $i++;
                        }
                        ?>
                    </ul>
                    <div class="form-a-color">
                    </div>
                    <div class="form-a-color-2">
                    </div>
                    <div class="tab-content about-tab-content-part">
                        <?php                       
                            $j=0;
                            
                            foreach ($news as $data) {                                                                                                
                                ?>                        
                                <div class="tab-pane fade <?php echo $j==0 ? 'in active':''; ?>" id="<?php echo str_replace(" ", "-", strtolower($data->title)); ?>">
                                    <div class="about-tab-content">
                                        <div class="left-about-tab">
                                            <h6><?php echo $data->heading; ?></h6>
                                            <p><?php echo $data->long_description; ?></p>
                                            <?php
                                                if(isset($data->product->productPlatforms)){                                                    
                                                    foreach($data->product->productPlatforms as $platform)
                                                        {                                                        
                                                            echo CHtml::link($platform->plateform->show_image['image'],$platform->link,array("target"=>"blank"));
                                                        }
                                                }?>
                            

                                        </div>
                                        <div class="right-about-tab">
                                            <div class="quranic-qaida-pro-bg">
                                                <img src="<?php echo $data->show_image['link']; ?>" alt="<?php echo $data->title;?>" class="img-responsive" />                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                            $j++;
                            }?>
                        <!--<div class="tab-pane fade in active" id="top-apps">
                      		<div class="about-tab-content">
                         		<div class="left-about-tab">
                                	<h6>Qurani Qaida</h6>
                                    <p class="with-options">With options to personalize, record, and give quizzes, kids can quickly start learning the correct pronunciation for reciting The Holy Quran. Your Kids will be learning while they play! With new and improved audio recordings it will be just as if your child is receiving a real Quran Lesson. You can even use the new My Qaida feature to set lessons for different users, so that each user has their own Qaida. My Qaida allows multiple users so that they can learn how to read the Quran at their own pace.</p>
                                    <p class="without-options">With options to personalize, record, and give quizzes, kids can quickly start learning the correct pronunciation for reciting The Holy Quran.</p>
                                    <a href="https://play.google.com/store/apps/details?id=com.darussalam.quraniqaida"><img src="<?php //echo Yii::app()->theme->baseUrl; ?>/images/google-play.png" alt="Google Play" /></a>
                                    <a href="https://itunes.apple.com/pk/app/qurani-qaida/id722784690?mt=8"><img src="<?php //echo Yii::app()->theme->baseUrl; ?>/images/app-store.png" alt="App Store" /></a>
                               	</div>
                               	<div class="right-about-tab">
                                	<div class="quranic-qaida-pro-bg">
                                    	<img src="<?php //echo Yii::app()->theme->baseUrl; ?>/images/qq-img.png" alt="Qurani Qaida" class="img-responsive" />
                                    </div>
                               	</div>
                          	</div>
                        </div>
                        <div class="tab-pane fade" id="top-books">
                        	<div class="about-tab-content">
                         		<div class="left-about-tab">
                                	<h6>Fortress of Muslim</h6>
                                    <p class="with-options">This book is an abridgment of my earlier work entitled, Adh-Dhikr wad-Du'a wal-'llaj bir-Ruqyah mina'-Kitab was-Sunnah. In order to make it small and easily portable, I have chosen only the section on words of remembrance for this abridgment. To achieve this, I only mentioned the text of the words of remembrance instead of the entire Hadith.</p>
                                    <p class="without-options">This book is an abridgment of my earlier work entitled, Adh-Dhikr wad-Du'a wal-'llaj bir-Ruqyah mina'-Kitab was-Sunnah.</p>
                                    <a href="http://www.amazon.co.uk/Fortress-Muslim-Said-Wahf-Al-Qahtani/dp/B003ZBX198"><img src="<?php //echo Yii::app()->theme->baseUrl; ?>/images/amazon-icon.png" alt="Amazon" /></a>
                                    <a href="http://www.barnesandnoble.com/w/fortress-of-the-muslim-darussalam-publishers/1118715506?ean=2940148119159"><img src="<?php //echo Yii::app()->theme->baseUrl; ?>/images/nook-icon.png" alt="Nook" /></a>
                               	</div>
                               	<div class="right-about-tab">
                                	<div class="fortress-of-muslim-bg">
                                    	<img src="<?php //echo Yii::app()->theme->baseUrl; ?>/images/fortress-new-img.png" alt="Fortress of Muslim" class="img-responsive" />
                                    </div>
                               	</div>
                          	</div>
                        </div>
                        <div class="tab-pane fade" id="blessings">
                        <div class="about-tab-content">
                         		<div class="left-about-tab">
                                	<h6>Ramadan &amp; Its Blessings</h6>
                                    <p class="with-options">Ramadan is just a few days away. With less than a month before this month of blessings, Darussalam is all geared up to bring the finest books. e-books and mobile apps to all its readers/users. <br />Behold while we come up with our new digital products and keep visiting for all the latest updates before and during the Holy month of Ramadan.</p>
                                    <p class="without-options">Ramadan is just a few days away. With less than a month before this month of blessings, Darussalam is all geared up to bring the finest books. e-books and mobile apps to all its readers/users.</p>
                                    <!--
                                    <a href="javascript:void(0)"><img src="<?php //echo Yii::app()->theme->baseUrl; ?>/images/google-play.png" alt="Google Play" /></a>
                                    <a href="javascript:void(0)"><img src="<?php //echo Yii::app()->theme->baseUrl; ?>/images/app-store.png" alt="App Store" /></a>
                                    
                               	</div>
                               	<div class="right-about-tab">
                                	<div class="ramadan-blessings-bg">
                                        <img src="<?php //echo Yii::app()->theme->baseUrl; ?>/images/ramadan-new-img.png" alt="Qurani Qaida" class="img-responsive" />
                                    </div>
                               	</div>
                          	</div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 main-all-nav-tabs-all">
            <div class="nav-all-tabs">
                <ul id="myTab" class="nav nav-tabs social-set-tabs">
                    <li class="active"><a href="#home" id="fb-tab-btn" data-toggle="tab">facebook</a></li>
                    <li><a href="#profile" id="twitter-tab-btn" data-toggle="tab">twitter</a></li>
                    <li><a href="#g-plus"  id="gplus-tab-btn" data-toggle="tab">Gplus</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane tab-pane-2 fade in active" id="home">
                        <!--**********************THis the div in which facebook feeds will be shown*****************************************-->
                        <div class="modalfb"><!-- Place at bottom of page --></div>
                        <div id="facebook_feeds">

                        </div>
                    </div>

                    <!--****************** Ending of Facebook feeds *****************************************-->
                    <div class="tab-pane tab-pane-2 fade" id="profile">
                        <!--*******************************THis the div in which twitter feeds will be shown*****************************************-->       
                        <div class="modalfb"><!-- Place at bottom of page --></div>
                        <div id="twitter_feeds">

                        </div>
                    </div>
                    <!--******************************************End Of Twitter Feeds******************************************************************-->         
                    <div class="tab-pane tab-pane-2 fade" id="g-plus">
                        <!--******************************************Google Plus Feeds ******************************************************************-->
                        <div class="modalfb"><!-- Place at bottom of page --></div>
                        <div id="google_feeds">

                        </div>
                    </div>

                    <!--****************************************** End Of Google Plus Feeds ******************************************************************-->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding-top: 10px; padding-bottom:10px; background-color:#FFF;">
    <div class="row" style="padding-right:20px; padding-left:20px;">
        <div class="col-lg-12">
            <div class="featured-books">
            	<div class="col-lg-5 featured-books-sec">
                    <div class="featured-books-content">
                        <section>Featured E-Books</section>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="featured-books-images">
                        <div id="myCarouse4" class="slide carousel-fade">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="<?php echo $this->createUrl('/web/product/products', array('product' => 'e-books', 'slugdetail' => "the-sealed-nectar--biography-of-prophet-muhammad-34")); ?>" ><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/sealed-nectar-price.png" class="img-responsive" alt="The Sealed Nectar Biography of Prophet Muhammad" title="The Sealed Nectar Biography of Prophet Muhammad" /></a>
                             	</div>
                                <div class="item">
                                    <a href="<?php echo $this->createUrl('/web/product/products', array('product' => 'e-books', 'slugdetail' => "200-golden-hadiths-32")); ?>" ><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/parents-price.png" class="img-responsive" alt="200 Golden Hadiths" title="200 Golden Hadiths" /></a>
                             	</div>
                                <div class="item">
                                    <a href="<?php echo $this->createUrl('/web/product/products', array('product' => 'e-books', 'slugdetail' => "200-golden-hadiths-32")); ?>" ><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/hajj-price.png" class="img-responsive" alt="200 Golden Hadiths" title="200 Golden Hadiths" /></a>
                             	</div>
                            </div>
                        </div>
                    </div>
              	</div>
            </div>
        </div>
    </div>
</div>
<div class="container quick-fact-response">
            <div class="row" style="padding-right:20px; padding-left:20px; background-color:#FFF;">
                <div class="col-lg-12">
                    <div class="quick-facts">
                        <p>Quick Facts</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="myCarousel11" class="car-ousal slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="serving-islam">
                                    <div class="serving-islam-content">
                                        <article>Serving</article>
                                        <section>Islam in</section>
                                        <p>35 countries</p>
                                    </div>
            
                                    <span class="serving-islam-img"></span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="books-published">
                                    <div class="serving-islam-content">
                                        <article>1400+</article>
                                        <section>Books</section>
                                        <p>Published</p>
                                    </div>
                                    <span class="book-islam-img"></span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="apps-download">
                                    <div class="serving-islam-content">
                                        <article>125,000+</article>
                                        <section>App</section>
                                        <p>Downloads</p>
                                    </div>
                                    <span class="download-islam-img"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
Yii::app()->clientScript->registerScript('click_categoriesas', "
       href=window.location.href;
    

      str=href.split('#');
     
    str=str[0];
   str=str.split('/');
   index=str.length;
    
    if(str[index-2]=='newsevents'){
    $('#'+str[index-1]).click();
             }   
        ", CClientScript::POS_READY);
?>
<?php
Yii::app()->clientScript->registerScript('click_social_tabs', "
          //making tabs enable for calls
          jQuery(function(){
                jQuery('#twitter-tab-btn,#gplus-tab-btn').click(function() {
                   
                    if (jQuery(this).attr('href') == '#profile') {
                        if (jQuery.trim(jQuery('#twitter_feeds').html()) == '') {
                            dtech_app.updateFacebookFeeds('" . $this->createUrl('/web/default/socialFeeds') . "', 'twitter_feeds');
                        }

                    }
                    else if (jQuery(this).attr('href') == '#g-plus') {

                        if (jQuery.trim(jQuery('#google_feeds').html()) == '') {

                             dtech_app.updateFacebookFeeds('" . $this->createUrl('/web/default/googleFeeds') . "', 'google_feeds');
                        }
                    }
                })              
            })
        ", CClientScript::POS_END);
?>
<?php
Yii::app()->clientScript->registerScript('load_faceebok_deeds', "
         dtech_app.updateFacebookFeeds('" . $this->createUrl("/web/default/getFacebookFeeds") . "', 'facebook_feeds', 'fb_page_pk')      
        ", CClientScript::POS_LOAD);
?>



<script type="text/javascript">


                                        jQuery(function() {


                                            jQuery('#ca-container').contentcarousel({
                                                // speed for the sliding animation
                                                sliderSpeed: 1500,
                                                // easing for the sliding animation
                                                sliderEasing: 'easeOutExpo',
                                                // speed for the item animation (open / close)
                                                itemSpeed: 1500,
                                                // easing for the item animation (open / close)
                                                itemEasing: 'easeOutExpo',
                                                // number of items to scroll at a time
                                                scroll: 1
                                            });
                                            jQuery('#ca-container2').contentcarousel({
                                                // speed for the sliding animation
                                                sliderSpeed: 1500,
                                                // easing for the sliding animation
                                                sliderEasing: 'easeOutExpo',
                                                // speed for the item animation (open / close)
                                                itemSpeed: 1500,
                                                // easing for the item animation (open / close). easeInExpo
                                                itemEasing: 'easeOutExpo',
                                                // number of items to scroll at a time
                                                scroll: 1
                                            });

                                            var int = setInterval("jQuery('.ca-nav-next').trigger('click');", 50000);

                                            jQuery('.ca-item').hover(function() {
                                                clearInterval(int);
                                            }, function() {
                                                int = setInterval("jQuery('.ca-nav-next').trigger('click');", 50000);
                                            });

                                        });





</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        var int = setInterval("jQuery('.jcarousel-control-next').trigger('click');", 5000);

        jQuery('li').hover(function() {
            clearInterval(int);
        }, function() {
            int = setInterval("jQuery('.jcarousel-control-next').trigger('click');", 5000);
        });

        jQuery('ul li.AB2rotate[data-toggle="tab"]').on('shown.bs.tab', function(e) {

            jQuery(e.target).addClass("active");
            jQuery(e.relatedTarget).removeClass("active");
        })

    });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#myCarouse4').carousel({
      interval: 4000
    })
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#myCarousel10').carousel({
      interval: 4000
    })
  });
</script>
<script>
jQuery(function() {
   jQuery('#myTab li').click(function(){
	    jQuery('#myTab li').removeClass("active");
    	jQuery(this).addClass("active");
	})
});
</script>
<script src="//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
<script>
jQuery(document).ready(function() {
   jQuery(".carousel-inner").swiperight(function() {
       jQuery(this).parent().carousel('prev');
   });
   jQuery(".carousel-inner").swipeleft(function() {
       jQuery(this).parent().carousel('next');
   });
});
</script>

<!-- Place this tag after the last widget tag. -->

