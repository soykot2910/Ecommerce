

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Invoice #842393</title>
        <script type="text/css" >

            body,td,input,select {
                font-family: Tahoma;
                font-size: 11px;
                color: #000000;
            }

            form {
                margin: 0px;
            }

            a {
                color: #000000;
            }

            #wrapper {
                width: 600px;
            }

            #invoicetoptables {
                width: 100%;
                background-color: #cccccc;
                border-collapse: seperate;
            }

            td#invoicecontent {
                background-color: #ffffff;
                color: #000000;
            }

            .unpaid {
                font-size: 16px;
                color: #cc0000;
                font-weight: bold;
            }

            .paid {
                font-size: 16px;
                color: #779500;
                font-weight: bold;
            }

            .refunded {
                font-size: 16px;
                color: #224488;
                font-weight: bold;
            }

            .cancelled {
                font-size: 16px;
                color: #cccccc;
                font-weight: bold;
            }

            .collections {
                font-size: 16px;
                color: #ffcc00;
                font-weight: bold;
            }

            #invoiceitemstable {
                width: 100%;
                background-color: #cccccc;
                border-collapse: seperate;
            }

            td#invoiceitemsheading {
                background-color: #efefef;
                color: #000000;
                font-weight: bold;
                text-align: center;
            }

            td#invoiceitemsrow {
                background-color: #ffffff;
                color: #000000;
            }

            .creditbox {
                border: 1px dashed #cc0000;
                font-weight: bold;
                background-color: #FBEEEB;
                text-align: center;
                width: 100%;
                padding: 10px;
                color: #cc0000;
                margin-left: auto;
                margin-right: auto;
            }
        </script>
    </head>
    <body bgcolor="#efefef" onload="window.print()">


        <table id="wrapper" cellspacing="1" width="100%" cellpadding="10" bgcolor="#cccccc" align="center"><tbody><tr><td bgcolor="#ffffff">

                        <h2 style="text-align: center">Order View</h2>
                        <hr>
                        <h1>Q-PURCHASE</h1>
                        <h1>Hotline:01684887535</h1>
                        <hr/>


                        <br>


                        <table width="100%" id="invoicetoptables" cellspacing="0"><tbody><tr>
                                    <td colspan="2" id="invoicecontent" style="border:1px solid #cccccc">

                                        <table width="100%" height="100" cellspacing="0" cellpadding="10" id="invoicetoptables"><tbody><tr>
                                                    <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc">

                                                        <strong>Invoice To</strong><br>
                                                        <?php echo $customer_info->customer_name ?><br>
                                                        <?php echo $customer_info->customer_email ?><br>
                                                        <?php echo $customer_info->customer_address ?>, <br>
                                                        <?php echo $customer_info->customer_city ?>, <?php echo $customer_info->customer_zip_code ?><br>
                                                        <?php echo $customer_info->customer_country ?>
                                                    </td>
                                                    <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc">

                                                        <strong>Ship To</strong><br>
                                                        <?php echo $shipping_info->shipping_name ?><br>
                                                        <?php echo $shipping_info->shipping_email ?><br>
                                                        <?php echo $shipping_info->shipping_address ?>, <br>
                                                        <?php echo $shipping_info->shipping_city ?>, <?php echo $shipping_info->shipping_zip_code ?><br>
                                                        <?php echo $shipping_info->shipping_country ?>
                                                    </td>
                                                </tr>
                                            </tbody></table>

                                    </td>

<!--                                    <td width="50%" id="invoicecontent" style="border:1px solid #cccccc;border-left:0px;">
<table width="100%" height="100" cellspacing="0" cellpadding="10" id="invoicetoptables">
<tr>
<td id="invoicecontent" valign="top" style="border:1px solid #cccccc">
<strong>Pay To</strong><br />

</td></tr></table>
</td>-->

                                </tr></tbody></table>

                        <p><strong>Invoice #inv-<?php echo $select_order->order_id ?></strong><br>
                            Invoice Date: <?php echo date('d/m/Y', strtotime($select_order->create_date_time)) ?><br>
                            Due Date: <?php echo date('d/m/y', strtotime($select_order->create_date_time . ' + 7 day')) ?></p>
                        <hr/>
                        <h2>Order Details</h2>
                        <hr/>
                        <table border="1" width="100%" id="invoicetoptables" cellspacing="0">
                            <thead>
                                <tr>


                                    <td class="name">Product Name</td>

                                    <td class="quantity">Quantity</td>
                                    <td class="price">Unit Price</td>
                                    <td class="total">Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0;
                                foreach ($order_details_info as $v_order_info) {
                                    ?>
                                    <tr>


                                        <td class="name"><a href="product.html"><?php echo $v_order_info->product_name; ?></a> <span class="stock">***</span>
                                            <div> </div></td>

                                        <td class="quantity">
                                            <?php echo $v_order_info->product_qty; ?>

                                        </td>
                                        <td class="price">TK. <?php echo $v_order_info->product_price; ?></td>
                                        <td class="total">TK. <?php echo $v_order_info->product_qty * $v_order_info->product_price; ?></td>
                                    </tr>
                                    <?php
                                    $total = $total + $v_order_info->product_qty * $v_order_info->product_price;
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                        <div class="cart-module">

                            <div class="cart-total">
                                <table  align="right">
                                    <tbody>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td class="right"><b>Sub-Total:</b></td>
                                            <td class="right numbers">TK. <?php echo $total; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td class="right"><b>VAT 00%:</b></td>
                                            <td class="right numbers">
                                                <?php
//                                                $vat = (15 * $total) / 100;
                                                echo 'TK.  ' . 0;
                                                ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td class="right numbers_total"><b>Grand Total:</b></td>
                                            <td class="right numbers_total"><?php
//                                                $g_total = $total + $vat;
                                                $g_total = $total;
//
                                                echo 'TK.  &nbsp; ' . $g_total
                                                ?></td>
                                        </tr>
                                    </tbody>
                                </table>



                                </td></tr></tbody></table>




                                </body></html>