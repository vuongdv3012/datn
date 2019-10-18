<?php
    get_header();
?>
    <div class="slidehome wow fadeInRightBig">
        <div id="slidetrangchu" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                <?php
                    //Get dữ liệu custom type
                    $data_slide_home = new WP_Query(array('post_type' => 'slide_trang_chu'));
                    $count_sile = 0;
                    while ( $data_slide_home->have_posts() ) :
                        $data_slide_home->the_post();
                        $url_anh_slide = get_field('anh_sile')['url'];
                        $description = get_field('noi_dung_trich_dan');
                        $url_slide = get_field('link_url_cua_slide')['url'];
                        $tite_button_slide = get_field('tieu_de_nut_slide');
                        $count_sile++;
                ?>
                    <div class="carousel-item <?php if($count_sile == 1) {echo 'active';} ?>">
                        <div class="motslide container">
                            <img src="<?php echo $url_anh_slide ?>" alt="" class="anhs1">
                            <div class="container2">
                                <div class="row">
                                    <div class="col-sm-7 push-sm-5">
                                        <h2><?php the_title(); ?></h2>
                                        <div class="desc"><?php echo $description ?></div>
                                        <?php if ($tite_button_slide != '') { ?>
                                            <a href="<?php echo $url_slide ?>" class="nutslide btn btn-outline-secondary"><?php echo $tite_button_slide; ?> <i class="fa fa-long-arrow-right"></i></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile; // End of the loop.
                    wp_reset_query();
                ?>

            </div>
            <a class="left carousel-control" href="#slidetrangchu" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#slidetrangchu" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> <!-- End div slide Home -->

    <div class="div_about_us">
        <div class="container">
            <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
                <div class="col-lg-6 col-xl-6">
                    <div class="inset-right-3">
                        <h3 class="font-condensed wow-outer"><span class="wow slideInDown" style="visibility: visible; font-size: 40px; line-height: 1.2; animation-name: slideInDown;"><?php echo get_field('tieu_de_div'); ?></span></h3>
                        <p class="font-condensed heading-subtitle wow-outer"><span class="wow slideInDown" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: slideInDown;"><?php echo get_field('cau_sologan'); ?></span></p>
                        <p class="font-roboto wow-outer"><span class="wow slideInDown" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInDown;"><?php echo get_field('cau_gioi_thieu'); ?></span></p>
                        <div class="wow-outer button-outer">
                            <a class="button button-lg button-black-outline button-winona wow slideInDown" data-wow-delay=".1s" href="about-us.html" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInDown;">
                                <div class="content-original"><?php echo get_field('tit_nut'); ?></div><div class="content-dubbed"><?php echo get_field('tit_nut'); ?></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="svg-box wow slideInDown" style="background-image: url(<?php echo get_field('anh_nen_so'); ?>); visibility: visible; animation-name: slideInDown;">
                        <div class="svg-box-content">
                            <svg class="expiriens">
                                <defs>
                                    <mask id="mask" x="0" y="0" width="100%" height="100%">
                                        <rect id="alpha" x="0" y="0" width="100%" height="100%"></rect>
                                        <text id="title" x="50%" y="0" dy="1.25em"><?php echo get_field('so_about_us'); ?></text>
                                    </mask>
                                </defs>
                                <rect id="base" x="0" y="0" width="100%" height="100%"></rect>
                            </svg>
                            <span class="box-subtitle"><?php echo get_field('y_nghia_so'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End div About Us -->

    <div class="badichvu wow bounceInLeft">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 mx-auto text-center">
                    <h2 class="heading-29190">Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <h5><?php echo get_field('tieu_de_khoi_1'); ?></h5>
                        <p class="py-3"><?php echo get_field('mo_ta_khoi_1'); ?></p>
                        <a href="<?php echo get_field('link_chuyen_huong_1'); ?>" class="secondary-btn"><?php echo get_field('noi_dung_nut_khoi_1'); ?> <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <h5><?php echo get_field('tieu_de_khoi_2'); ?></h5>
                        <p class="py-3"><?php echo get_field('mo_ta_khoi_2'); ?></p>
                        <a href="<?php echo get_field('link_chuyen_huong_2'); ?>" class="secondary-btn"><?php echo get_field('noi_dung_nut_khoi_2'); ?> <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <h5><?php echo get_field('tieu_de_khoi_3'); ?></h5>
                        <p class="py-3"><?php echo get_field('mo_ta_khoi_3'); ?></p>
                        <a href="<?php echo get_field('link_chuyen_huong_3'); ?>" class="secondary-btn"><?php echo get_field('noi_dung_nut_khoi_3'); ?><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End div gioi thieu -->

    <div class="spnoibat container">
        <div class="row">
            <div class="col-sm-8 push-sm-2 text-xs-center wow fadeInDownBig">
                <h2 class="kieuchuto"><?php echo get_field('tieu_de_khoi_dich_vu_noi_bat'); ?></h2>
                <p class="mota">
                    <?php echo get_field('Mo_ta_khoi_dv_noi_bat'); ?>
                </p>
            </div>
        </div>
        <div class="row gutter10">
            <div class="col-sm-6">
                <a href="<?php echo get_field('url_khoi_dv_1')['url']; ?>" class="kngan wow fadeInUpBig" style="background-image: url('<?php echo get_field('anh_nen_khoi_dv_1'); ?>');">
                    <h4><?php echo get_field('tieu_de_khoi_dv_1'); ?></h4>
                    <b class="view"><?php echo get_field('ten_nut_button_1'); ?> <i class="fa fa-long-arrow-right"></i></b>
                </a>
                <a href="<?php echo get_field('url_khoi_dv_2')['url']; ?>" class="kngan kdai wow fadeInDownBig" style="background-image: url('<?php echo get_field('anh_nen_khoi_dv_2'); ?>');">
                    <h4><?php echo get_field('tieu_de_khoi_dv_2'); ?></h4>
                    <b class="view"><?php echo get_field('ten_nut_button_2'); ?> <i class="fa fa-long-arrow-right"></i></b>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="<?php echo get_field('url_khoi_dv_3')['url']; ?>" class="kngan kdai wow fadeInDownBig" style="background-image: url('<?php echo get_field('anh_nen_khoi_dv_3'); ?>');">
                    <h4><?php echo get_field('tieu_de_khoi_dv_3'); ?></h4>
                    <b class="view"><?php echo get_field('ten_nut_button_3'); ?> <i class="fa fa-long-arrow-right"></i></b>
                </a>
                <a href="<?php echo get_field('url_khoi_dv_4')['url']; ?>" class="kngan wow fadeInUpBig" style="background-image: url('<?php echo get_field('anh_nen_khoi_dv_4'); ?>');">
                    <h4><?php echo get_field('tieu_de_khoi_dv_4'); ?></h4>
                    <b class="view"><?php echo get_field('ten_nut_button_4'); ?> <i class="fa fa-long-arrow-right"></i></b>
                </a>
            </div>
        </div>
    </div>
    <!-- End div Quang cao dich vu -->

    <div class="quangcao1home wow fadeInUpBig" style="background-image: url('<?php echo get_field('anh_nen_qc_home'); ?>'); ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="qchome2 text-xs-center">
                        <h2><?php echo get_field('tieu_de_khoi_qc_home'); ?></h2>
                        <p><?php echo get_field('mo_ta_khoi_qc_home'); ?></p>
                        <a href="<?php echo get_field('duong_dan_qc_home'); ?>" class="nutslide btn btn-outline-secondary"><?php echo get_field('button_khoi_qc_home'); ?>  <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End div quang cao -->

    <!-- End div san pham -->
    <div class="thanhvientrungtam">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 push-sm-2">
                    <div class="text-xs-center">
                        <h2 class="heading-29190"><?php echo get_field('tieu_de_khoi_thanh_vien'); ?></h2>
                        <p class="mota">
                            <?php echo get_field('mo_ta_khoi_thanh_vien'); ?>
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
    </div> <!-- End div comment home -->

    <div class="tinhome mt-100-vien">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 push-sm-2">
                    <div class="text-xs-center">
                        <h2 class="heading-29190"><?php echo get_field('tieu_de_khoi_tin_tuc_trang_chu'); ?></h2>
                        <p class="mota">
                            <?php echo get_field('trich_dan_khoi_tin_tuc_trang_chu'); ?> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                    <?php
                        //Get dữ liệu custom type
                        $data_slide = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 2));
                        //$count_new = 0;
                        while ( $data_slide->have_posts() ) :
                            $data_slide->the_post();
                            //if ( $count_new < 2) {
                    ?>
                        <div class="col-sm-6">
                            <a href="" class="anhtin">
                                <?php the_post_thumbnail(); ?>
                                <div class="ngaythang">
                                    <b><?php echo get_the_date('d', get_the_ID()); ?></b>
                                    <i><?php echo get_the_date('M', get_the_ID()); ?></i>
                                </div>
                            </a>
                            <div class="ndtin">
                                <a href="<?php the_permalink(); ?>" class="td1tin"><?php the_title(); ?></a>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="rm">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    <?php
                            //}
                        //$count_new++;
                        endwhile;
                        wp_reset_query();
                    ?>

            </div>
        </div>
    </div> <!-- End div tin tuc home -->
    <div class="nhaneamil">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 push-xs-1 text-xs-center">
                    <?php Ninja_Forms()->form( 1 )->get(); ?>
                    <h2 class="1">SUBSCRIBE to our newsletters</h2>
                    <p>Be the First to know about our Fresh Arrivals and much more!</p>
                    <div class="form">
                        <input type="text" class="form-control nhanmail" placeholder="Enter your email ID">
                        <input type="submit" class="form-cotrol" value="SUBSCRIBE">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End div nhan email home -->
<?php
get_footer();
