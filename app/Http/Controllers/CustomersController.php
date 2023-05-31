<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\CustomerRepository;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class CustomersController extends Controller
{
    /**
     * @param CustomerRepository
     * 
     * @return View
     */
    public function show(CustomerRepository $customer) :View
    {
        return view("admin.customers.index");
    }

    /**
     * @param CustomerRepository
     * 
     * @return View
     */
    public function list(CustomerRepository $customer) :View
    {
        $data = $customer->all();
        return view("admin.customers.list", ["data" => $data]);
    }

    /**
     * @return View
     */
    public function create() :View
    {
        return view("admin.customers.form");
    }

    /**
     * @param int
     * @param CustomerRepository
     * 
     * @return View
     */
    public function edit(int $id, CustomerRepository $customer) :View
    {
        $data = $customer->getById($id);
        return view("admin.customers.form", ["data" => $data]);
    }

    /**
     * @param int
     * @param UpdateCustomerRequest
     * @param CustomerRepository
     * 
     * @return JsonResponse
     */
    public function update(int $id, UpdateCustomerRequest $request, CustomerRepository $customer) :JsonResponse
    {
        try {
            $customer->update($id, $request->except(['_token', '_method' ]));
            return response()->json("atualizado com sucesso");
        } catch (\Exception $e) {
            return response()->json("Falha ao executar a operação", 500);
        }
    }

    /**
     * @param int
     * @param CustomerRepository
     * 
     * @return JsonResponse
     */
    public function delete(int $id, CustomerRepository $customer) :JsonResponse
    {
        try {
            $customer->delete($id);
            return response()->json("removido com sucesso");
        } catch (\Exception $e) {
            return response()->json("Falha ao executar a operação", 500);
        }
    }

    /**
     * @param StoreCustomerRequest
     * @param CustomerRepository
     * 
     * @return JsonResponse
     */
    public function save(StoreCustomerRequest $request, CustomerRepository $customer) :JsonResponse
    {
        try {
            $customer->create($request->all());
            return response()->json("cliente criado com sucesso");
        } catch (\Exception $e) {
            return response()->json("Falha ao executar a operação", 500);
        }
    }
}