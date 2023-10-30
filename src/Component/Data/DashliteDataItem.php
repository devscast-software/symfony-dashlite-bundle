<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Data;

/**
 * Class DashliteDataItem.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class DashliteDataItem
{
    public string $style = 'plain';
    public string $label;
    public ?string $value;
    public bool $link = false;
}
