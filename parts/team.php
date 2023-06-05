<div class="bod-direcotor no-image">
    <?php
    {
        ?>
        <figure>
            <?php the_post_thumbnail();
            $post = get_post();
            ?>
            <a href="<?php echo get_permalink() ?>" class="open-detail <?php  echo $post->ID; // get_the_ID(); ?>"></a>
        </figure>
        <?php
    }
    ?>
    <h1><?php the_title() ?></h1>
    <p><?php echo rwmb_meta( 'team_member-ges' ); ?></p>
</div>