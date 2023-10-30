<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Button;

/**
 * Class UserAvatarLink.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class DashliteUserAvatarLink
{
    public string $username;
    public string $surname;
    public string $path;
    public ?string $avatarUrl;
}
