<?php
/**
 * 请将所有的异常状态码和文字描述在此处定义
 * ErrorConstant.php
 * Created On 2020/2/19 10:47 上午
 */

namespace App\Constants;


class ErrorConstant
{
    /**
     * 此处声明对应的 HTTP 状态码返回文字信息，用于覆盖原有的 HTTP 状态信息
     */
    const PERMISSION_ERROR = [
        'message' => '您无权访问',
        'code' => 403
    ];

    const HTTP_ERROR = [
        404 => '接口不存在'
    ];

    const NOT_LOGIN = [
        'code' => '40003',
        'message' => '未登录'
    ];

    const ACCESS_EXCEEDED = [
        'code' => 40004,
        'message' => '访问被拒绝'
    ];

    //活动异常
    const ACTIVITY_NOT_FUND = [
        'message' => '未找到活动',
        'code' => 10001
    ];

    const ACTIVITY_RULE_VALIDATOR_ERROR = [
        'message' => '规则设置错误',
        'code' => 10002
    ];

    const ACTIVITY_ENTRY_ERROR = [
        'message' => '活动报名错误',
        'code' => 10003
    ];

    const ACTIVITY_VOTE_NOT_START = [
        'message' => '不再投票阶段',
        'code' => 10004
    ];

    const ACTIVITY_ENTRY_LIMIT_ERROR = [
        'message' => '没有报名机会啦！',
        'code' => 10005
    ];

    const ACTIVITY_ENTRY_MOBILE_ERROR = [
        'message' => '必须填写手机号',
        'code' => 10006
    ];

    const ACTIVITY_ENTRY_VIDEO_ERROR = [
        'message' => '必须上传视频',
        'code' => 10007
    ];

    const ACTIVITY_UNDER_REVIEW = [
        'message' => '活动正在审核中',
        'code' => 10008
    ];

    const ACTIVITY_GIFT_IS_FORBID = [
        'message' => '禁止赠送礼物',
        'code' => 10009
    ];

    const ACTIVITY_GIFT_LIMIT_ERROR = [
        'message' => '礼物赠送完啦！',
        'code' => 10010
    ];

    const ENTRY_SETTING_ERROR = [
        'message' => '报名规则设置错误',
        'code' => 10011,
    ];

    const VOTE_SETTING_ERROR = [
        'message' => '投票规则设置错误',
        'code' => 10012
    ];

    const SPONSOR_SETTING_ERROR = [
        'message' => '赞助商设置错误',
        'code' => 10013
    ];

    //音乐异常
    const SONG_NOT_FUND = [
        'message' => '未找到音乐',
        'code' => 20001
    ];

    //选手异常
    const PLAYER_NOT_FUND = [
        'message' => '选手未找到',
        'code' => 30001
    ];

    const PLAYER_USER_VOTE_NUM_ERROR = [
        'message' => '没有选票啦！快去送礼物吧！',
        'code' => 30002
    ];

    const PLAYER_STATUS_ERROR = [
        'message' => '选手状态异常',
        'code' => 30003
    ];

    /**
     * 礼物异常
     */
    const GIFT_NOT_FUND = [
        'message' => '未找到礼物',
        'code' => 50001
    ];

    /**
     * 流速异常
     */
    const RATE_LIMIT_ERROR = [
        'message' => '操作过快',
        'code' => 100001
    ];
    //审核中抛出异常
    const VERIFY_ERROR = [
        'message' => '您不是特约用户',
        'code' => 200001
    ];
}
