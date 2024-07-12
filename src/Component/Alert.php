<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component;

/**
 * Class Alert.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class Alert
{
    public string $type = 'icon';

    public string $message;

    public bool $dismissible = false;

    public string $state = 'danger';

    public string $fill = '';

    public string $icon = 'info';
}
