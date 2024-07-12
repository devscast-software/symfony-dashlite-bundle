<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Mailing;

/**
 * Class Alert.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class Alert
{
    public string $message;

    public ?string $format = 'html';
}
