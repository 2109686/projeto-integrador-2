<?php

namespace App\Services;

use App\DTOs\Supports\{
    CreateSupportDTO,
    UpdateSupportDTO
};
use App\Repositories\PaginationInterface;
use App\Repositories\SupportRepositoryInterface;
use stdClass;

class EquipmentsService
{

    public function __construct(
        protected SupportRepositoryInterface $repository
    ){ }

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function new(CreateSupportDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function update(UpdateSupportDTO $dto): stdClass|null
    {
        return $this->repository->update($dto);
    }

    public function delete(string|int $id): void
    {
        $this->repository->delete($id);
    }

    public function paginate (
        int $page = 1,
        int $totalPerPage = 15,
        string $filter = null
    ): PaginationInterface
    {
        return $this->repository->paginate(
            page: $page,
            totalPerPage: $totalPerPage,
            filter: $filter,
        );
    }
}
