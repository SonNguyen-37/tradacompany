<?php

get_header();
?>
        <div class="mui-row" id="main_content">
            <div class="mui-col-md-8 mui-col-md-offset-1">
            
                <?php 
                    if (have_posts()) {
                        while (have_posts()){
                            the_post();

                            echo "<h2>" . get_the_title() . "</h2>";
                            # thumbnail
                            echo get_the_post_thumbnail();

                            # Chi tiet don hang 
                            $tong_tien  = get_field('tong_tien');
                            $ngay_thang = get_field('ngay_thang');
                            $nhom       = get_field('nhom');

                            echo "Tổng tiền: " . number_format($tong_tien) . ' đ';
                            echo "<br>Ngày: " . $ngay_thang;
                            echo "<br>Nhóm: " . get_the_title($nhom);

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