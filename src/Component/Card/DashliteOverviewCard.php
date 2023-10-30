<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Component\Card;

/**
 * Class OverviewCard.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
class DashliteOverviewCard
{
    public string $label;
    public ?float $value = null;
    public ?float $ratio = null;
    public ?string $chart = null;
    public ?string $info = 'Aucun changement';
}
