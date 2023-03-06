<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repository\CustomerRepository;
use App\Repository\InvoiceRepository;
use App\Repository\PaymentRepository;
use App\Repository\PermissionRepository;
use App\Repository\ProductRepository;
use App\Repository\ProductTypeRepository;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
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
    private $userRepository;
    private $roleRepository;
    private $permissionRepository;

    public function __construct(ProductTypeRepository $productTypeRepository,
                                ProductRepository     $productRepository,
                                CustomerRepository    $customerRepository,
                                InvoiceRepository     $invoiceRepository,
                                PaymentRepository     $paymentRepository,
                                UserRepository        $userRepository,
                                RoleRepository        $roleRepository,
                                PermissionRepository  $permissionRepository)
    {
        $this->productTypeRepository = $productTypeRepository;
        $this->productRepository = $productRepository;
        $this->customerRepository = $customerRepository;
        $this->invoiceRepository = $invoiceRepository;
        $this->paymentRepository = $paymentRepository;
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->permissionRepository = $permissionRepository;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return Response::json($this->permissionRepository->getAll());
    }
}
