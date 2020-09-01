<div class="tabs m_bottom_45">
    <!--tabs navigation-->
    <nav>
        <ul class="tabs_nav horizontal_list clearfix">
            <li><a href="#tab-2" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Customer Shipping </a></li>
        </ul>
    </nav>
    <section class="tabs_content shadow r_corners">
  
        <div id="tab-2">
            
            <h1 class="text-center" style="color: red">
            <?php
            $msg=$this->session->userdata('msg');
            if($msg)
            {
                echo $msg;
                $this->session->unset_userdata('msg');
            }
            ?>
                
                </h1>
            <br>
            <form action="<?php echo base_url();?>Checkout/save_shipping" method="post">
                <ul>
                    <li class="m_bottom_25">
                        <label for="d_name" class="d_inline_b m_bottom_5 required">Shipping Name</label>
                        <input type="text" id="d_name" name="shipping_name" class="r_corners full_width">
                    </li>

                    <li class="m_bottom_15">
                        <label for="u_name" class="d_inline_b m_bottom_5 required">Shipping Email</label>
                        <input type="email" id="u_email" name="shipping_email" class="r_corners full_width">
                    </li>
                    <li class="m_bottom_15">
                        <label for="u_email" class="d_inline_b m_bottom_5 required">Shipping Phone</label>
                        <input type="number" id="u_name" name="shipping_phone" class="r_corners full_width">
                    </li>
                    <li class="m_bottom_25">
                        <label for="d_name" class="d_inline_b m_bottom_5 required">City</label>
                        <input type="text" id="d_name" name="shipping_city" class="r_corners full_width">
                    </li>
                    <li class="m_bottom_25">
                        <label for="d_name" class="d_inline_b m_bottom_5 required">Zip Code</label>
                        <input type="text" id="d_name" name="shipping_zip_code" class="r_corners full_width">
                    </li>
                    <li class="m_bottom_25">
                        <label for="d_name" class="d_inline_b m_bottom_5 required">Country</label>

                        <div class="custom_select relative">
                            <div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
                            <ul class="select_list d_none"></ul>
                            <select id="country2" name ="shipping_country" >
                                <option>Select Country</option>
                                <script>
                                populateCountries("country2");
                                </script>
                            </select>
                        </div>
                    </li>
                    <li class="m_bottom_25">
                        <label for="d_name" class="d_inline_b m_bottom_5 required">Shipping Address</label>
                        <textarea id="notes" class="r_corners notes full_width" name="shipping_address"></textarea>
                    </li>
                    
                      <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Customer Shipping</button></li>
                </ul>
            </form>
        </div>
    </section>
</div>