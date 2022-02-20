<?php

namespace BusyPHP\alipay;

use BusyPHP\App;

/**
 * WithAlipayConfig
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2022 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2022/2/20 3:06 PM WithAlipayConfig.php $
 * @property App $app
 */
trait WithAlipayConfig
{
    /**
     * 获取配置
     * @param string $name 配置名称
     * @param mixed  $default 默认值
     * @return mixed
     */
    public function getAlipayConfig(string $name, $default = null)
    {
        $app  = $this->app ?? App::getInstance();
        $name = $name ? ".$name" : '';
        
        return $app->config->get("busy-alipay$name", $default);
    }
}