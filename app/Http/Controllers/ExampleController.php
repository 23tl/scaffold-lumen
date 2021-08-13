<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use Illuminate\Support\Facades\Log;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function test(BaseRequest $request)
    {
        Log::info('这是一个日志', $request->all());

        return ['test' => $request->input('name')];
    }
}
