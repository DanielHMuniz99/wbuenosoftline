<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * @param ProductRepository
     * 
     * @return View
     */
    public function show(ProductRepository $product) :View
    {
        return view("admin.products.index");
    }

    /**
     * @param ProductRepository
     * 
     * @return View
     */
    public function list(ProductRepository $product)
    {
        $data = $product->all();
        return view("admin.products.list", ["data" => $data]);
    }

    /**
     * @return View
     */
    public function create() :View
    {
        return view("admin.products.form");
    }

    /**
     * @param int
     * @param ProductRepository
     * 
     * @return View
     */
    public function edit(int $id, ProductRepository $product) :View
    {
        $data = $product->getById($id);
        return view("admin.products.form", ["data" => $data]);
    }

    /**
     * @param int
     * @param UpdateProductRequest
     * @param ProductRepository
     * 
     * @return JsonResponse
     */
    public function update(int $id, UpdateProductRequest $request, ProductRepository $product) :JsonResponse
    {
        try {
            $product->update($id, $request->except(['_token', '_method' ]));
            return response()->json("atualizado com sucesso");
        } catch (\Exception $e) {
            return response()->json("Falha ao executar a operação", 500);
        }
    }

    /**
     * @param int
     * @param ProductRepository
     * 
     * @return JsonResponse
     */
    public function delete(int $id, ProductRepository $product) :JsonResponse
    {
        try {
            $product->delete($id);
            return response()->json("removido com sucesso");
        } catch (\Exception $e) {
            return response()->json("Falha ao executar a operação", 500);
        }
    }

    /**
     * @param StoreProductRequest
     * @param ProductRepository
     * 
     * @return JsonResponse
     */
    public function save(StoreProductRequest $request, ProductRepository $product) :JsonResponse
    {
        try {
            $product->create($request->all());
            return response()->json("produto criado com sucesso");
        } catch (\Exception $e) {
            return response()->json("Falha ao executar a operação", 500);
        }
    }
}