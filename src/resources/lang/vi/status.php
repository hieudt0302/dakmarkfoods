<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Status[Order,Shipping,Payment] Reset Language Lines
    |--------------------------------------------------------------------------
    | 
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */


    'order' => [
        1 => 'Chờ xử lý',
        2 => 'Đang xử lý',
        3 => 'Hoàn thành',
        4 => 'Đã huỷ'
    ],

    'shipping' => [
        1 => 'Chưa ship',
        2 => 'Đã gửi ship một phần đơn hàng',
        3 => 'Đã gửi ship',
        4 => 'Đã giao hàng',
    ],

    'payment' => [
        1 => 'Chưa thanh toán',
        2 => 'Đã thanh toán',
        3 => 'Đã hoàn tiền',
    ]    
];