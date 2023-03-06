<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repository\ProductTypeRepository;
use Illuminate\Support\Facades\Response;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $product_type_service;

    public function __construct(ProductTypeRepository $product_type_service)
    {
        $this->product_type_service = $product_type_service;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return Response::json($this->product_type_service->getAll());
    }
}
