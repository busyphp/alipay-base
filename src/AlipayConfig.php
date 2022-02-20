<?php

namespace BusyPHP\alipay;

/**
 * 支付宝配置
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2021 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2021/11/8 下午8:23 AlipayConfig.php $
 * @deprecated {@see WithAlipayConfig}
 */
trait AlipayConfig
{
    use WithAlipayConfig;
    
    
    /**
     * 获取配置
     * @param string $name 配置名称
     * @param mixed  $default 默认值
     * @return mixed
     * @deprecated {@see WithAlipayConfig::getAlipayConfig()}
     */
    public function getConfig(string $name, $default = null)
    {
        return $this->getAlipayConfig($name, $default);
    }
}