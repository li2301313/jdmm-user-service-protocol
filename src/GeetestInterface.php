<?php
/**
 * Created by PhpStorm.
 * Desc: 极验验证
 * User: ffx
 * Date: 2020/8/14
 * Time: 16:46
 */

namespace Jdmm\Vhub\UserServiceProtocol;

/**
 * Interface GeetestInterface
 * @package Jdmm\Vhub\UserServiceProtocol
 */
interface GeetestInterface
{
    /**
     * 初始化验证
     * @param $t
     * @param $appKey
     * @return mixed
     * @author ffx
     */
    public function register($t, $appKey);

    /**
     * 二次验证
     * @param $challenge
     * @param $validate
     * @param $seccode
     * @param $t
     * @param $appKey
     * @return mixed
     * @author ffx
     */
    public function secondValidate($challenge, $validate, $seccode, $t, $appKey);

}
