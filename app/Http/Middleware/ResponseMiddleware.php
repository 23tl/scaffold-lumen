<?php

namespace App\Http\Middleware;

use App\Exceptions\BaseException;
use App\Facades\Json\Json;
use Closure;
use stdClass;
use App\Constants\ErrorConstant;
use Illuminate\Http\Response as HttpResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class ResponseMiddleware
 *
 * @package App\Http\Middleware
 */
class ResponseMiddleware
{
    /**
     * @var int
     */
    private $timer = 0;

    /**
     * ResponseMiddleware constructor.
     */
    public function __construct()
    {
        $this->timer = time();
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $data = [
            'code' => $response->getStatusCode(),
            'message' => 'ok',
            'time' => $this->timer,
            'dateTime' => date('Y-m-d H:i:s', $this->timer),
            'data' => new stdClass()
        ];

        $exception = $response->exception;

        if ($exception !== null) {
            /**
             * 此处是为了处理 HTTP 响应错误
             */
            if ($exception instanceof HttpException) {
                $data['code'] = $response->getStatusCode();
                $data['message'] = ErrorConstant::HTTP_ERROR[$response->getStatusCode()] ?? HttpResponse::$statusTexts[$response->getStatusCode()];
                $response->setContent($data);
                return $response;
            }

            /**
             * 此处是为了处理自定义异常
             */
            if ($exception instanceof BaseException) {
                $data['code'] = $exception->getCode();
                $data['message'] = $exception->getMessage();
                $response->setContent($data);
                return $response;
            }
        } else {
            /**
             * 表单验证
             */
            if ($response->getStatusCode() === 422) {
                $data['message'] = HttpResponse::$statusTexts[$response->getStatusCode()];
                $data['data'] = ['validators' => Json::decode($response->getContent())];
                $response->setContent(Json::encode($data));
                return $response;
            }

            $data['data'] = $response->original ?? new stdClass();

            if (is_array($data['data']) && empty($data['data'])) {
                $data['data'] = new stdClass();
            }

            $response->setContent($data);
        }

        return $response;
    }
}
