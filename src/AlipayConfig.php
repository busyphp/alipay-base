<?php

namespace BusyPHP\alipay;

use BusyPHP\App;

/**
 * 支付宝配置
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2019 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2020/10/12 下午12:55 下午 AlipayConfig.php $
 * @property App $app
 */
trait AlipayConfig
{
    private $isLoad = false;
    
    
    /**
     * 获取配置
     * @param string $name 配置名称
     * @param mixed  $default 默认值
     * @return mixed
     */
    public function getConfig(string $name, $default = null)
    {
        if (!$this->isLoad) {
            $this->app->config->load($this->app->getRootPath() . 'config' . DIRECTORY_SEPARATOR . 'extend' . DIRECTORY_SEPARATOR . 'alipay.php', 'alipay');
            $this->isLoad = true;
        }
        
        return $this->app->config->get('alipay.' . $name, $default);
    }
}