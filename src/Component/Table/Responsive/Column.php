<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Table\Responsive;

/**
 * Class Column.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class Column
{
    public ?string $value = null;

    public ?string $responsive = null;

    public bool $tools = false;

    public bool $col = false;
}
