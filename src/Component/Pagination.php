<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component;

use Knp\Bundle\PaginatorBundle\Pagination\SlidingPaginationInterface;

/**
 * Class Pagination.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class Pagination
{
    public ?SlidingPaginationInterface $data = null;

    public function preMount(?SlidingPaginationInterface $data): void
    {
        $this->data = $data;
    }
}
