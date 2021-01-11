<?php
/**
 * This file is the template for a normal page
 * It's used if no template matches the page currently on
 */
?>

<?php get_header(); ?>

<article>
    <?php
    $written = date_create(site_meta('written', false));
    $written_formatted = date_format($written, 'd M Y');
    ?>
     <div class="written">
         <?php echo $written_formatted; ?>
     </div>
    <?php content(); ?>
</article>

<?php get_footer();
