<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle;

/**
 * Class WhiteLabel.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final readonly class WhiteLabel
{
    public array $application;

    public function __construct(array $config = [])
    {
        $this->application = $config['application'] ?? throw new \InvalidArgumentException('Missing application configuration');
    }

    public static function create(array $config = []): self
    {
        return new self($config);
    }
}
