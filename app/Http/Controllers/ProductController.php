<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Repository\ProductRepository;
use App\Repository\ProductTypeRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    private $productRepository;
    private $productTypeRepository;

    public function __construct(ProductRepository $productRepository,
                                ProductTypeRepository $productTypeRepository)
    {
        $this->productRepository = $productRepository;
        $this->productTypeRepository = $productTypeRepository;
    }

    public function index(Request $request)
    {
        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $products = $this->productRepository->paginate();
        return view('pages.products.index', compact('products'));
    }

    public function create()
    {
        abort_if(Gate::denies('product_create'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $product_types = $this->productTypeRepository->getAll();
        return view('pages.products.create', compact('product_types'));
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->except(['_token','_method']);
        $this->productRepository->create($data);
        return redirect()->route('pages.products.index')->with(['status-success' => "New Product Created"]);
    }

    public function show($id)
    {
        abort_if(Gate::denies('product_show'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $product = $this->productRepository->find($id);
        return view('pages.products.show', compact('product'));
    }

    public function edit($id)
    {
        abort_if(Gate::denies('product_edit'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $product = $this->productRepository->find($id);
        $product_types = $this->productTypeRepository->getAll();
        return view('pages.products.edit', compact('product', 'product_types'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $data = $request->except(['_token','_method']);
        $this->productRepository->update($data, $id);
        return redirect()->route('pages.products.index')->with(['status-success' => "Product Updated"]);
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $this->productRepository->delete($id);
        return redirect()->back()->with(['status-success' => "Product Deleted"]);
    }
}
