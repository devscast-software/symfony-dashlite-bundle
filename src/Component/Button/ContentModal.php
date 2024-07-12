<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Button;

/**
 * Class DeleteButton.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class ContentModal
{
    public string $name;

    public string $id;

    public ?string $url = null;

    public ?string $action = null;

    public ?string $icon = null;

    public ?string $path = null;
}
