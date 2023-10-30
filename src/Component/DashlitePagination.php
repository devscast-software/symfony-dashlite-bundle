<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component;

use Knp\Bundle\PaginatorBundle\Pagination\SlidingPaginationInterface;

/**
 * Class DashlitePagination.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class DashlitePagination
{
    public ?SlidingPaginationInterface $data = null;

    public function preMount(?SlidingPaginationInterface $data): void
    {
        $this->data = $data;
    }
}
