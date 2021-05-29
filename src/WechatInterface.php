<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * Desc:
 * User: ffx
 * Date: 2020/4/13
 * Time: 15:25
 */

namespace Jdmm\Vhub\UserServiceProtocol;

/**
 * Interface ConfigInterface
 * @package Jdmm\Vhub\UserServiceProtocol
 */
interface WechatInterface
{
    /**
     * 客户端获取微信的ticket
     * @param string $appKey
     * @param string $type 获取ticket的类型(默认2给app端获取微信登录二维码使用，jsapi给官网获取jsapi_ticket使用)
     * @return array
     * @author ffx
     */
    public function getTicket(string $appKey, string $type = '2'): array ;

    /**
     * 获取JS-SDK使用权限签名
     * @param string $url 当前网页路径
     * @param string $appKey 用户服务分配的appKey
     * @return array
     * @author ffx
     */
    public function signature(string $url, string $appKey): array;

    /**
     * 获取微信的accessToken
     * @param string $appKey
     * @return string
     * @author ffx
     */
    public function accessToken(string $appKey): string;

}
