<div class="tabs m_bottom_45">
    <!--tabs navigation-->
    <nav>
        <ul class="tabs_nav horizontal_list clearfix">
            <li><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Login</a></li>
            <li><a href="#tab-2" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Register</a></li>
        </ul>
    </nav>
    <section class="tabs_content shadow r_corners">
        <div id="tab-1">
            <!--login form-->
            <h5 class="fw_medium m_bottom_15">
                 <?php
            $msg=$this->session->userdata('loginmsg');
            if($msg)
            {
                echo $msg;
                $this->session->unset_userdata('loginmsg');
            }
            ?>
            </h5>
            <form action="<?php echo base_url()?>Checkout/check_customer" method="post">
                <ul>
                    <li class="clearfix m_bottom_15">
                        <div class="half_column type_2 f_left">
                            <label for="username" class="m_bottom_5 d_inline_b">Customer Email</label>
                            <input type="email" id="username" name="customer_email" class="r_corners full_width m_bottom_5">
                           
                        </div>
                        <div class="half_column type_2 f_left">
                            <label for="pass" class="m_bottom_5 d_inline_b">Customer Password</label>
                            <input type="password" id="pass" name="customer_password" class="r_corners full_width m_bottom_5">
                            
                        </div>
                    </li>

                    <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Log In</button></li>
                </ul>
            </form>
        </div>
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
            <form action="<?php echo base_url();?>Checkout/customer_registration" method="post">
                <ul>
                    <li class="m_bottom_25">
                        <label for="d_name" class="d_inline_b m_bottom_5 required">Customer Name</label>
                        <input type="text" id="d_name" name="customer_name" class="r_corners full_width">
                    </li>

                    <li class="m_bottom_15">
                        <label for="u_name" class="d_inline_b m_bottom_5 required">Customer Email</label>
                        <input type="email" id="u_email" name="customer_email" class="r_corners full_width">
                    </li>
                    <li class="m_bottom_15">
                        <label for="u_email" class="d_inline_b m_bottom_5 required">Customer Phone</label>
                        <input type="number" id="u_name" name="customer_phone" class="r_corners full_width">
                    </li>
                    <li class="m_bottom_15">
                        <label for="u_pass" class="d_inline_b m_bottom_5 required">Password</label>
                        <input type="password" id="u_pass" name="customer_password" class="r_corners full_width">
                    </li>
                    <li>
                        <label for="u_repeat_pass" class="d_inline_b m_bottom_5">Confirm Password</label>
                        <input type="password" equals="customer_password" id="u_repeat_pass" name="" class="r_corners full_width">
                    </li>


                    <li class="m_bottom_25">
                        <label for="d_name" class="d_inline_b m_bottom_5 required">City</label>
                        <input type="text" id="d_name" name="customer_city" class="r_corners full_width">
                    </li>
                    <li class="m_bottom_25">
                        <label for="d_name" class="d_inline_b m_bottom_5 required">Zip Code</label>
                        <input type="text" id="d_name" name="customer_zip_code" class="r_corners full_width">
                    </li>
                    <li class="m_bottom_25">
                        <label for="d_name" class="d_inline_b m_bottom_5 required">Country</label>

                        <div class="custom_select relative">
                            <div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
                            <ul class="select_list d_none"></ul>
                            <select id="country2" name ="customer_country" >
                                <option>Select Country</option>
                                <script>
                                populateCountries("country2");
                                </script>
                            </select>
                        </div>
                    </li>
                    <li class="m_bottom_25">
                        <label for="d_name" class="d_inline_b m_bottom_5 required">Customer Address</label>
                        <textarea id="notes" class="r_corners notes full_width" name="customer_address"></textarea>
                    </li>
                    
                      <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Customer Registration</button></li>
                </ul>
            </form>
        </div>
    </section>
</div>