@extends('frontend.master')

@section('content')
<div class="site-inner">
    <div class="content-sidebar-wrap">
        <main class="content" style="width: 100%;">
            <article class="post-323 page type-page status-publish entry" itemscope="" itemtype="https://schema.org/CreativeWork">
                <header class="entry-header">
                    <h1 class="entry-title" itemprop="headline">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Kiểm tra</font>
                        </font>
                    </h1>
                </header>
                <div class="entry-content" itemprop="text">
                    <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="woocommerce-form-coupon-toggle">

                            <div class="woocommerce-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Có phiếu giảm giá? </font>
                                </font><a href="#" class="showcoupon">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Nhấn vào đây để nhập mã của bạn</font>
                                    </font>
                                </a>
                            </div>
                        </div>

                        <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display: block;">

                            <p>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Nếu bạn có mã phiếu giảm giá, vui lòng áp
                                        dụng nó dưới đây.</font>
                                </font>
                            </p>

                            <p class="form-row form-row-first">
                                <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code"
                                    value="">
                            </p>

                            <p class="form-row form-row-last">
                                <button type="submit" class="button" name="apply_coupon" value="Apply coupon">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Áp dụng phiếu giảm giá</font>
                                    </font>
                                </button>
                            </p>

                            <div class="clear"></div>
                        </form>
                        <div class="woocommerce-notices-wrapper"></div>
                        <form name="checkout" method="post" class="checkout woocommerce-checkout" action=""
                            enctype="multipart/form-data" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <div class="woocommerce-billing-fields">
                                        <h3>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Chi tiết thanh toán</font>
                                            </font>
                                        </h3>
                                        <div class="woocommerce-billing-fields__field-wrapper">
                                            <p class="form-row form-row-first validate-required" id="billing_first_name_field"
                                                data-priority="10">
                                                <label for="name" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Tên&nbsp; </font>
                                                    </font>
                                                    <abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </font>
                                                    </abbr>
                                                </label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="input-text " name="name" id="name"
                                                        placeholder="" value="" autocomplete="given-name">
                                                </span>
                                            </p>
                                            <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                                <label for="billing_phone" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Điện thoại&nbsp; </font>
                                                    </font>
                                                    <abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </font>
                                                    </abbr>
                                                </label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="tel" class="input-text " name="phone" id="billing_phone" placeholder="" value="" autocomplete="tel">
                                                </span>
                                            </p>
                                            <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110">
                                                <label for="billing_email" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Địa chỉ email&nbsp;
                                                        </font>
                                                    </font>
                                                    <abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </font>
                                                    </abbr>
                                                </label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="email" class="input-text " name="email" id="billing_email" placeholder="" value="" autocomplete="email username">
                                                </span>
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                                <label for="billing_address_1" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Địa chỉ đường phố </font>
                                                        <abbr
                                                            class="required" title="cần thiết">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </abbr>
                                                    </font>&nbsp;
                                                    <abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;"></font>
                                                    </abbr>
                                                </label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="input-text " name="address" id="billing_address_1"
                                                        placeholder="House number and street name" value=""
                                                        autocomplete="address-line1" data-placeholder="House number and street name">
                                                </span>
                                            </p>
                                            
                                            <!-- <p class="form-row form-row-wide" id="billing_company_field" data-priority="30"><label
                                                    for="billing_company" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Tên công ty&nbsp; </font>
                                                    </font><span class="optional">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">(tùy chọn)</font>
                                                        </font>
                                                    </span>
                                                </label><span class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_company" id="billing_company"
                                                        placeholder="" value="" autocomplete="organization"></span></p> -->
                                            <!-- <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40">
                                                <label for="billing_country" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Tỉnh/Thành phố &nbsp; </font>
                                                    </font>
                                                    <abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </font>
                                                    </abbr>
                                                </label>
                                                <span class="woocommerce-input-wrapper">
                                                    <select name="billing_country" id="billing_country" class="country_to_state country_select  select2-hidden-accessible"
                                                        autocomplete="country" tabindex="-1" aria-hidden="true">
                                                        <option value="">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Chọn một quốc
                                                                    gia…</font>
                                                            </font>
                                                        </option>
                                                        <option value="NG">Vietnamese</option>
                                                        
                                                    </select>
                                                    <span class="select2 select2-container select2-container--default select2-container--below"
                                                        dir="ltr" style="width: 100%;">
                                                        <span class="selection">
                                                            <span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                                aria-labelledby="select2-billing_country-container"
                                                                role="combobox"><span class="select2-selection__rendered"
                                                                    id="select2-billing_country-container" role="textbox"
                                                                    aria-readonly="true" title="Việt Nam">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Việt Nam</font>
                                                                    </font>
                                                            </span>
                                                            <span class="select2-selection__arrow" role="presentation">
                                                                <b role="presentation"></b>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span>
                                                    <noscript>
                                                        <button type="submit" name="woocommerce_checkout_update_totals"  value="Update country">Update country</button>
                                                    </noscript>
                                                </span>
                                            </p> -->
                                            <p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-priority="70" data-o_class="form-row form-row-wide address-field validate-required">
                                                <label  for="billing_city" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Thị trấn / Thành phố
                                                        </font>
                                                        <abbr class="required" title="cần thiết">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </abbr>
                                                    </font>&nbsp;
                                                    <abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;"></font>
                                                    </abbr>
                                                </label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="input-text " name="city" id="billing_city"
                                                        placeholder="" value="" autocomplete="address-level2">
                                                </span>
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-postcode" id="billing_postcode_field" data-priority="65" data-o_class="form-row form-row-wide address-field validate-postcode">
                                                <label for="billing_postcode" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Quận/Huyện </font>
                                                        <span
                                                            class="optional">
                                                            <font style="vertical-align: inherit;">(tùy chọn)</font>
                                                        </span>
                                                    </font>&nbsp;
                                                    <span class="optional">
                                                        <font style="vertical-align: inherit;"></font>
                                                    </span>
                                                </label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="input-text " name="district" id="billing_postcode"
                                                        placeholder="" value="" autocomplete="postal-code">
                                                </span>
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-postcode" id="billing_postcode_field" data-priority="65" data-o_class="form-row form-row-wide address-field validate-postcode">
                                                <label for="billing_postcode" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Xã/Phường/thị trấn</font>
                                                        <span
                                                            class="optional">
                                                            <font style="vertical-align: inherit;">(tùy chọn)</font>
                                                        </span>
                                                    </font>&nbsp;
                                                    <span class="optional">
                                                        <font style="vertical-align: inherit;"></font>
                                                    </span>
                                                </label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="input-text " name="area" id="billing_postcode"
                                                        placeholder="" value="" autocomplete="postal-code">
                                                </span>
                                            </p>
                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="woocommerce-shipping-fields"> </div>
                                <div class="woocommerce-additional-fields">
                                    <h3>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Thông tin thêm</font>
                                        </font>
                                    </h3>
                                    <div class="woocommerce-additional-fields__field-wrapper">
                                        <p class="form-row notes" id="order_comments_field" data-priority=""><label
                                                for="order_comments" class="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Ghi chú đặt hàng&nbsp;
                                                    </font>
                                                </font><span class="optional">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">(tùy chọn)</font>
                                                    </font>
                                                </span>
                                            </label>
                                            <span class="woocommerce-input-wrapper">
                                                <textarea name="note" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                            </span>
                                        </p>
                                    </div>


                                </div>
                            </div>
                            </div>



                            <h3 id="order_review_heading">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Đơn hàng của bạn</font>
                                </font>
                            </h3>


                            <div id="order_review" class="woocommerce-checkout-review-order">
                                <table class="shop_table woocommerce-checkout-review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Sản phẩm</font>
                                                </font>
                                            </th>
                                            <th class="product-total">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Toàn bộ</font>
                                                </font>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products_cart as $item_products_cart)
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        {{$item_products_cart->title}}&nbsp; </font>
                                                </font><strong class="product-quantity">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">× {{$item_products_cart['qty']}}</font>
                                                    </font>
                                                </strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">=</font>
                                                        </font>
                                                    </span>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">{{number_format($item_products_cart->price * $item_products_cart['qty'] )}} VNĐ</font>
                                                    </font>
                                                </span> </td>
                                        </tr>
                                        @endforeach                                        
                                    </tbody>
                                    <tfoot>

                                        <tr class="cart-subtotal">
                                            <th>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Tổng phụ</font>
                                                </font>
                                            </th>
                                            <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">$</font>
                                                        </font>
                                                    </span>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"> 300,00</font>
                                                    </font>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Toàn bộ</font>
                                                </font>
                                            </th>
                                            <td>
                                                <strong>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">=</font>
                                                            </font>
                                                        </span>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">{{number_format($cart_detail['weight'],0)}} VNĐ</font>
                                                        </font>
                                                    </span>
                                                </strong> 
                                            </td>
                                        </tr>


                                    </tfoot>
                                </table>
                                <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Tiếp tục với PayPal</font>
                                    </font>
                                </button>
                                <!-- <div id="payment" class="woocommerce-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">
                                        <li class="wc_payment_method payment_method_bacs">
                                            <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method"
                                                value="bacs" data-order_button_text="">

                                            <label for="payment_method_bacs">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        Chuyển tiền trực tiếp qua ngân hàng </font>
                                                </font>
                                            </label>
                                            <div class="payment_box payment_method_bacs" style="display:none;">
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Thanh toán trực tiếp vào
                                                            tài khoản ngân hàng của chúng tôi. </font>
                                                        <font style="vertical-align: inherit;">Vui lòng sử dụng ID đơn
                                                            hàng của bạn làm tài liệu tham khảo thanh toán. </font>
                                                        <font style="vertical-align: inherit;">Đơn hàng của bạn sẽ
                                                            không được giao cho đến khi tiền đã được xóa trong tài
                                                            khoản của chúng tôi.</font>
                                                    </font>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="wc_payment_method payment_method_paypal">
                                            <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method"
                                                value="paypal" checked="checked" data-order_button_text="Proceed to PayPal">

                                            <label for="payment_method_paypal">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        PayPal PayPal </font>
                                                </font>
                                                <img src="https://ladyboss.adalainethemes.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
                                                    alt="Dấu chấp nhận PayPal"><a href="https://www.paypal.com/ro/cgi-bin/webscr?cmd=xpt/Marketing/general/WIPaypal-outside"
                                                    class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/ro/cgi-bin/webscr?cmd=xpt/Marketing/general/WIPaypal-outside','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">là gì?</font>
                                                    </font>
                                                </a>
                                            </label>
                                            <div class="payment_box payment_method_paypal">
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Thanh toán qua PayPal;
                                                        </font>
                                                        <font style="vertical-align: inherit;">bạn có thể thanh toán
                                                            bằng thẻ tín dụng nếu bạn không có tài khoản PayPal.</font>
                                                    </font>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="form-row place-order">
                                        <noscript>
                                            Since your browser does not support JavaScript, or it is disabled, please
                                            ensure you click the <em>Update Totals</em> button before placing your
                                            order. You may be charged more than the amount stated above if you fail to
                                            do so. <br /><button type="submit" class="button alt" name="woocommerce_checkout_update_totals"
                                                value="Update totals">Update totals</button>
                                        </noscript>

                                        <div class="woocommerce-terms-and-conditions-wrapper">
                                            <div class="woocommerce-privacy-policy-text">
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Dữ liệu cá nhân của bạn
                                                            sẽ được sử dụng để xử lý đơn đặt hàng của bạn, hỗ trợ trải
                                                            nghiệm của bạn trên trang web này và cho các mục đích khác
                                                            được mô tả trong </font>
                                                    </font><a href="https://ladyboss.adalainethemes.com/privacy/" class="woocommerce-privacy-policy-link"
                                                        target="_blank">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">chính sách bảo mật</font>
                                                        </font>
                                                    </a>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"> của chúng tôi </font>
                                                        <font style="vertical-align: inherit;">.</font>
                                                    </font>
                                                </p>
                                            </div>
                                            <p class="form-row validate-required">
                                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                    <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                        name="terms" id="terms">
                                                    <span class="woocommerce-terms-and-conditions-checkbox-text">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Tôi đã đọc và đồng ý
                                                                với các </font>
                                                        </font><a href="https://ladyboss.adalainethemes.com/policies/"
                                                            class="woocommerce-terms-and-conditions-link" target="_blank">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">điều khoản và
                                                                    điều kiện của</font>
                                                            </font>
                                                        </a>
                                                    </span>&nbsp;<font style="vertical-align: inherit;"><span class="woocommerce-terms-and-conditions-checkbox-text">
                                                            <font style="vertical-align: inherit;"> trang web </font>
                                                        </span></font><span class="required">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </font>
                                                    </span>
                                                </label>
                                                <input type="hidden" name="terms-field" value="1">
                                            </p>
                                        </div>


                                        <button type="submit" class="button alt" name="woocommerce_checkout_place_order"
                                            id="place_order" value="Place order" data-value="Place order">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tiếp tục với PayPal</font>
                                            </font>
                                        </button>

                                        <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce"
                                            value="8f3bc0b890">
                                            <input type="hidden" name="_wp_http_referer" value="/?wc-ajax=update_order_review">
                                    </div>
                                </div> -->

                            </div>
                        </form>

                    </div>
                </div>
            </article>
        </main>
    </div>
</div>
@endsection