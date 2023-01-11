<?php

get_header();
?>
<div class="mui-row" id="main_content">
    <div class="mui-col-md-8 mui-col-md-offset-1">

        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();

                echo "<h2>" . get_the_title() . "</h2>";
                # thumbnail
                echo get_the_post_thumbnail();
                echo "songnuyen";

                #sanpham
                $san_pham = get_field('san_pham');
                $gia_tien = get_field('gia_tien');
                
                
                echo "<br>San pham: " . get_the_title($san_pham);
                echo "<br>Gia tien: " . number_format($gia_tien) . ' đ';
                # content
                echo get_the_content();
            }
        }

        ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php
get_footer();
