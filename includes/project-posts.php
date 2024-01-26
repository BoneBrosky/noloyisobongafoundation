<?php
$args = array(
    'post_type' => 'projects',
    'posts_per_page' => 5,
    'nopaging' => true,
    'paged' => get_query_var('page')
);

$posts = new WP_Query($args);
?>
<div class="relative overflow-hidden  [&_.wp-block-column]:p-5 [&_.wp-block-column]:lg:p-10 [&_.wp-block-cover_.wp-block-button]:w-auto [&_.wp-block-group]:p-0 [&_.w-half]:w-full [&_.w-half]:lg:w-1/2">
    <div class="wp-block-query my-0 is-layout-flow wp-block-query-is-layout-flow">
        <ul class="columns-3 wp-block-post-template is-layout-grid wp-container-core-post-template-layout-1 wp-block-post-template-is-layout-grid">
            <?php
            if ($posts->have_posts()) :
                while ($posts->have_posts()) : $posts->the_post();
            ?>
                    <li class="wp-block-post post-858 projects type-projects status-publish has-post-thumbnail hentry category-branding">
                        <figure class="wp-block-post-featured-image">
                            <img decoding="async" width="1024" height="542" src="<?php the_post_thumbnail_url() ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" style="object-fit:cover;" sizes="(max-width: 1024px) 100vw, 1024px">
                        </figure>

                        <div class="wp-block-group project-post-content is-layout-constrained wp-block-group-is-layout-constrained">
                            <div class="wp-block-group__inner-container">
                                <div class="taxonomy-category wp-block-post-terms has-medium-font-size"><?php the_category() ?></div>

                                <h1 class="wp-block-post-title has-large-font-size"><a href="<?php the_permalink() ?>" target="_self">6th Annual Ebueleni</a></h1>

                                <div class="wp-block-post-date has-small-font-size"><?php the_date() ?></div>

                                <div class="wp-block-group read-more-btn is-layout-constrained wp-block-group-is-layout-constrained">
                                    <div class="wp-block-group__inner-container"><a class="wp-block-read-more has-small-font-size" href="<?php the_permalink() ?>" target="_self">Read more<span class="screen-reader-text">: 6th Annual Ebueleni</span></a></div>
                                </div>
                            </div>
                        </div>
                    </li>
            <?php
                endwhile;
            endif; ?>
        </ul>
    </div>
</div>