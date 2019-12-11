<?php get_header(); ?>
    <div id="banner">
        <h1>&lt;BLOG WEB/&gt;</h1>
        <h3>Add Blogs and Projects</h3>
    </div>

    <main>
        <a href="<?php echo site_url('/blog'); ?>">
            <h2 class="section-heading">All Blogs</h2>
        </a>

        <section>
        <?php 
            $args = array(
                'post-type' => 'post',
                'posts_per_page' => 2,
            );
            $blogposts = new WP_Query($args);
            while($blogposts->have_posts()){
                $blogposts->the_post();
            
        ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php echo the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 30); ?>    
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>
            <!-- To reset our query  -->
            <?php }
            wp_reset_query(); ?>
        </section>

        <a href="<?php echo site_url('/projects'); ?>">
        	<h2 class="section-heading">All Projects</h2>
    	</a>

        <section>
        <?php 
            $args = array(
                'post-type' => 'project',
                'posts_per_page' => 2,
            );
            $projects = new WP_Query($args);
            while($projects->have_posts()){
                $projects->the_post();
            
        ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php echo the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 30); ?>    
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>
            <!-- To reset our query  -->
            <?php }
            wp_reset_query(); ?>
        </section>

        <h2 class="section-heading">Source Code</h2>

        <section id="section-source">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum neque qui delectus ad dolor blanditiis perferendis praesentium
                consectetur aut sed provident obcaecati aspernatur perspiciatis, dolores nobis pariatur ipsum vel corrupti!
            </p>
            <a href="#" class="btn-readmore">GitHub Profile</a>
        </section>

    <?php get_footer(); ?>