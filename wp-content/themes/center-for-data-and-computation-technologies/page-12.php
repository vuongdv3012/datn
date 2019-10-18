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
                        <span class="sub_heading">Project view</span>
                        <h3>Our Projects</h3>
                        <div class="seperator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php 
                $data_dich_vu = new WP_Query(array('post_type' => 'dich_vu_page'));
                    $count_dich_vu = 0;
                    while ( $data_dich_vu->have_posts() ) :
                        $data_dich_vu->the_post();
                        if (($count_dich_vu % 2) == 1) {
            ?>
                <div class="row align-items-center mb-80">
                    <div class="col-xl-6 col-md-6" >
                        <div class="single_project_thumb">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-md-6" style="align-self: center!important;">
                        <div class="section_title">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="boxed-btn">View More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <?php } else { ?>
                <div class="row align-items-center mb-80">
                    <div class="col-xl-6 col-md-6" style="align-self: center!important;">
                        <div class="section_title">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="boxed-btn">View More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-md-6">
                        <div class="single_project_thumb">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="">
                        </div>
                    </div>
                </div>
            <?php
                    }
                $count_dich_vu++;
                endwhile; // End of the loop.
                wp_reset_query();
            ?>
        </div>

        <div class="thanhvientrungtam">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 push-sm-2">
                        <div class="text-xs-center">
                            <h2 class="heading-29190">Testimonial</h2>
                            <p class="mota">
                                Happy Clients
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slidecamnhan" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php wp_reset_query(); ?>
                    <?php
                        //Get dữ liệu custom type
                        $data_slide_home_thanh_vien = new WP_Query(array('post_type' => 'slide_thanh_vien'));
                        $count_sile2 = 0;
                        while ( $data_slide_home_thanh_vien->have_posts() ) :
                            $data_slide_home_thanh_vien->the_post();
                            $url_anh_avatar = get_field('avatar_thanh_vien');
                            $description_thanh_vien = get_field('gioi_thieu_thanh_vien');
                            $chuc_vu = get_field('chuc_vu_thanh_vien');
                            $count_sile2++;
                    ?>
                    <div class="carousel-item <?php if($count_sile2 == 1) {echo 'active';} ?>">
                        <div class="motslidecn text-xs-center">
                            <img src="<?php echo $url_anh_avatar; ?>" alt="" class="anhava rounded-circle">
                            <div class="caunx"><?php echo $description_thanh_vien; ?></div>
                            <h4 class="ten"><?php the_title(); ?></h4>
                            <p class="nghep"> <?php echo $chuc_vu; ?> </p>
                        </div>
                    </div>
                    <?php
                        endwhile; // End of the loop.
                        wp_reset_query();
                    ?>
                </div>
                <a class="left carousel-control" href="#slidecamnhan" role="button" data-slide="prev">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slidecamnhan" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

<?php
get_footer();