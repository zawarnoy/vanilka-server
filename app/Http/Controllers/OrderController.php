<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Services\OrderEntityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    protected $orderEntityService;

    public function __construct(OrderEntityService $orderEntityService)
    {
        $this->orderEntityService = $orderEntityService;
    }

    public function order(Request $request)
    {
        $this->orderEntityService->sendMail($request->all());
        return $this->orderEntityService->getResult();
    }
}