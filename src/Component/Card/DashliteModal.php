<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Card;

/**
 * Class Modal.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class DashliteModal
{
    public string $action;
    public string $path;
    public string $position = 'top';
    public string $size = 'md';
}
