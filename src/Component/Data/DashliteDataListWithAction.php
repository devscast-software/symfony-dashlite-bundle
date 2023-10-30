<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Data;

/**
 * Class DashliteDataListWithAction.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class DashliteDataListWithAction
{
    public string $title = '';
    public string $description = '';
    public string $value;
    public string $name;
    public ?string $icon = null;
    public ?string $path = null;
}
