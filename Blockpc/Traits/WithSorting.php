<?php

namespace Blockpc\Traits;

trait WithSorting
{
    public $sortField = '';
    public $sortDirection = 'desc';

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field
            ? $this->reverseSort()
            : 'asc';

        $this->sortField = $field;
    }

    public function reverseSort()
    {
        return $this->sortDirection === 'asc'
            ? 'desc'
            : 'asc';
    }
}