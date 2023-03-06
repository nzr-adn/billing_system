<?php

namespace App\Http\Controllers;

use App\Repository\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(Request $request)
    {
        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $products = $this->productRepository->paginate();
        return view('pages.products.index', compact('products'));
    }

    public function create()
    {
        abort_if(Gate::denies('product_type_create'), Response::HTTP_FORBIDDEN, 'Forbidden');
        return view('pages.product_types.create');
    }

    public function store(StoreProductTypeRequest $request)
    {
        $this->productTypeRepository->create($request->all());
        return redirect()->route('pages.product_types.index')->with(['status-success' => "New Product Type Created"]);
    }

    public function show($id)
    {
        abort_if(Gate::denies('product_type_show'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $product_type = $this->productTypeRepository->find($id);
        return view('pages.product_types.show', compact('product_type'));
    }

    public function edit($id)
    {
        abort_if(Gate::denies('product_type_edit'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $product_type = $this->productTypeRepository->find($id);
        return view('pages.product_types.edit', compact('product_type'));
    }

    public function update(UpdateProductTypeRequest $request, $id)
    {
        $data = $request->except(['_token','_method']);
        $this->productTypeRepository->update($data, $id);
        return redirect()->route('pages.product_types.index')->with(['status-success' => "Product Type Updated"]);
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('product_type_delete'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $this->productTypeRepository->delete($id);
        return redirect()->back()->with(['status-success' => "Product Type Deleted"]);
    }
}
