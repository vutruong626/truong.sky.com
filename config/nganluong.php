<?php
return [
    /*
     * Link api duyệt thanh toán
     *
     *
     * */
    'url_api' => env('URL_API', 'https://sandbox.nganluong.vn:8088/nl35/checkout.php'),

    /*
     * Mã kết nối
     *
     *
     * */
    'merchant_id' => env('MERCHANT_ID', '36680'),

    /*
     * Mật khẩu kết nối
     *
     *
     * */
    'merchant_password' => env('MERCHANT_PASSWORD', 'matkhauketnoi'),

    /*
     * Email tài khoản Ngân Lượng
     *
     *
     * */
    'receiver_email' => env('RECEIVER_EMAIL', 'demo@nganluong.vn')
];