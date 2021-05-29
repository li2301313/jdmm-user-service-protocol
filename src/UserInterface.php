<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Jdmm\Vhub\UserServiceProtocol;

/**
 * Interface UserInterface
 * @package App\Rpc\Lib
 */
interface UserInterface
{
    /**
     * 新增用户
     * @param array $data 用户数据
     * @return array
     * @author
     */
    public function addUser(array $data): array ;

    /**
     * 获取单条信息
     * @param array $map 查询条件
     * @param string $field "id,name"
     * @return array
     * @author ffx
     */
    public function userInfo(array $map, string $field = '*'): array;


    /**
     * 新增用户空间
     * @param array $data 数据
     * @return array
     * @author
     */
    public function addUserSpace(array $data): array;

    /**
     * 获取用户拥有的总空间
     * @param string $uniqueId 用户标识
     * @return int
     * @author ffx
     */
    public function userSpace(string $uniqueId): int ;

    /**
     * 编辑用户
     * @param array $where
     * @param array $set
     * @return int
     * @author ffx
     */
    public function updateUser(array $where, array $set): int ;

    /**
     * 登录接口
     * @param string $tel 手机号
     * @param string $pwd 密码
     * @param string $appKey 来源appKey
     * @param string $back 登录成功重定向路径
     * @return array
     * @author ffx
     */
    public function login($tel, $pwd, $appKey, $back, $captchaId, $captcha): array;

    /**
     * @param string $tel 手机号
     * @param string $pwd 密码
     * @param string $affirm 确认密码
     * @param string $code 短信验证码
     * @param string $appKey 来源的appkey
     * @param string $back 注册成功重定向路径
     * @param string $captchaId 图形验证码码唯一标识
     * @param string $captcha 图形验证码
     * @param string $unionid 微信用户标识
     * @param string $product 产品
     * @return array
     * @author ffx
     */
    public function register($tel, $pwd, $affirm, $code, $appKey, $back, $captchaId, $captcha, $unionid = '', $product = 'vhub'): array;

    /**
     * 用户信息
     * @param string $token 用户token
     * @return array
     * @author ffx
     */
    public function info($token): array;

    /**
     * 登录失效使用旧的token获取新的token实现重新的登录（文件协同客户端使用）
     * @param string $token
     * @return array
     * @author ffx
     */
    public function updateToken(string $token): array;

    /**
     * web端微信登录
     * @param string $code 微信授权临时票据(扫码获得)
     * @param string $appKey 来源的appKey，用户服务分配
     * @param string $back 成功后重定向地址(此地址域名需要在用户服务注册，web端请求会重定向)
     * @return array
     * @author ffx
     */
    public function webLoginWx(string $code, string $appKey, string $back): array ;

    /**
     * app端微信登录
     * @param string $code 微信授权临时票据
     * @param string $appKey 来源的appKey，用户服务分配
     * @return array
     * @author ffx
     */
    public function appLoginWx(string $code, string $appKey): array ;

    /**
     * 刷新token有效时间
     * @param string $token
     * @return bool
     * @author ffx
     */
    public function refreshTokenIndate(string $token): bool ;

    /**
     * 验证token是否有效
     * @param string $token
     * @return bool
     * @author ffx
     */
    public function verifyToken(string $token): bool ;

    /**
     * token解密
     * @param string $token
     * @return array
     * @author ffx
     */
    public function decodeToken(string $token): array ;

    /**
     * 根据code获取token和uniqueId
     * @param string $code
     * @param string $appKey
     * @return array
     * @author ffx
     */
    public function dataByCode(string $code, string $appKey): array ;

    /**
     * 登录获取token（给兼容文件协同一期使用）
     * @param $uniqueId
     * @param int $isPushLogout
     * @return string
     * @author ffx
     */
    public function loginGetToken($uniqueId, $isPushLogout = 0): string;

    /**
     * 生成token测试
     * @param string $uniqueId
     * @return string
     * @author ffx
     */
    public function getTokenTest(string $uniqueId): string;

    /**
     * 注册校验ip, 域名（只允许vhub.com.cn  一个ip一分钟只能注册5次  一小时注册10次）
     * @param string $ip IP地址
     * @param string $host 域名
     * @return int 0表示正常 1顶级域名不对 2一分钟内是否超过5次 3一小时内是否超过10次
     * @author ffx
     */
    public function verifyHostIp(string $ip, string $host) : int;

    /**
     * 获取昵称
     * @param string $uniqueId
     * @return string
     * @author ffx
     */
    public function getNickname(string $uniqueId) : string;

