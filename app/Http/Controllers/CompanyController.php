<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyCreate;
use App\Http\Requests\CompanyUpdate;
use App\Http\Resources\CompanyResource;
use App\Services\CompanyService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $service;
    public function __construct(CompanyService $service) {
        $this->service = $service;
    }

    public function all(Request $request) {
        try {
            if ($request->has('company_name')) {
                $companies = $this->service->findBy('company_name', $request->company_name);
            } else {
                $companies = $this->service->all();
            }
            return $this->sendSuccess(CompanyResource::collection($companies), 'Başarılı', 201);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }

    public function get(Request $request) {
        try {
            $company = $this->service->find($request->id);
            return $this->sendSuccess(new CompanyResource($company), 'Başarılı', 201);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }

    public function store(CompanyCreate $request) {
        try {
            $validatedData = $request->validated();
            $this->service->store($validatedData);

            return $this->sendSuccess('Başarılı', 201);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }

    public function update(CompanyUpdate $request) {
        try {
            $validatedData = $request->validated();
            $this->service->update($validatedData['id'], $validatedData);

            return $this->sendSuccess('Başarılı', 201);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }


    public function delete(Request $request) {
        try {
            $this->service->delete($request->id);

            return $this->sendSuccess('Başarılı', 201);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }


}
