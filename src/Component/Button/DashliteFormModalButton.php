<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Button;

/**
 * Class DeleteButton.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class DashliteFormModalButton
{
    public string $name;
    public string $icon;
    public ?string $path;
    public string $size = 'md';
    public string $position = 'top';
}
