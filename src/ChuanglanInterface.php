<?php
/**
 * Created by PhpStorm.
 * Desc: 创蓝验证码
 * User: ffx
 * Date: 2020/8/20
 * Time: 9:17
 */

namespace Jdmm\Vhub\UserServiceProtocol;

/**
 * Interface ChuanglanInterface
 */
interface ChuanglanInterface
{
    /**
     * 校验
     * @param string $rendStr 验证票据需要的随机字符串
     * @param string $ticket 验证码返回给用户的票据
     * @param string $ip 用户操作来源的外网 IP
     * @return array
     * @author ffx
     */
    public function validate(string $rendStr, string $ticket, string $ip): array;
}
