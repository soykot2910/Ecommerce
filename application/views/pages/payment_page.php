  

<h2 class="tt_uppercase color_dark m_bottom_30">Payment Information</h2>

<form action="<?php echo base_url()?>Checkout/confirm_order" method="post">
        <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
            <figure class="block_select clearfix relative m_bottom_15">
                <input type="radio" checked name="payment_type" value="cash on delivery" class="d_none">
                <img src="images/shipment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                <figcaption>
                    <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Cash On Delivery</h5>
                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer. </p>
                </figcaption>
            </figure>
            <hr class="m_bottom_20">
            <figure class="block_select clearfix relative">
                <input type="radio" name="payment_type" value="others" class="d_none">
                <img src="images/shipment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                <figcaption>
                    <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Others Method</h5>
                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros.</p>
                </figcaption>
            </figure>
            
            
            
                   
           
        </div>

    <button type="submit" class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Confirm Payment</button>
 
 
 </form>