<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Layout;

/**
 * Class Header.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class Header
{
    public ?string $title = null;

    public mixed $data;

    public ?string $backPath = null;

    public ?string $backTitle = null;
}
