<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Table\Responsive;

use Devscast\Bundle\DashliteBundle\Component\Button\Button;

/**
 * Class Action.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class Action extends Button
{
    public string $path;

    public bool $hidden = true;

    public bool $trigger = true;

    public bool $iconOnly = true;

    public string $color = 'transparent';
}
