<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Table;

/**
 * Class ResponsiveTable.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class DashliteResponsiveTable
{
    public mixed $data;
    public ?string $emptyStatePath = null;
    public ?string $emptyStateAction = null;
    public bool $separated = true;
    public bool $disablePagination = false;
}
