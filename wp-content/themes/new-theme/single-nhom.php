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
                $ton_quy = get_field('ton_quy');
                $chu_quy = get_field('chu_quy');
                $danh_sach_thanh_vien = get_field('danh_sach_thanh_vien');
                
                
                echo "Ton quy: " . number_format($ton_quy) . ' đ';
                echo "<br>Chu quy: " .$chu_quy;
                echo "<br>Danh sach thanh vien: " .$danh_sach_thanh_vien;
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
