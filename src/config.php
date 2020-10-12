<?php
/**
 * 支付宝相关配置
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2019 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2020/10/12 下午12:59 下午 config.php $
 */

return [
    
    // 支付相关配置
    'pay' => [
        // 电脑网站支付
        'pc'  => [
            // 'type'             => 1,
            // 'email'            => '',
            // 'pattern'          => '',
            // 'app_id'           => '',
            // 'rsa_private_path' => app()->getRootPath() . '私钥路径',
            // 'rsa_public_path'  => app()->getRootPath() . '公钥路径',
            // 'is_rsa2'          => true
        ],
        
        // H5支付
        'h5'  => [
            // 'type'             => 2,
            // 'email'            => '',
            // 'pattern'          => '',
            // 'app_id'           => '',
            // 'rsa_private_path' => app()->getRootPath() . '私钥路径',
            // 'rsa_public_path'  => app()->getRootPath() . '公钥路径',
            // 'is_rsa2'          => true
        ],
        
        // APP支付
        'app' => [
            // 'type'             => 3,
            // 'email'            => '',
            // 'pattern'          => '',
            // 'app_id'           => '',
            // 'rsa_private_path' => app()->getRootPath() . '私钥(pkcs8)路径',
            // 'rsa_public_path'  => app()->getRootPath() . '公钥文件路径',
            // 'is_rsa2'          => false
        ],
    ]
];