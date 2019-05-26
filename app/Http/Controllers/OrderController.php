<?php

namespace App\Http\Controllers;

use App\Services\OrderEntityService;
use Illuminate\Http\Request;

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