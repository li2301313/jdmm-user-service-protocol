<?php
/**
 * Created by PhpStorm.
 * Desc:
 * User: ffx
 * Date: 2020/5/26
 * Time: 10:36
 */

namespace Jdmm\Vhub\UserServiceProtocol;

/**
 * Interface AdminInterface
 * @package Jdmm\Vhub\UserServiceProtocol
 */
interface AdminInterface
{
    /**
     * 管理员登录
     * @param string $username 用户名
     * @param string $pwd 密码
     * @param string $appKey 用户服务分配的appKey
     * @param string $back 回跳地址
     * @param string $captchaId
     * @param string $captcha
     * @return array
     * @throws \Swoft\Db\Exception\DbException
     * @author ffx
     */
    public function login(string $username, string $pwd, string $appKey, string $back, string $captchaId, string $captcha): array;

    /**
     * 管理员列表
     * @param int    $page
     * @param int    $size
     * @param string $product 产品 vhub  wisdom智慧门店
     * @return array
     * @throws \Swoft\Db\Exception\DbException
     * @author ffx
     */
    public function list(int $page, int $size, string $product = 'vhub'): array;

    /**
     * 删除管理员
     * @param string $uniqueId 用户唯一标识
     * @param string $product 产品标识
     * @return array
     * @author ffx
     */
    public function delete(string $uniqueId, string $product): array;

    /**
     * 编辑管理员信息
     * @param string $uniqueId 用户唯一标识
     * @param string $product 产品标识
     * @param string $username 用户名
     * @param string $pwd 密码（明文）
     * @param string $operatorName 操作员姓名
     * @return array
     * @author ffx
     */
    public function edit(string $uniqueId, string $product, string $username = '', string $pwd = '', $operatorName = ''): array ;

    /**
     * @param $where
     * @param $filed
     * @return mixed
     * @author ffx
     */
    public function info($where, $filed);


}