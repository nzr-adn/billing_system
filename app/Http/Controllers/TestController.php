<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repository\CustomerRepository;
use App\Repository\InvoiceRepository;
use App\Repository\PaymentRepository;
use App\Repository\ProductRepository;
use App\Repository\ProductTypeRepository;
use Illuminate\Support\Facades\Response;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $productTypeRepository;
    private $productRepository;
    private $customerRepository;
    private $invoiceRepository;
    private $paymentRepository;

    public function __construct(ProductTypeRepository $productTypeRepository,
                                ProductRepository     $productRepository,
                                CustomerRepository    $customerRepository,
                                InvoiceRepository     $invoiceRepository,
                                PaymentRepository     $paymentRepository)
    {
        $this->productTypeRepository = $productTypeRepository;
        $this->productRepository = $productRepository;
        $this->customerRepository = $customerRepository;
        $this->invoiceRepository = $invoiceRepository;
        $this->paymentRepository = $paymentRepository;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return Response::json($this->productTypeRepository->getAll());
    }
}
