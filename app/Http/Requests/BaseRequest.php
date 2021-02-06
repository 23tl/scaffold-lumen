<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\ProvidesConvenienceMethods;

class BaseRequest
{
    use ProvidesConvenienceMethods;

    /**
     * request
     * @var Request
     */
    protected $request;

    /**
     * BaseRequest constructor.
     *
     * @param  Request  $request
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->validate($request, $this->rules(), $this->messages());
    }

    /**
     * 此处是为了兼容 $request 方法
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return $this->request->$name($arguments);
    }

    /**
     * 规则
     * @return array
     */
    public function rules()
    {
        return [];
    }

    /**
     * 返回信息
     * @return array
     */
    public function messages()
    {
        return [];
    }

    /**
     * @param        $key
     * @param  null  $default
     *
     * @return mixed
     */
    public function input($key, $default = null)
    {
        return $this->request->input($key, $default);
    }
}
