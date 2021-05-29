<?php
/**
 * Created by PhpStorm.
 * Desc:
 * User: ffx
 * Date: 2020/7/3
 * Time: 11:04
 */

namespace Jdmm\Vhub\UserServiceProtocol;

/**
 * Interface CaptchaInterface
 */
interface CaptchaInterface
{
    /**
     * 生成图片验证码
     * @return array
     * @author ffx
     */
    public function captcha($k);

}
