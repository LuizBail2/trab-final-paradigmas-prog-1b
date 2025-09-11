<?php

namespace App\Services;

use App\Repositories\CompanyRepository;
use App\Models\Company;

class CompanyService
{
    protected $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function listCompanies($filters = [])
    {
        return $this->companyRepository->getAll($filters);
    }

    public function createCompany(array $data)
    {
        return $this->companyRepository->create($data);
    }

    public function updateCompany(Company $company, array $data)
    {
        return $this->companyRepository->update($company, $data);
    }

    public function deleteCompany(Company $company)
    {
        return $this->companyRepository->delete($company);
    }
}
