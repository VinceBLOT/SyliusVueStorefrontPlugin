<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Factory\Cart\Totals;

use BitBag\SyliusVueStorefrontPlugin\View\Cart\Totals\TaxGrandtotalDetailsView;
use Sylius\Component\Core\Model\OrderInterface as SyliusOrderInterface;

final class TaxGrandtotalDetailsViewFactory implements TaxGrandtotalDetailsViewFactoryInterface
{
    /** @var string */
    private $taxGrandtotalDetailsViewClass;

    public function __construct(string $taxGrandtotalDetailsViewClass)
    {
        $this->taxGrandtotalDetailsViewClass = $taxGrandtotalDetailsViewClass;
    }

    public function create(SyliusOrderInterface $syliusOrder): TaxGrandtotalDetailsView
    {
        /** @var TaxGrandtotalDetailsView $taxGrandtotalDetailsView */
        $taxGrandtotalDetailsView = new $this->taxGrandtotalDetailsViewClass();

        return $taxGrandtotalDetailsView;
    }
}
