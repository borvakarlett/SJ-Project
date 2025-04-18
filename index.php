<?php
    include('_inc/partials/head.php');
?>
<body>
<div id="templatemo_wrapper">
    <div id="templatemo_left_column">
    
    <?php
        include('_inc/partials/header.php');
    ?>
        
        <div id="templatemo_sidebar">
        
        	<div class="sidebar_box">
            
                <h2>Design Trends</h2>
                        
                <div class="news_box">
                    <h3><a href="#">Morbi dapibus dolor sit amet metus suscipit iaculis</a></h3>
                    <p>Cras nisl eros, elementum eu, iaculis vitae, viverra ut, ligula. Pellentesque metus. Duis dolor.</p>
                </div>
                
                <div class="news_box">
                    <h3><a href="#">Donec a purus vel purus sollicitudin placerat</a></h3>
                    <p>Nunc at sem. Sed pellentesque placerat augue. Mauris pede nisl, placerat nec, lobortis vitae, dictum sed, neque.</p>
                </div>
                
                <div class="news_box">
                    <h3><a href="#">Duis nulla diam, posuere ac, varius id, ullamcorper sit amet, libero</a></h3>
                    <p>Nam sodales, pede vel dapibus lobortis, ipsum diam molestie risus, a vulputate risus nisl pulvinar lacus.</p>
                </div>
                
                <div class="news_box">
                    <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
                    <p>Nulla et nunc commodo ante ornare imperdiet. Donec nunc neque, pulvinar a, vestibulum eget, luctus id, orci. </p>
                </div>
            
            </div>
    
    	</div>
    	
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_slider">
        
     	<div id="one" class="contentslider">
            <div class="cs_wrapper">
                <div class="cs_slider">
                
                    <div class="cs_article">
                        <a href="#">
                        	<img src="images/article01.jpg" alt="Artist's interpretation of article headline" />
                        </a>
                        
                        <div class="text">
                            <h2><a href="#">Project One</a></h2>
                            
                            <p>
                            Hendrerit tincidunt vero vel eorum claritatem. Soluta legunt quod qui dolore.
                            </p>
                            
                            <a class="readmore" href="#">Read More</a>
                   		</div>
                	</div><!-- End cs_article -->
                    
                    <div class="cs_article">
                        <a href="#">
                        <img src="images/article02.jpg" alt="Artist's interpretation of article headline" />
                        </a>
                        
                        <div class="text">
                            <h2> <a href="#">Project Two</a></h2>
                            
                            <p>
							Lorem ipsum dolor sit ame, consectetur adipiscing elit. In tincidunt.
                            </p>
                            
                            <a class="readmore" href="#">Read More</a>
                   		</div>
                	</div><!-- End cs_article -->
                    
                    <div class="cs_article">
                        <a href="#">
                        <img src="images/article03.jpg" alt="Artist's interpretation of article headline" />
                        </a>
                        
                        <div class="text">
                            <h2> <a href="#">Project Three</a></h2>
                            
                            <p>
                            Hendrerit tincidunt vero vel eorum claritatem. Soluta legunt quod qui dolore.
                            </p>
                            
                            <a class="readmore" href="#">Read More</a>
                   		</div>
                	</div><!-- End cs_article -->
                    
                    <div class="cs_article">
                        <a href="#">
                        <img src="images/article04.jpg" alt="Artist's interpretation of article headline" />
                        </a>
                        
                        <div class="text">
                            <h2> <a href="#">Project Four</a></h2>
                            
                            <p>
                            Aliquam elit risus, volutpat quis, mattis ac, elementum eget, mauris.
                            </p>
                            
                            <a class="readmore" href="#">Read More</a>
                   		</div>
                	</div><!-- End cs_article -->
              
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
        
        <div class="post_section">
        
            <h2><a href="#">Free CSS Template</a></h2>
            
            <div class="post_content">
                
                May 24th in <a href="#">Web Template</a> by <a href="#">TemplateMo</a>
                
                <a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
              <p><a href="#">TemplateMo</a> provides high quality <a href="#">free css templates</a> for your personal or commercial websites. All website templates are  free to download, modify and apply for your websites without any restriction. Have fun!</p>
                    
              <a href="#" class="more">Continue reading...</a> | <a href="#" class="comment">Comments (124)</a>
            
            </div>

      </div>
                
        <div class="post_section">
        
            <h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
            
            <div class="post_content">
            
                May 24th in <a href="#">Web Template</a> by <a href="#">TemplateMo</a>
                
                <a href="#"><img src="images/templatemo_image_02.jpg" alt="image" /></a>
                
              <p>Ut nec vestibulum odio. Vivamus vitae nibh eu sem malesuada rutrum et sit amet magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent aliquam velit a magna sodales quis elementum ipsum auctor. Ut at metus leo, et dictum sem.</p>
                
              <a href="#">Continue reading...</a> | <a href="#">Comments (286)</a>

            </div>
        
      </div>   
    
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