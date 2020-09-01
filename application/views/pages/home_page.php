   
<?php
if ($banner) {
    ?>
    <!--banners-->
    <section class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_sm_bottom_35">
            <a href="#" class="d_block banner animate_ftr wrapper r_corners relative m_xs_bottom_30">
                <img src="<?php echo base_url() ?>asset/front_end/images/banner_img_1.png" alt="">
                <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                    <span class="d_inline_middle">
                        <span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
                        <span class="d_block divider_type_2 centered_db m_bottom_5"></span>
                        <span class="d_block color_light tt_uppercase m_bottom_25 m_xs_bottom_10 banner_title"><b>Colored Fashion</b></span>
                        <span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                    </span>
                </span>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_sm_bottom_35">
            <a href="#" class="d_block banner animate_ftr wrapper r_corners type_2 relative">
                <img src="<?php echo base_url() ?>asset/front_end/images/banner_img_2.png" alt="">
                <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                    <span class="d_inline_middle">
                        <span class="d_block scheme_color banner_title type_2 m_bottom_5 m_mxs_bottom_5"><b>-50%</b></span>
                        <span class="d_block divider_type_2 centered_db m_bottom_5 d_sm_none"></span>
                        <span class="d_block color_light tt_uppercase m_bottom_15 banner_title_3 m_md_bottom_5 d_mxs_none">On All<br><b>Sunglasses</b></span>
                        <span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                    </span>
                </span>
            </a>
        </div>
    </section>
<?php } ?>
<div class="row clearfix">
    <aside class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
        <!--widgets-->
        <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
            <figcaption>
                <h3 class="color_light">Categories</h3>
            </figcaption>
            <div class="widget_content">
                <!--Categories list-->
                <ul class="categories_list">
                    <?php
                    foreach ($all_category as $v_category) {
                        ?>
                        <li class="active">
                            <a href="#" class="f_size_large scheme_color d_block relative">
                                <b><?php echo $v_category->category_name ?></b>
                                <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                            </a>
                            <!--second level-->
                            <!--                                            <ul>
                                                                            <li class="active">
                                                                                <a href="#" class="d_block f_size_large color_dark relative">
                                                                                    Dresses<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                                                </a>
                                                                                third level
                                                                                <ul>
                                                                                    <li><a href="#" class="color_dark d_block">Evening Dresses</a></li>
                                                                                    <li><a href="#" class="color_dark d_block">Casual Dresses</a></li>
                                                                                    <li><a href="#" class="color_dark d_block">Party Dresses</a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" class="d_block f_size_large color_dark relative">
                                                                                    Accessories<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" class="d_block f_size_large color_dark relative">
                                                                                    Tops<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>-->
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </figure>
        <!--compare products-->
        <!--                            <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                                        <figcaption>
                                            <h3 class="color_light">Compare Products</h3>
                                        </figcaption>
                                        <div class="widget_content">
                                            <div class="clearfix m_bottom_15 relative cw_product">
                                                <img src="<?php echo base_url() ?>asset/front_end/images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                                <a href="#" class="color_dark d_block bt_link">Ut tellus dolor<br> dapibus</a>
                                                <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                                            </div>
                                            <hr class="m_bottom_15">
                                            <div class="clearfix m_bottom_25 relative cw_product">
                                                <img src="<?php echo base_url() ?>asset/front_end/images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                                <a href="#" class="color_dark d_block bt_link">Elemenum vel</a>
                                                <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                                            </div>
                                            <a href="#" class="color_dark"><i class="fa fa-files-o m_right_10"></i>Go to Compare</a>
                                        </div>
                                    </figure>-->
        <!--wishlist-->
        <!--                            <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                                        <figcaption>
                                            <h3 class="color_light">Wishlist</h3>
                                        </figcaption>
                                        <div class="widget_content">
                                            You have no product to compare.
                                        </div>
                                    </figure>-->
        <!--banner-->
        <a href="#" class="widget animate_ftr d_block r_corners m_bottom_30">
            <img src="<?php echo base_url() ?>asset/front_end/images/banner_img_6.jpg" alt="">
        </a>
        <!--Bestsellers-->
        <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
            <figcaption>
                <h3 class="color_light">Popular Product</h3>
            </figcaption>
            <div class="widget_content">

                <?php
                foreach ($popular_product as $p_product) {
                    ?>

                    <div class="clearfix m_bottom_15">
                        <img width="100" src="<?php echo base_url() . $p_product->product_image ?>" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="<?php echo base_url() ?>Welcome/product_details/<?php echo $p_product->product_id; ?>/<?php echo $p_product->category_id; ?>" class="color_dark d_block bt_link"><?php echo $p_product->product_name ?></a>
                        <!--rating-->
                        <!--                                        <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
                                                                    <li class="active">
                                                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                        <i class="fa fa-star active tr_all_hover"></i>
                                                                    </li>
                                                                    <li class="active">
                                                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                        <i class="fa fa-star active tr_all_hover"></i>
                                                                    </li>
                                                                    <li class="active">
                                                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                        <i class="fa fa-star active tr_all_hover"></i>
                                                                    </li>
                                                                    <li class="active">
                                                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                        <i class="fa fa-star active tr_all_hover"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                        <i class="fa fa-star active tr_all_hover"></i>
                                                                    </li>
                                                                </ul>-->
                        <p class="scheme_color">TK. <?php echo $p_product->product_new_price; ?></p>
                    </div>
                    <hr class="m_bottom_15">
                <?php } ?>
            </div>
        </figure>
        <!--Bestsellers-->
        <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
            <figcaption>
                <h3 class="color_light">Best sellers Product</h3>
            </figcaption>
            <div class="widget_content">

                <?php
                foreach ($seller_product as $s_product) {
                    ?>

                    <div class="clearfix m_bottom_15">
                        <img width="100" src="<?php echo base_url().$s_product->product_image ?>" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="<?php echo base_url();?>Welcome/product_details/<?php echo $s_product->product_id?>/<?php echo $s_product->category_id?>" class="color_dark d_block bt_link"><?php echo $s_product->product_name?></a>
                        <!--rating-->
                        <!--                                        <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
                                                                    <li class="active">
                                                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                        <i class="fa fa-star active tr_all_hover"></i>
                                                                    </li>
                                                                    <li class="active">
                                                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                        <i class="fa fa-star active tr_all_hover"></i>
                                                                    </li>
                                                                    <li class="active">
                                                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                        <i class="fa fa-star active tr_all_hover"></i>
                                                                    </li>
                                                                    <li class="active">
                                                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                        <i class="fa fa-star active tr_all_hover"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                        <i class="fa fa-star active tr_all_hover"></i>
                                                                    </li>
                                                                </ul>-->
                        <p class="scheme_color">TK. <?php echo $s_product->product_new_price?></p>
                    </div>
                    <hr class="m_bottom_15">
                <?php } ?>
            </div>
        </figure>
        <!--tags-->
        <figure class="widget animate_ftr shadow r_corners wrapper">
            <figcaption>
                <h3 class="color_light">Tags</h3>
            </figcaption>
            <div class="widget_content">
                <div class="tags_list">
                    <a href="#" class="color_dark d_inline_b v_align_b">accessories,</a>
                    <a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">bestseller,</a>
                    <a href="#" class="color_dark d_inline_b v_align_b">clothes,</a>
                    <a href="#" class="color_dark d_inline_b f_size_big v_align_b">dresses,</a>
                    <a href="#" class="color_dark d_inline_b v_align_b">fashion,</a>
                    <a href="#" class="color_dark d_inline_b f_size_large v_align_b">men,</a>
                    <a href="#" class="color_dark d_inline_b v_align_b">pants,</a>
                    <a href="#" class="color_dark d_inline_b v_align_b">sale,</a>
                    <a href="#" class="color_dark d_inline_b v_align_b">short,</a>
                    <a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">skirt,</a>
                    <a href="#" class="color_dark d_inline_b v_align_b">top,</a>
                    <a href="#" class="color_dark d_inline_b f_size_big v_align_b">women</a>
                </div>
            </div>
        </figure>
    </aside>
    <section class="col-lg-9 col-md-9 col-sm-9">
        <h2 class="tt_uppercase color_dark m_bottom_10 heading5 animate_ftr">Featured products</h2>
        <!--products-->
        <section class="products_container a_type_2 category_grid clearfix m_bottom_25">
            <!--product item-->

            <?php
            foreach ($all_product as $v_product) {
                ?>
                <div class="product_item hit w_xs_full">
                    <figure class="r_corners photoframe animate_ftb type_2 t_align_c tr_all_hover shadow relative">
                        <!--product preview-->
                        <a href="<?php echo base_url() ?>Welcome/product_details/<?php echo $v_product->product_id; ?>/<?php echo $v_product->category_id; ?>" class="d_block relative pp_wrap m_bottom_15">
                            <!--hot product-->
                            <span class="hot_stripe"><img src="<?php echo base_url() ?>asset/front_end/images/hot_product.png" alt=""></span>
                            <img src="<?php echo base_url() . $v_product->product_image ?>" class="tr_all_hover" alt="">
                            <span role="button"  class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                        </a>
                        <!--description and price of product-->
                        <figcaption>
                            <h5 class="m_bottom_10"><a href="#" class="color_dark"><?php echo $v_product->product_name ?></a></h5>

                            <p class="scheme_color f_size_large m_bottom_15"><s><?php echo $v_product->product_old_price ?> TK.</s>   <?php echo $v_product->product_new_price ?> TK.</p>	

                            <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
                            <div class="clearfix m_bottom_5">
                                <ul class="horizontal_list d_inline_b l_width_divider">
                                    <li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
                                    <li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
                                </ul>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        </section>
        <!--banners-->
        <div class="row clearfix m_bottom_45">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
                    <span class="d_inline_middle">
                        <img class="d_inline_middle m_md_bottom_5" src="<?php echo base_url() ?>asset/front_end/images/banner_img_3.png" alt="">
                        <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                            <b>100% Satisfaction</b><br><span class="color_dark">Guaranteed</span>
                        </span>
                    </span>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
                    <span class="d_inline_middle">
                        <img class="d_inline_middle m_md_bottom_5" src="<?php echo base_url() ?>asset/front_end/images/banner_img_4.png" alt="">
                        <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                            <b>Free<br class="d_none d_sm_block"> Shipping</b><br><span class="color_dark">On All Items</span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="clearfix">
            <h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none heading5 animate_ftr">New Collection</h2>
            <div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none m_mxs_bottom_5">
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners nc_prev"><i class="fa fa-angle-left"></i></button>
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners nc_next"><i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        <!--bestsellers carousel-->
        <div class="nc_carousel m_bottom_30 m_sm_bottom_20">

            <?php
            foreach ($all_new_product as $v_new_product) {
                ?>
                <figure class="r_corners photoframe animate_ftb long tr_all_hover type_2 t_align_c shadow relative">
                    <!--product preview-->
                    <a href="<?php echo base_url() ?>Welcome/product_details/<?php echo $v_new_product->product_id ?>/<?php echo $v_new_product->category_id ?>" class="d_block relative pp_wrap m_bottom_15">
                        <!--hot product-->
                        <span class="hot_stripe type_2"><img src="<?php echo base_url() ?>asset/front_end/images/hot_product_type_2.png" alt=""></span>
                        <img src="<?php echo base_url() . $v_new_product->product_image ?>" class="tr_all_hover" alt="">
                        <span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                    </a>
                    <!--description and price of product-->
                    <figcaption class="p_vr_0">
                        <h5 class="m_bottom_10"><a href="#" class="color_dark"><?php echo $v_new_product->product_name ?></a></h5>
                        <div class="clearfix">

                            <p class="scheme_color f_size_large m_bottom_15"><s><?php echo $v_new_product->product_old_price ?> TK. <?php echo $v_new_product->product_new_price ?> TK.</s></p>
                        </div>
                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
                        <div class="clearfix m_bottom_5">
                            <ul class="horizontal_list d_inline_b l_width_divider">
                                <li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
                                <li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
                            </ul>
                        </div>
                    </figcaption>
                </figure>

            <?php } ?>
        </div>
        <!--product brands-->
        <div class="clearfix m_bottom_25 m_sm_bottom_20">
            <h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
            <div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        <!--product brands carousel-->
        <div class="product_brands with_sidebar m_sm_bottom_35">
            <?php
            foreach ($all_manufacturer as $v_manufacturer) {
                ?>
                <a href="#" class="d_block t_align_c animate_fade"><img src="<?php echo base_url() . $v_manufacturer->manufacturer_image ?>" alt=""></a>
                <?php } ?>
        </div>
    </section>
</div>








