<?php get_header(); ?>
<div class="contenedor-libro">
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) the_post_thumbnail('large'); ?>
        <div class="contenido"><?php the_content(); ?></div>
        <p><strong>Autor:</strong> <?php echo get_post_meta(get_the_ID(), '_autor_libro', true); ?></p>
        <p><strong>Géneros:</strong> <?php the_terms(get_the_ID(), 'generos', '', ', '); ?></p>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>