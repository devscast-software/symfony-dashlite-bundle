<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Button;

/**
 * Class DeleteButton.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class DashliteHeaderLinkButton extends Button
{
    public string $path;
    public string $color = 'white';
    public string $size = 'sm';
    public string $variant = 'light';
    public bool $outlined = true;
    public string $iconPosition = 'left';
}
