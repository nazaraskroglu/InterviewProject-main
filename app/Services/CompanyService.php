<?php

namespace App\Services;

use App\Repositories\CompanyRepository;

class CompanyService extends BaseService{
    protected $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->repository = $repository;
    }
}
