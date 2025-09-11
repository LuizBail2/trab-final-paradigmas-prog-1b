<?php

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository
{
    public function getAll($filters = [])
    {
        $query = Company::query();

        if (!empty($filters['name'])) {
            $query->where('name', 'like', "%{$filters['name']}%");
        }

        if (!empty($filters['responsible_id'])) {
            $query->where('responsible_id', $filters['responsible_id']);
        }

        return $query->get();
    }

    public function findById($id)
    {
        return Company::findOrFail($id);
    }

    public function create(array $data)
    {
        return Company::create($data);
    }

    public function update(Company $company, array $data)
    {
        $company->update($data);
        return $company;
    }

    public function delete(Company $company)
    {
        return $company->delete();
    }
}
