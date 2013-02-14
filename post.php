
<?php $theme->display('header'); ?>
    <div class="container">

    <div class="row">
   
   <div class="span11">
    
    <div class="row">
    			<?php foreach ($post as $post): ?>

    <div class="span8">
    <h1 class="post-title" itemprop="name">	<a href="<?php echo $post->permalink; ?>" itemprop="url"><?php echo $post->title_out; ?></a></h1> 
    <p><?php echo $post->content_out; ?> </p> 
      </div><!--end span8 -->
  
   <div class="span2">
   <ul>
   <li> <i class="icon-user icon-black"></i><span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"> <?php echo $post->author->displayname; ?></span></span></li>  
   <li><i class="icon-calendar icon-black"></i> <?php echo $post->pubdate->format( 'M jS, Y ' ); ?></li>
   <li><i class="icon-time icon-black"></i> <?php echo $post->pubdate->format( 'g:m a ' ); ?> </li>
   <li> <i class="icon-comment icon-black"></i><a href="#"> <a href="<?php echo $post->permalink; ?>#comments" class="comments" itemprop="discussionUrl"><?php echo $post->comments->moderated->count == 0 ? 'No Comments' : $post->comments->moderated->count . _n( 'Comment', 'Comments', $post->comments->moderated->count ); ?></a></li> 
   <?php if ( $user->loggedin ) { ?> | <a href="<?php URL::out( 'admin', 'page=publish&id=' . $post->id); ?>" title="Edit post"><li> <i class="icon-edit icon-black"></i> Edit</a></li> <?php } ?>
   </ul>
   </div><!--end span2 -->
      <?php endforeach; ?></div><!--end span8 -->
	
 
    </div><!--end row -->
    
    </div> <!--end span11 -->

      <footer>
            <!-- Example row of columns -->
      <div class="row">
        <div class="span2">
          <h2>Pages</h2>
    <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li> </ul>
        </div>
        <div class="span4">
          <h2>Info</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
       </div>
        <div class="span4">
          <h2>Twitter</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>
      </div>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=" <?php echo $theme->get_url( 'assets/js/jquery.js' ); ?>"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
