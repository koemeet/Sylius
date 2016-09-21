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

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Attribute\Model\AttributeValueInterface;
use Sylius\Component\Channel\Model\ChannelInterface as BaseChannelInterface;
use Sylius\Component\Product\Model\ProductAssociationInterface;
use Sylius\Component\Resource\Model\TranslationInterface;
use Sylius\Component\Review\Model\ReviewInterface;
use Sylius\Component\Shipping\Model\ShippingCategoryInterface;
use Sylius\Component\Taxonomy\Model\TaxonInterface as BaseTaxonInterface;
use Sylius\Component\Variation\Model\OptionInterface;
use Sylius\Component\Variation\Model\VariantInterface;
use Sylius\Component\Archetype\Model\ArchetypeInterface as BaseArchetypeInterface;

/**
 * @author Steffen Brem <steffenbrem@gmail.com>
 */
class TaxonProduct implements TaxonProductInterface, ProductInterface
{
    /**
     * @var TaxonInterface
     */
    protected $taxon;

    /**
     * @var ProductInterface
     */
    protected $product;

    /**
     * @var integer
     */
    protected $position = -1;

    /**
     * @param TaxonInterface $taxon
     * @param ProductInterface $product
     */
    public function __construct(TaxonInterface $taxon, ProductInterface $product)
    {
        $this->taxon = $taxon;
        $this->product = $product;
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxon()
    {
        return $this->taxon;
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxon(TaxonInterface $taxon)
    {
        $this->taxon = $taxon;
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * {@inheritdoc}
     */
    public function setProduct(ProductInterface $product)
    {
        $this->product = $product;
    }

    /**
     * {@inheritdoc}
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * {@inheritdoc}
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getArchetype()
    {
        return $this->product->getArchetype();
    }

    public function setArchetype(BaseArchetypeInterface $archetype = null)
    {
        $this->product->setArchetype($archetype);
    }

    public function getAttributes()
    {
        return $this->product->getAttributes();
    }

    public function setAttributes(Collection $attributes)
    {
        $this->product->setAttributes($attributes);
    }

    public function addAttribute(AttributeValueInterface $attribute)
    {
        $this->product->addAttribute($attribute);
    }

    public function removeAttribute(AttributeValueInterface $attribute)
    {
        $this->product->removeAttribute($attribute);
    }

    public function hasAttribute(AttributeValueInterface $attribute)
    {
        return $this->product->hasAttribute($attribute);
    }

    public function hasAttributeByCode($attributeCode)
    {
        return $this->product->hasAttributeByCode($attributeCode);
    }

    public function getAttributeByCode($attributeCode)
    {
        return $this->product->getAttributeByCode($attributeCode);
    }

    public function getChannels()
    {
        return $this->product->getChannels();
    }

    public function setChannels(Collection $collection)
    {
        $this->product->setChannels($collection);
    }

    public function hasChannel(BaseChannelInterface $channel)
    {
        return $this->product->hasChannel($channel);
    }

    public function addChannel(BaseChannelInterface $channel)
    {
        $this->product->addChannel($channel);
    }

    public function removeChannel(BaseChannelInterface $channel)
    {
        $this->product->removeChannel($channel);
    }

    public function getCode()
    {
        return $this->product->getCode();
    }

    public function setCode($code)
    {
        $this->product->setCode($code);
    }

    public function getMetadataClassIdentifier()
    {
        return $this->product->getMetadataClassIdentifier();
    }

    public function getMetadataIdentifier()
    {
        return $this->product->getMetadataIdentifier();
    }

    public function isAvailable()
    {
        return $this->product->isAvailable();
    }

    public function getAvailableOn()
    {
        return $this->product->getAvailableOn();
    }

    public function setAvailableOn(\DateTime $availableOn = null)
    {
        $this->product->setAvailableOn($availableOn);
    }

    public function getAvailableUntil()
    {
        return $this->product->getAvailableUntil();
    }

    public function setAvailableUntil(\DateTime $availableUntil = null)
    {
        $this->product->setAvailableUntil($availableUntil);
    }

    public function addAssociation(ProductAssociationInterface $association)
    {
        $this->product->addAssociation($association);
    }

    public function getAssociations()
    {
        return $this->product->getAssociations();
    }

    public function removeAssociation(ProductAssociationInterface $association)
    {
        return $this->product->removeAssociation($association);
    }

    public function isSimple()
    {
        return $this->product->isSimple();
    }

    public function getMasterVariant()
    {
        return $this->product->getMasterVariant();
    }

    public function setMasterVariant(ProductVariantInterface $variant)
    {
        $this->product->setMasterVariant($variant);
    }

    public function getVariantSelectionMethod()
    {
        return $this->product->getVariantSelectionMethod();
    }

    public function setVariantSelectionMethod($variantSelectionMethod)
    {
        $this->product->setVariantSelectionMethod($variantSelectionMethod);
    }

    public function isVariantSelectionMethodChoice()
    {
        return $this->product->isVariantSelectionMethodChoice();
    }

    public function getVariantSelectionMethodLabel()
    {
        return $this->product->getVariantSelectionMethodLabel();
    }

    public function getShortDescription()
    {
        return $this->product->getShortDescription();
    }

    public function setShortDescription($shortDescription)
    {
        $this->product->setShortDescription($shortDescription);
    }

    public function getShippingCategory()
    {
        return $this->product->getShippingCategory();
    }

    public function setShippingCategory(ShippingCategoryInterface $category = null)
    {
        $this->product->setShippingCategory($category);
    }

    public function getMainTaxon()
    {
        return $this->product->getMainTaxon();
    }

    public function setMainTaxon(TaxonInterface $mainTaxon = null)
    {
        $this->product->setMainTaxon($mainTaxon);
    }

    public function getFirstVariant()
    {
        return $this->product->getFirstVariant();
    }

    public function getPrice()
    {
        return $this->product->getPrice();
    }

    public function getImage()
    {
        return $this->product->getImage();
    }

    public function getName()
    {
        return $this->product->getName();
    }

    public function setName($name)
    {
        $this->product->setName($name);
    }

    public function getDescription()
    {
        return $this->product->getDescription();
    }

    public function setDescription($description)
    {
        $this->product->setDescription($description);
    }

    public function getMetaKeywords()
    {
        return $this->product->getMetaKeywords();
    }

    public function setMetaKeywords($metaKeywords)
    {
        $this->product->setMetaKeywords($metaKeywords);
    }

    public function getMetaDescription()
    {
        return $this->product->getMetaDescription();
    }

    public function setMetaDescription($metaDescription)
    {
        $this->product->setMetaDescription($metaDescription);
    }

    public function getId()
    {
        return $this->product->getId();
    }

    public function getReviews()
    {
        return $this->product->getReviews();
    }

    public function addReview(ReviewInterface $review)
    {
        return $this->product->addReview($review);
    }

    public function removeReview(ReviewInterface $review)
    {
        return $this->product->removeReview($review);
    }

    public function setAverageRating($averageRating)
    {
        $this->product->setAverageRating($averageRating);
    }

    public function getAverageRating()
    {
        return $this->product->getAverageRating();
    }

    public function getSlug()
    {
        return $this->product->getSlug();
    }

    public function setSlug($slug = null)
    {
        $this->product->setSlug($slug);
    }

    public function getTaxons()
    {
        return $this->product->getTaxons();
    }

    public function setTaxons(Collection $collection)
    {
        $this->product->setTaxons($collection);
    }

    public function hasTaxon(BaseTaxonInterface $taxon)
    {
        return $this->product->hasTaxon($taxon);
    }

    public function addTaxon(BaseTaxonInterface $taxon)
    {
        $this->product->addTaxon($taxon);
    }

    public function removeTaxon(BaseTaxonInterface $taxon)
    {
        $this->product->removeTaxon($taxon);
    }

    public function getCreatedAt()
    {
        return $this->product->getCreatedAt();
    }

    public function getUpdatedAt()
    {
        return $this->product->getUpdatedAt();
    }

    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->product->setCreatedAt($createdAt);
    }

    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->product->setUpdatedAt($updatedAt);
    }

    public function isEnabled()
    {
        return $this->product->isEnabled();
    }

    public function setEnabled($enabled)
    {
        $this->product->setEnabled($enabled);
    }

    public function enable()
    {
        $this->product->enable();
    }

    public function disable()
    {
        $this->product->disable();
    }

    public function translate($locale = null)
    {
        $this->product->translate($locale);
    }

    public function hasTranslation(TranslationInterface $translation)
    {
        $this->product->hasTranslation($translation);
    }

    public function setCurrentLocale($locale)
    {
        $this->product->setCurrentLocale($locale);
    }

    public function setFallbackLocale($locale)
    {
        $this->product->setFallbackLocale($locale);
    }

    public function getTranslations()
    {
        return $this->product->getTranslations();
    }

    public function addTranslation(TranslationInterface $translation)
    {
        $this->product->addTranslation($translation);
    }

    public function removeTranslation(TranslationInterface $translation)
    {
        $this->product->removeTranslation($translation);
    }

    public function hasVariants()
    {
        return $this->product->hasVariants();
    }

    public function getVariants()
    {
        return $this->product->getVariants();
    }

    public function setVariants(Collection $variants)
    {
        $this->product->setVariants($variants);
    }

    public function addVariant(VariantInterface $variant)
    {
        $this->product->addVariant($variant);
    }

    public function removeVariant(VariantInterface $variant)
    {
        $this->product->removeVariant($variant);
    }

    public function hasVariant(VariantInterface $variant)
    {
        return $this->product->hasVariant($variant);
    }

    public function hasOptions()
    {
        return $this->product->hasOptions();
    }

    public function getOptions()
    {
        return $this->product->getOptions();
    }

    public function setOptions(Collection $options)
    {
        $this->product->setOptions($options);
    }

    public function addOption(OptionInterface $option)
    {
        $this->product->addOption($option);
    }

    public function removeOption(OptionInterface $option)
    {
        $this->product->removeOption($option);
    }

    public function hasOption(OptionInterface $option)
    {
        $this->product->hasOption($option);
    }
}
