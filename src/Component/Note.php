<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component;

/**
 * Class Note.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class Note
{
    public string $content;

    public string $author;

    public \DateTimeImmutable $date;
}
