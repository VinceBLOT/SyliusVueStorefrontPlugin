<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Request\Cart;

use BitBag\SyliusVueStorefrontPlugin\Command\Cart\CreateCart;
use Symfony\Component\HttpFoundation\Request;

final class CreateCartRequest
{
    /** @var string|null */
    private $token;

    /** @var string */
    private $cartId;

    public function __construct(Request $request)
    {
        $this->token = $request->query->get('token');
//        $this->cartId = $this->generator ..
    }

    public function getCommand(): CreateCart
    {
        return new CreateCart($this->token, $this->cartId);
    }
}
