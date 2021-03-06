<?php

namespace App\Modules\Json;

/**
 * 需要统一解码和编码，防止空数组空对象互转问题。
 * Class Json
 *
 * @package App\Modules\Json
 */
class Json
{
    /**
     * 对象转成 json
     * @param $obj
     * @return false|string
     */
    public function encode($obj)
    {
        return json_encode($obj);
    }

    /**
     * 解析 json 字符串
     * @param string|null $str
     * @return mixed
     */
    public function decode($str)
    {
        if (empty($str)) {
            return [];
        }
        return json_decode($str, true, 512);
    }
}
