<?php
    get_header();
?>
    <section class="breadcrumb breadcrumb_bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2><?php the_title(); ?></h2>
                            <p>Home &nbsp; <span>//</span> &nbsp; <?php the_title(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end khoi tieu de duoi -->
    <div class="lastest_project">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <span class="sub_heading">About us view</span>
                        <h3>Giới thiệu CDCT_@HUST Việt Nam</h3>
                        <div class="seperator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div>
                        <?php if ( have_posts() ) {
                            the_post();
                            the_content();
                        } ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">Taif lieu, Van banf</div>
                    <div class="row">
                        <ul>
                            <li><a href="">Taif lieu 1</a></li>
                            <li><a href="">Vanw ban 1</a></li>
                            <li><a href="">Taif lieu 1</a></li>
                            <li><a href="">Vanw ban 1</a></li>
                            <li><a href="">Taif lieu 1</a></li>
                            <li><a href="">Vanw ban 1</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $data_About_us = new WP_Query(array('post_type' => 'about_us'));
        $count_about = 1;
            while ( $data_About_us->have_posts() ) :
                $data_About_us->the_post();
    ?>
    <section class="top_service our_ability section_padding">
        <div class="container">
            <div class="row justify-content-between align-items-center wow <?php if (($count_about%2)==1){ echo 'fadeInRight'; } else { echo 'fadeInLeft';}?>">
                <?php if (($count_about%2)==1){ ?>
                    <div class="col-md-6 col-lg-6">
                        <div class="our_ability_img">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="">
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-6 col-lg-6" style="align-self: center!important;">
                    <div class="our_ability_member_text">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn_2">read more <i class="fa fa-long-arrow-right"></i></a> 
                    </div>
                </div>
                <?php if (($count_about%2)!=1){ ?>
                    <div class="col-md-6 col-lg-6">
                        <div class="our_ability_img">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php
        $count_about++;
        endwhile; // End of the loop.
        wp_reset_query();
    ?>

    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4 align-self-center" style="align-self: center!important;">
                    <div class="single_feature_text ">
                        <h2><?php echo get_field('tieu_de_khoi_dv'); ?></h2>
                        <p><?php echo get_field('mo_ta_cua_khoi_dv'); ?></p>
                        <a href="<?php echo get_field('duong_dan_chuyen_huong'); ?>" class="btn_2"><?php echo get_field('ten_nut_của_kh_dv'); ?></a>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="feature_item">
                        <div class="row">
                                <?php
                                    $data_Service = new WP_Query(array('post_type' => 'dich_vu_page', 'posts_per_page' => 4));
                                        while ( $data_Service->have_posts() ) :
                                        $data_Service->the_post();
                                ?>
                                    <div class="col-lg-6 col-sm-6">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="single_feature">
                                                <div class="single_feature_part">
                                                    <span class="single_feature_icon"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt=""></span>
                                                    <h4><?php the_title(); ?></h4>
                                                    <p><?php the_excerpt(); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                                    endwhile; // End of the loop.
                                    wp_reset_query();
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="center gap fade-down section-heading no-display animated fadeInDown appear">
        <h2 class="main-title"><?php echo get_field('tieu_de_khoi_team'); ?></h2>
        <hr>
        <p><?php echo get_field('cau_slogan_cua_team'); ?>.</p>
    </div> <!-- end khoi gioi thieu my team-->

    <div class="container">
        <div id="meet-the-team" class="row">
            <?php
                $data_Menber = new WP_Query(array('post_type' => 'data_member_page'));
                    while ( $data_Menber->have_posts() ) :
                        $data_Menber->the_post();
            ?>
            <div class="col-md-3 col-xs-6">
                <div class="center team-member">
                    <img class="img-responsive img-thumbnail bounce-in no-display animated bounceIn appear" src="<?php echo get_field('avatar_cua_tv'); ?>" alt="">
                    <div class="team-content fade-up no-display animated fadeInUp appear">
                        <h5><?php the_title(); ?><small class="role muted"><?php echo get_field('chuc_vu_thanh_vien'); ?></small></h5>
                        <p><?php echo get_field('loi_gioi_thieu_tv'); ?></p>
                        <a class="btn btn-social btn-facebook" href="<?php echo get_field('dia_chi_facebook'); ?>"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="<?php echo get_field('dia_chi_gmail'); ?>"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <?php
                endwhile; // End of the loop.
                wp_reset_query();
            ?>
        </div>
    </div> <!-- end khoi my team-->
<?php
get_footer();