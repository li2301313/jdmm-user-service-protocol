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
interface ConfigInterface
{
    /**
     * 查询是否需要推送强制退出消息
     * @param string $appKey
     * @return int
     * @author ffx
     */
    public function isPushLogout(string $appKey): int ;

    /**
     * 获取AppSecret
     * @param string $appKey
     * @return string
     * @author ffx
     */
    public function getAppSecret(string $appKey): string;

    /**
     * 获取所有配置
     * @param string $appKey
     * @return array
     * @author ffx
     */
    public function getConfig(string $appKey): array ;

    /**
     * 获取网页标题
     * @param string $appKey
     * @return string
     * @author ffx
     */
    public function getWebTitle(string $appKey): string ;
    
        /**
     * 验证来源域名是否合法
     * @param string $appKey
     * @param string $domain 来源路径url
     * @return array
     * @author ffx
     */
    public function checkDomain(string $appKey, string $domain): array;
    

}
