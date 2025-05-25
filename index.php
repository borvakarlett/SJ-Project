<?php

    include('_inc/partials/head.php');

    //connecting to database
    $db = new Database();
    $pdo = $db->getConnection();
    //create instance for managing main page methods
    $mainPage = new Article($pdo);
    //method to get the last three articles
    $articles = $mainPage->getLastArticles();
    //method to get three random articles
    $randomArticles = $mainPage->getRandomArticles();
?>
<body>
<div id="templatemo_wrapper">
    <div id="templatemo_left_column">
    
    <?php
        //menu
        include('_inc/partials/header.php');
    ?>
    	
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_slider">
        
     	<div id="one" class="contentslider">
            <div class="cs_wrapper">
            <div class="cs_slider">
                <!--printing out random three articles in slider-->
                <?php foreach ($randomArticles as $randArticle):?>
                <div class="cs_article">
                    <a href="article.php?id=<?= $randArticle['id']?>">
                        <img src="images/film_image1.png" alt="<?=htmlspecialchars($article['title'])?>" />
                    </a>
                    <div class="text">
                            <h2><a href="article.php?id=<?= $randArticle['id']?>">
                                <?= htmlspecialchars($randArticle['title'])?>
                            </a></h2>
                            <!--strips content to 100 characters and prints ... afterwards-->
                            <p><?=htmlspecialchars(mb_strimwidth(strip_tags($randArticle['content']),0,100, '...'))?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div><!-- End cs_slider -->
            </div><!-- End cs_wrapper -->
        </div><!-- End contentslider -->

	<!-- Site JavaScript -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
	<script type="text/javascript">
			$(function() {
				$('#one').ContentSlider({
					width : '630px',
					height : '160px',
					speed : 800,
					easing : 'easeInOutBack'
				});
			});
	</script>
	<script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
	<script src="js/chili/recipes.js" type="text/javascript"></script>

        
        </div>   <!-- end of slider -->
        <!--printing articles with some overview-->  
        <?php foreach ($articles as $article):?>
            <div class="post_section">
                <h2><a href="article.php?id=<?= $article['id']?>">
                    <!--convert characters into safe ones that arent html-->
                     <?=htmlspecialchars($article['title'])?>
                </a></h2>

            <div class="post_content">
                <!--full month, day without zeroes, suffix, year, converted from text date to timestamp-->
                <?=date('F jS, Y', strtotime($article['created_at']))?>

                <a href="article.php?id=<?=$article['id']?>">
                    <img src="images/film_image2.jpg" alt="image"/>
                </a>
                <!--remove html chars and shorten the text with ...-->
                <p><?=htmlspecialchars(mb_strimwidth(strip_tags($article['content']),0,200,'...'))?></p>

        </div>
    </div>
        <?php endforeach; ?>
    
    </div> <!-- end of content -->

</div> <!-- end of templatemo_wrapper -->

<!--footer-->
<?php
    include('_inc/partials/footer.php');
?>
</div>
<!-- templatemo 185 paper blog -->
<!-- 
Paper Blog Template 
http://www.templatemo.com/preview/templatemo_185_paper_blog 
-->
</body>
</html>