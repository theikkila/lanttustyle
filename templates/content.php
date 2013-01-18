<?php if (!have_posts()) : ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p>Sori ei yhtään hakutulosta!</p>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
<!-- blog-item -->
              <div class="row blog-item" id="post-<?php the_ID(); ?>">
                <div class="span8">
                  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  <div class="post_date"><?php get_template_part('templates/entry-meta'); ?></div>
                  <p><?php the_excerpt(); ?></p>
                </div>
              </div>
<!-- /blog-item -->
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav id="post-nav">
    <ul class="pager">
      <?php if (get_next_posts_link()) : ?>
        <li class="previous"><?php next_posts_link('&larr; Vanhemmat kirjoitukset'); ?></li>
      <?php else: ?>
        <li class="previous disabled"><a>&larr; Vanhemmat kirjoitukset</a></li>
      <?php endif; ?>
      <?php if (get_previous_posts_link()) : ?>
        <li class="next"><?php previous_posts_link("Uudemmat kirjoitukset &rarr;"); ?></li>
      <?php else: ?>
        <li class="next disabled"><a>Uudemmat kirjoitukset &rarr;</a></li>
      <?php endif; ?>
    </ul>
  </nav>
<?php endif; ?>
