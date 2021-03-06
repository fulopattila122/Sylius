<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This component was inspired by FOS User-Bundle
 */

namespace Sylius\Component\User\Canonicalizer;

/**
 * @author Łukasz Chruściel <lukasz.chrusciel@lakion.com>
 */
interface CanonicalizerInterface
{
    public function canonicalize($string);
}
