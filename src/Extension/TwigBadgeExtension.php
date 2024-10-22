<?php

declare(strict_types=1);

namespace Devscast\Bundle\DashliteBundle\Extension;

use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * class TwigBadgeExtension.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
class TwigBadgeExtension extends AbstractExtension
{
    public function __construct(
        private readonly TranslatorInterface $translator
    ) {
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('badge', [$this, 'badge'], [
                'is_safe' => ['html'],
            ]),
            new TwigFilter('boolean', [$this, 'boolean'], [
                'is_safe' => ['html'],
            ]),
        ];
    }

    public function boolean(int $value, ?string $true = null, ?string $false = null): string
    {
        $true ??= 'OUI';
        $false ??= 'NON';

        if ($value === 1) {
            return <<< HTML
                <span class="text-success fw-bold">{$true}</span>
            HTML;
        }

        return <<< HTML
            <span class="text-danger fw-bold">{$false}</span>
            HTML;
    }

    public function badge(string $label, array $states = [], string $default = 'primary', string $style = 'dim'): string
    {
        $label = $this->translator->trans($label);
        $state = match (isset($states[$label])) {
            true => $states[$label],
            default => $default,
        };

        return <<< HTML
            <span aria-label="{$label}" class="badge badge-{$style} bg-{$state}">
                {$label}
            </span>
        HTML;
    }
}
