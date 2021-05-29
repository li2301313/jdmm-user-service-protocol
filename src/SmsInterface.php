<?php
/**
 * Created by PhpStorm.
 * Desc:
 * User: ffx
 * Date: 2020/7/1
 * Time: 11:53
 */

namespace Jdmm\Vhub\UserServiceProtocol;

/**
 * Interface SmsInterface
 * @package Jdmm\Vhub\UserServiceProtocol
 */
interface SmsInterface
{
    /**
     * 发送短信验证码
     * @param string $tel 手机号
     * @param string $captchaId 图形验证码标识
     * @param string $captcha 验证码
     * @param int $type 类型 1需要验证手机号是否已注册
     * @return array
     * @author ffx
     */
    public function sendCode($tel, $captchaId, $captcha, $type = 1) : array ;

    /**
     * 移动app发送短信验证码
     * @param $tel
     * @param $slide
     * @param int $type
     * @return array
     * @author ffx
     */
    public function appSendCode($tel, $slide, $type = 1) : array;
}