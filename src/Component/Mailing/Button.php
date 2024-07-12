<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Mailing;

/**
 * Class Button.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class Button
{
    public ?string $url = null;

    public ?string $title = null;

    public string $color = 'primary';

    public string $format = 'html';
}
