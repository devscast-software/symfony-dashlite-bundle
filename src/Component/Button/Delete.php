<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Button;

/**
 * Class DeleteButton.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class Delete
{
    public string $path;

    public ?string $redirect = null;

    public string $type = 'icon';

    public string $remove = '.nk-tb-item';

    public string $id;
}
