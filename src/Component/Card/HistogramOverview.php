<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Card;

/**
 * Class DashliteHistogramOverviewCard.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class HistogramOverview
{
    public ?string $label = null;

    public ?string $description = null;

    public ?string $tooltip = null;

    public array $month = [];

    public array $week = [];

    public ?string $chart = null;
}
