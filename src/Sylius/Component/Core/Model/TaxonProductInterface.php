<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Core\Model;

/**
 * @author Steffen Brem <steffenbrem@gmail.com>
 */
interface TaxonProductInterface
{
    /**
     * @return TaxonInterface
     */
    public function getTaxon();

    /**
     * @param TaxonInterface $taxon
     */
    public function setTaxon(TaxonInterface $taxon);

    /**
     * @return ProductInterfacet
     */
    public function getProduct();

    /**
     * @param ProductInterface $product
     */
    public function setProduct(ProductInterface $product);

    /**
     * @return integer
     */
    public function getPosition();

    /**
     * @param integer $position
     */
    public function setPosition($position);
}
