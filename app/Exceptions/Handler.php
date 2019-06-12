<?php

namespace App\Exceptions;

use App\Page;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
     * @param \Exception $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
//        if ($exception instanceof NotFoundHttpException) {
//            $path = parse_url(request()->url(), PHP_URL_PATH);
//            $pathFragments = explode('/', $path);
//            $end = end($pathFragments);
//            echo $end;
//
//            $page = Page::where('slug', $end)->first();
//
//            if ($page) {
//                redirect()->route('page.show', ['slug' => $page->slug]);
//                return;
//            }
//        }

        return parent::render($request, $exception);
    }
}
