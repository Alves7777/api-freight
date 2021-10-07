<?php

namespace App\Services\Api\Freight;

use App\Repositories\Api\Freight\FreightRepository;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class FreightService
{
    private FreightRepository $freightRepository;

    public function __construct(FreightRepository $freightRepository)
    {
        $this->freightRepository = $freightRepository;
    }

    public function all(): Collection
    {
        return $this->freightRepository->all();
    }

    public function create(array $property)
    {
        return $this->freightRepository->create($property);
    }

    public function update(string $id, array $property)
    {
        return $this->freightRepository->update($id, $property);
    }

    public function findOrFail(string $id)
    {
        return $this->freightRepository->findOrFail($id);
    }

    public function delete(string $id)
    {
        return $this->freightRepository->delete($id);
    }
}
