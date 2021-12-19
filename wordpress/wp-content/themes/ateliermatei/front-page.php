<?php get_header(); ?>

    <div class="container">
            <?php if(have_rows('section')): ?>
                <?php while( have_rows('section') ): the_row(); ?>
                            <?php if(get_row_layout() == 'textarea_with_image'): ?>
                                <?php get_template_part('template-parts/section', 'textarea-with-image') ?>
                            <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

<?php get_footer(); ?>