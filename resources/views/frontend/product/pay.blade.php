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
                        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="https://ladyboss.adalainethemes.com/checkout/"
                            enctype="multipart/form-data" novalidate="novalidate">



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
                                                data-priority="10"><label for="billing_first_name" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Tên&nbsp; </font>
                                                    </font><abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </font>
                                                    </abbr>
                                                </label><span class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_first_name" id="billing_first_name"
                                                        placeholder="" value="" autocomplete="given-name"></span></p>
                                            <p class="form-row form-row-last validate-required" id="billing_last_name_field"
                                                data-priority="20"><label for="billing_last_name" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Họ&nbsp; </font>
                                                    </font><abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </font>
                                                    </abbr>
                                                </label><span class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_last_name" id="billing_last_name"
                                                        placeholder="" value="" autocomplete="family-name"></span></p>
                                            <p class="form-row form-row-wide" id="billing_company_field" data-priority="30"><label
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
                                                        placeholder="" value="" autocomplete="organization"></span></p>
                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                id="billing_country_field" data-priority="40"><label for="billing_country"
                                                    class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Quốc gia&nbsp; </font>
                                                    </font><abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </font>
                                                    </abbr>
                                                </label><span class="woocommerce-input-wrapper"><select name="billing_country"
                                                        id="billing_country" class="country_to_state country_select  select2-hidden-accessible"
                                                        autocomplete="country" tabindex="-1" aria-hidden="true">
                                                        <option value="">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Chọn một quốc
                                                                    gia…</font>
                                                            </font>
                                                        </option>
                                                        <option value="AX">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Quần đảo Aland</font>
                                                            </font>
                                                        </option>
                                                        <option value="AF">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Afghanistan</font>
                                                            </font>
                                                        </option>
                                                        <option value="AL">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Albania</font>
                                                            </font>
                                                        </option>
                                                        <option value="DZ">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Algeria</font>
                                                            </font>
                                                        </option>
                                                        <option value="AS">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">American Samoa</font>
                                                            </font>
                                                        </option>
                                                        <option value="AD">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Andorra</font>
                                                            </font>
                                                        </option>
                                                        <option value="AO">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ăng-gô</font>
                                                            </font>
                                                        </option>
                                                        <option value="AI">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Anguilla</font>
                                                            </font>
                                                        </option>
                                                        <option value="AQ">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Nam Cực</font>
                                                            </font>
                                                        </option>
                                                        <option value="AG">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Antigua và
                                                                    Barbuda</font>
                                                            </font>
                                                        </option>
                                                        <option value="AR">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Argentina</font>
                                                            </font>
                                                        </option>
                                                        <option value="AM">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Armenia</font>
                                                            </font>
                                                        </option>
                                                        <option value="AW">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Argentina</font>
                                                            </font>
                                                        </option>
                                                        <option value="AU">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Châu Úc</font>
                                                            </font>
                                                        </option>
                                                        <option value="AT">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Áo</font>
                                                            </font>
                                                        </option>
                                                        <option value="AZ">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ailen</font>
                                                            </font>
                                                        </option>
                                                        <option value="BS">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ba Tư</font>
                                                            </font>
                                                        </option>
                                                        <option value="BH">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Bahrain</font>
                                                            </font>
                                                        </option>
                                                        <option value="BD">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Bangladesh</font>
                                                            </font>
                                                        </option>
                                                        <option value="BB">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Bác</font>
                                                            </font>
                                                        </option>
                                                        <option value="BY">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Bêlarut</font>
                                                            </font>
                                                        </option>
                                                        <option value="PW">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Belau</font>
                                                            </font>
                                                        </option>
                                                        <option value="BE">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">nước Bỉ</font>
                                                            </font>
                                                        </option>
                                                        <option value="BZ">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Belize</font>
                                                            </font>
                                                        </option>
                                                        <option value="BJ">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Bénin</font>
                                                            </font>
                                                        </option>
                                                        <option value="BM">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Bermuda</font>
                                                            </font>
                                                        </option>
                                                        <option value="BT">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Bhutan</font>
                                                            </font>
                                                        </option>
                                                        <option value="BO">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Bôlivia</font>
                                                            </font>
                                                        </option>
                                                        <option value="BQ">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Bonaire, Saint
                                                                    Eustatius và Saba</font>
                                                            </font>
                                                        </option>
                                                        <option value="BA">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Bosnia và
                                                                    Herzegovina</font>
                                                            </font>
                                                        </option>
                                                        <option value="BW">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Botswana</font>
                                                            </font>
                                                        </option>
                                                        <option value="BV">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Đảo Bouvet</font>
                                                            </font>
                                                        </option>
                                                        <option value="BR">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Brazil</font>
                                                            </font>
                                                        </option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="VG">British Virgin Islands</option>
                                                        <option value="BN">Brunei</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo (Brazzaville)</option>
                                                        <option value="CD">Congo (Kinshasa)</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Curaçao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="CI">Ivory Coast</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Laos</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao S.A.R., China</option>
                                                        <option value="MK">Macedonia</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia</option>
                                                        <option value="MD">Moldova</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="KP">North Korea</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PS">Palestinian Territory</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Reunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="ST">São Tomé and Príncipe</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="SX">Saint Martin (Dutch part)</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia/Sandwich Islands</option>
                                                        <option value="KR">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Nam Triều Tiên</font>
                                                            </font>
                                                        </option>
                                                        <option value="SS">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">phía nam Sudan</font>
                                                            </font>
                                                        </option>
                                                        <option value="ES">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Tây Ban Nha</font>
                                                            </font>
                                                        </option>
                                                        <option value="LK">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Sri Lanka</font>
                                                            </font>
                                                        </option>
                                                        <option value="SD">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Sudan</font>
                                                            </font>
                                                        </option>
                                                        <option value="SR">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Xuameame</font>
                                                            </font>
                                                        </option>
                                                        <option value="SJ">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Svalbard và Jan
                                                                    Mayen</font>
                                                            </font>
                                                        </option>
                                                        <option value="SZ">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Swaziland</font>
                                                            </font>
                                                        </option>
                                                        <option value="SE">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Thụy Điển</font>
                                                            </font>
                                                        </option>
                                                        <option value="CH">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Thụy sĩ</font>
                                                            </font>
                                                        </option>
                                                        <option value="SY">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Syria</font>
                                                            </font>
                                                        </option>
                                                        <option value="TW">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Đài Loan</font>
                                                            </font>
                                                        </option>
                                                        <option value="TJ">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Tajikistan</font>
                                                            </font>
                                                        </option>
                                                        <option value="TZ">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Tanzania</font>
                                                            </font>
                                                        </option>
                                                        <option value="TH">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">nước Thái Lan</font>
                                                            </font>
                                                        </option>
                                                        <option value="TL">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Đông Timor</font>
                                                            </font>
                                                        </option>
                                                        <option value="TG">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Đi</font>
                                                            </font>
                                                        </option>
                                                        <option value="TK">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Tokelau</font>
                                                            </font>
                                                        </option>
                                                        <option value="TO">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Tống</font>
                                                            </font>
                                                        </option>
                                                        <option value="TT">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Trinidad và
                                                                    Tobago</font>
                                                            </font>
                                                        </option>
                                                        <option value="TN">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Tunisia</font>
                                                            </font>
                                                        </option>
                                                        <option value="TR">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">gà tây</font>
                                                            </font>
                                                        </option>
                                                        <option value="TM">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Turkmenistan</font>
                                                            </font>
                                                        </option>
                                                        <option value="TC">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Quần đảo Turks
                                                                    và Caicos</font>
                                                            </font>
                                                        </option>
                                                        <option value="TV">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Tuvalu</font>
                                                            </font>
                                                        </option>
                                                        <option value="UG">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Nhật Bản</font>
                                                            </font>
                                                        </option>
                                                        <option value="UA">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ukraine</font>
                                                            </font>
                                                        </option>
                                                        <option value="AE">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">các Tiểu Vương
                                                                    Quốc Ả Rập Thống Nhất</font>
                                                            </font>
                                                        </option>
                                                        <option value="GB">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Vương quốc Anh
                                                                    (Anh)</font>
                                                            </font>
                                                        </option>
                                                        <option value="US">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Hoa Kỳ (Hoa Kỳ)</font>
                                                            </font>
                                                        </option>
                                                        <option value="UM">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Quần đảo xa xôi
                                                                    hẻo lánh Hoa Kỳ (Hoa Kỳ)</font>
                                                            </font>
                                                        </option>
                                                        <option value="VI">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Quần đảo Virgin
                                                                    thuộc Hoa Kỳ (US)</font>
                                                            </font>
                                                        </option>
                                                        <option value="UY">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Uruguay</font>
                                                            </font>
                                                        </option>
                                                        <option value="UZ">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Uzbekistan</font>
                                                            </font>
                                                        </option>
                                                        <option value="VU">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Vanuatu</font>
                                                            </font>
                                                        </option>
                                                        <option value="VA">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Vatican</font>
                                                            </font>
                                                        </option>
                                                        <option value="VE">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Venezuela</font>
                                                            </font>
                                                        </option>
                                                        <option value="VN" selected="selected">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Việt Nam</font>
                                                            </font>
                                                        </option>
                                                        <option value="WF">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Wallis và Futuna</font>
                                                            </font>
                                                        </option>
                                                        <option value="EH">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Phía tây Sahara</font>
                                                            </font>
                                                        </option>
                                                        <option value="YE">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Yemen</font>
                                                            </font>
                                                        </option>
                                                        <option value="ZM">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Zambia</font>
                                                            </font>
                                                        </option>
                                                        <option value="ZW">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Bêlarut</font>
                                                            </font>
                                                        </option>
                                                    </select><span class="select2 select2-container select2-container--default select2-container--below"
                                                        dir="ltr" style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                                aria-labelledby="select2-billing_country-container"
                                                                role="combobox"><span class="select2-selection__rendered"
                                                                    id="select2-billing_country-container" role="textbox"
                                                                    aria-readonly="true" title="Việt Nam">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Việt Nam</font>
                                                                    </font>
                                                                </span><span class="select2-selection__arrow" role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span><noscript><button
                                                            type="submit" name="woocommerce_checkout_update_totals"
                                                            value="Update country">Update country</button></noscript></span></p>
                                            <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field"
                                                data-priority="50"><label for="billing_address_1" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Địa chỉ đường phố </font><abbr
                                                            class="required" title="cần thiết">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </abbr>
                                                    </font>&nbsp;<abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;"></font>
                                                    </abbr>
                                                </label><span class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_address_1" id="billing_address_1"
                                                        placeholder="House number and street name" value=""
                                                        autocomplete="address-line1" data-placeholder="House number and street name"></span></p>
                                            <p class="form-row form-row-wide address-field" id="billing_address_2_field"
                                                data-priority="60" style="display: none;"><label for="billing_address_2"
                                                    class="screen-reader-text">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Căn hộ, bộ, đơn vị, vv
                                                        </font><span class="optional">
                                                            <font style="vertical-align: inherit;">(tùy chọn)</font>
                                                        </span>
                                                    </font>&nbsp;<span class="optional">
                                                        <font style="vertical-align: inherit;"></font>
                                                    </span>
                                                </label><span class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_address_2" id="billing_address_2"
                                                        placeholder="Apartment, suite, unit etc. (optional)" value=""
                                                        autocomplete="address-line2" data-placeholder="Apartment, suite, unit etc. (optional)"></span></p>
                                            <p class="form-row form-row-wide address-field validate-postcode" id="billing_postcode_field"
                                                data-priority="65" data-o_class="form-row form-row-wide address-field validate-postcode"><label
                                                    for="billing_postcode" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Mã bưu điện / ZIP </font><span
                                                            class="optional">
                                                            <font style="vertical-align: inherit;">(tùy chọn)</font>
                                                        </span>
                                                    </font>&nbsp;<span class="optional">
                                                        <font style="vertical-align: inherit;"></font>
                                                    </span>
                                                </label><span class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_postcode" id="billing_postcode"
                                                        placeholder="" value="" autocomplete="postal-code"></span></p>
                                            <p class="form-row form-row-wide address-field validate-required" id="billing_city_field"
                                                data-priority="70" data-o_class="form-row form-row-wide address-field validate-required"><label
                                                    for="billing_city" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Thị trấn / Thành phố
                                                        </font><abbr class="required" title="cần thiết">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </abbr>
                                                    </font>&nbsp;<abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;"></font>
                                                    </abbr>
                                                </label><span class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_city" id="billing_city"
                                                        placeholder="" value="" autocomplete="address-level2"></span></p>
                                            <p class="form-row form-row-wide address-field validate-state" id="billing_state_field"
                                                style="display: none" data-o_class="form-row form-row-wide address-field validate-state"><label
                                                    for="billing_state" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Bang / Quận </font><span
                                                            class="optional">
                                                            <font style="vertical-align: inherit;">(tùy chọn)</font>
                                                        </span>
                                                    </font>&nbsp;<span class="optional">
                                                        <font style="vertical-align: inherit;"></font>
                                                    </span>
                                                </label><span class="woocommerce-input-wrapper"><input type="hidden"
                                                        class="hidden" name="billing_state" id="billing_state" value=""
                                                        autocomplete="address-level1" placeholder="" readonly="readonly"></span></p>
                                            <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field"
                                                data-priority="100"><label for="billing_phone" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Điện thoại&nbsp; </font>
                                                    </font><abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </font>
                                                    </abbr>
                                                </label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text "
                                                        name="billing_phone" id="billing_phone" placeholder="" value=""
                                                        autocomplete="tel"></span></p>
                                            <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field"
                                                data-priority="110"><label for="billing_email" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Địa chỉ email&nbsp;
                                                        </font>
                                                    </font><abbr class="required" title="cần thiết">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">*</font>
                                                        </font>
                                                    </abbr>
                                                </label><span class="woocommerce-input-wrapper"><input type="email"
                                                        class="input-text " name="billing_email" id="billing_email"
                                                        placeholder="" value="" autocomplete="email username"></span></p>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-2">
                                    <div class="woocommerce-shipping-fields">
                                    </div>
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
                                                </label><span class="woocommerce-input-wrapper"><textarea name="order_comments"
                                                        class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery."
                                                        rows="2" cols="5"></textarea></span></p>
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
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        Nước hoa Miss Dior&nbsp; </font>
                                                </font><strong class="product-quantity">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">× 1</font>
                                                    </font>
                                                </strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">$</font>
                                                        </font>
                                                    </span>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"> 100,00</font>
                                                    </font>
                                                </span> </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        Giày cao gót thiết kế&nbsp; </font>
                                                </font><strong class="product-quantity">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">× 1</font>
                                                    </font>
                                                </strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">$</font>
                                                        </font>
                                                    </span>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"> 200,00</font>
                                                    </font>
                                                </span> </td>
                                        </tr>
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
                                                </span></td>
                                        </tr>






                                        <tr class="order-total">
                                            <th>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Toàn bộ</font>
                                                </font>
                                            </th>
                                            <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">$</font>
                                                            </font>
                                                        </span>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"> 300,00</font>
                                                        </font>
                                                    </span></strong> </td>
                                        </tr>


                                    </tfoot>
                                </table>

                                <div id="payment" class="woocommerce-checkout-payment">
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
                                                </font><img src="https://ladyboss.adalainethemes.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
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
                                            value="8f3bc0b890"><input type="hidden" name="_wp_http_referer" value="/?wc-ajax=update_order_review">
                                    </div>
                                </div>

                            </div>


                        </form>

                    </div>
                </div>
            </article>
        </main>
    </div>
</div>
@endsection