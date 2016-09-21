<?php

namespace spec\Sylius\Component\Core\Model;

use Sylius\Component\Core\Model\ProductInterface;
use Sylius\Component\Core\Model\TaxonInterface;
use Sylius\Component\Core\Model\TaxonProductInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @author Steffen Brem <steffenbrem@gmail.com>
 */
class TaxonProductSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Component\Core\Model\TaxonProduct');
    }

    function it_implements_taxon_product_interface()
    {
        $this->shouldImplement(TaxonProductInterface::class);
    }

    function it_implements_product_interface()
    {
        $this->shouldImplement(ProductInterface::class);
    }

    function its_taxon_is_mutable(TaxonInterface $taxon)
    {
        $this->setTaxon($taxon);
        $this->getTaxon()->shouldReturn($taxon);
    }

    function its_product_is_mutable(ProductInterface $product)
    {
        $this->setProduct($product);
        $this->getProduct()->shouldReturn($product);
    }

    function its_position_is_mutable()
    {
        $this->setPosition(2);
        $this->getPosition()->shouldReturn(2);
    }

    function it_proxies_product_interface_to_product_property(ProductInterface $product)
    {
        $product->getName()->willReturn('Chossel een beetje');
        $product->getDescription()->willReturn('Description');
        $product->getPrice()->willReturn(1900);
        $this->setProduct($product);


        $this->getName()->shouldReturn('Chossel een beetje');
        $this->getDescription()->shouldReturn('Description');
        $this->getPrice()->shouldReturn(1900);
    }
}
