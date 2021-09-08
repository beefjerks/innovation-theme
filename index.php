<?php get_header(); ?>

<div class="main">      
      <div class="container">
      
        <img src="<?php echo get_template_directory_uri()?>/images/cloud.svg" height="128" width="196"/>

        <h2>The Innovation Cloud Conference</h2>
        <p>Connect with the best minds across a wide range of industries to share ideas and brainstorm new solutions to challenging problems.</p>
        <p>Hear industry leaders talk about what worked (and what didn't) so that you can save time on your most challenging projects.</p>
         <p>Learn about the latest research and technologies that you can use immediately to invent the future.</p>
      </div>
    </div>
    <div class="jumbotron">
      <div class="container"> 
      
      <h1>
          <?php _e("stay connected", "My theme"); ?>
        </h1>
        <p>
          <?php _e("Receive weekly insights from industry insiders."); ?>
        </p>
        <a class="btn" href="">Join</a>
      </div>
    </div>

<?php get_footer();?>