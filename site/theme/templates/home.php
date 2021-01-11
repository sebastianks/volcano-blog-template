<?php
/**
  * Title: My new blog
  * Description: This is my new blog powered by Volcano
  */
?>

<?php get_header(); ?>
    <div class="welcome">
        <h2>Hello!</h2>
        <p>This is your new blog. You can edit this page in <code>`site/theme/templates/home.php`</code> or edit the post you see below in <code>`site/posts/hello-world.md`</code>.</p>
    </div>
    <div class="content">
        <ul>
            <?php foreach (get_posts(false) as $post) {
                $title = site_meta('title', false, $post);
                $link = get_post_link($post);
                $written = date_create(site_meta('written', false, $post));
                $written_formatted = date_format($written, 'd M Y');

                // prettier-ignore
                echo <<<EOL
                    <li>
                        <div>
                            <span class="written">$written_formatted</span>
                        </div>
                        <a href="$link">$title</a>
                    </li>
                EOL;
            } ?>
        </ul>
    </div>
<?php get_footer();
