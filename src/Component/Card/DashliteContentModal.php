<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Card;

/**
 * Class Modal.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class DashliteContentModal
{
    public string $id;
    public string $url;
    public ?string $action = null;
    public string $position = 'bottom';
    public string $size = 'lg';
}
