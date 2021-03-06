<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        //전역 예외처리하는 구간
        if(app()->environment('production')){
            /*처리 로직
            if($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException           DB model 없음
            or $exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
            ){
            }
            return json
            */
            return 'error';
        }
        return parent::render($request, $exception);
    }
    // 로그인 5.3
    // protected function unauthenticate($request, AuthenticationException $exception){
    //     if($request->expectsJson()){
    //         return response()->json(['error'=>'Unauthenticated.'],401);
    //     }
    //     return redirect()->guest(route('sessions.create'));
    // }
}
