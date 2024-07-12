<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Data;

/**
 * Class CollectionWithAction.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class CollectionWithAction
{
    public string $title = '';

    public string $description = '';

    public string $value;

    public string $name;

    public ?string $icon = null;

    public ?string $path = null;

    public bool $divider = true;
}
