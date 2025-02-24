<div id="sidebar">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <div class="widget">
            <h3>Recent News</h3>
            <ul>
                <?php
                $recent_posts = wp_get_recent_posts(array('numberposts' => 5));
                foreach ($recent_posts as $post) {
                    echo '<li><a href="' . get_permalink($post['ID']) . '">' . $post['post_title'] . '</a></li>';
                }
                ?>
            </ul>
        </div>
    <?php endif; ?>
</div>