    /**
     * 企业用户、管理列表
     * @param int $enterpriseId 企业id
     * @param int $userType 用户类型  2-管理员, 3-员工
     * @param int $page 页码
     * @param int $size 条数
     * @return array
     * @author ffx
     */
    public function enterpriseUser(int $enterpriseId, int $userType, int $page, int $size): array;

    /**
     * 添加企业管理员、员工
     * @param int $enterpriseId
     * @param string $nickName
     * @param string $password
     * @param string $tel
     * @param int $userType
     * @return array
     * @author ffx
     */
    public function enterpriseAddUser(string $appKey, int $enterpriseId, string $nickName, string $password, string $tel, int $userType): array;

    /**
     * 查询企业用户信息
     * @param string $uniqueId 用户唯一标识
     * @return array
     * @author ffx
     */
    public function enterpriseUserInfo(string $uniqueId): array;

    /**
     * 小程序登录
     * @param string $code 微信授权临时票据
     * @param string $appKey
     * @return array
     * @author ffx
     */
    public function appletLogin(string $code, string $appKey, $encryptedData, $iv) :array;

    /**
     * 更新手机号
     * @param string $encryptedData
     * @param string $iv
     * @param string $appKey
     * @param string $token
     * @return array
     * @author ffx
     */
    public function appletUpdatePhone(string $encryptedData, string $iv, string $appKey, string $token): array;

    /**
     * 添加用户
     * @param string $product 产品标识
     * @param string $tel 手机
     * @param string $pwd 密码（明文）
     * @param string $username 用户名
     * @return array
     * @author ffx
     */
    public function add(string $product, string $tel, string $pwd, string $username) : array;

    /**
     * 删除用户批量
     * @param string $product 产品标识
     * @param string $uniqueIds 用户唯一标识集合（逗号分隔）
     * @return array
     * @author ffx
     */
    public function delete(string $product, string $uniqueIds): array;

    /**
     * 编辑用户信息
     * @param string $uniqueId 用户唯一标识
     * @param string $product 产品标识
     * @param string $username 用户名
     * @param string $pwd 密码（明文）
     * @param string $oldPwd 原密码（明文）
     * @return array
     * @author ffx
     */
    public function edit(string $uniqueId, string $product, string $username, string $pwd, string $oldPwd) : array;

    /**
     * 修改用户所属企业
     * @param $uniqueId
     * @param $enterpriseId
     * @return bool
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     * @author ffx
     */
    public function updateEnterpriseUser($uniqueId, $enterpriseId);

    /**
     * 通过refreshToken获取新的token
     * @param string $refreshToken
     * @return array
     * @author ffx
     */
    public function refreshToken(string $refreshToken): array;

    /**
     * 快速注册/绑定微信
     * @param string $tel 手机号
     * @param string $code 短信验证码
     * @param string $appKey 来源的appKey，用户服务分配
     * @param string $slide 滑动验证标识
     * @param string $unionid 微信用户标识
     * @return array
     * @throws \Swoft\Db\Exception\DbException
     * @author ffx
     */
    public function quickRegistration($tel, $code, $appKey, $slide, $unionid = ''): array;

    /**
     * 设置密码
     * @param string $uniqueId 用户唯一标识
     * @param string $pwd 密码
     * @param string $affirm 确认密码
     * @return array
     * @author ffx
     */
    public function setPwd($uniqueId, $pwd, $affirm):array;

    /**
     * 移动app手机号的登录
     * @param $tel
     * @param $pwd
     * @param $appKey
     * @param $back
     * @param string $slide 滑动验证标识
     * @return mixed
     * @author ffx
     */
    public function appLogin($tel, $pwd, $appKey, $back, $slide);

    /**
     * 修改昵称
     * @param string $nickname
     * @param string $uniqueId
     * @return array
     * @throws \Swoft\Db\Exception\DbException
     * @author ffx
     */
    public function modifyNickname(string $nickname, string $uniqueId): array;

    /**
     * 账户是否绑定微信
     * @param string $uniqueId
     * @return array
     * @throws \Swoft\Db\Exception\DbException
     * @author ffx
     */
    public function isBindWechat(string $uniqueId): array;

    /**
     * 已登录账户绑定微信
     * @param string $uniqueId 用户唯一标识
     * @param string $code 微信授权临时票据
     * @param string $appKey
     * @return array
     * @throws \Swoft\Db\Exception\DbException
     * @author ffx
     */
    public function bindWechat(string $uniqueId, string $code, string $appKey): array;

    /**
     * 清空token
     * @param string $uniqueId
     * @return array
     * @author ffx
     */
    public function clearToken(string $uniqueId): array;
}
