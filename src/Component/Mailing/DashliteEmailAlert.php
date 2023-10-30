<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Mailing;

/**
 * Class EmailAlert.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class DashliteEmailAlert
{
    public string $message;
    public ?string $format = 'html';
}
