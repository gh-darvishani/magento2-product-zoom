<?php
/**
 * Gallery
 *
 * @copyright Copyright © 2021 Staempfli AG. All rights reserved.
 * @author    juan.alonso@staempfli.com
 */

namespace Darvishani\Zoom\Block\Product\View;


use Magento\Catalog\Block\Product\Context;
use Magento\Catalog\Model\Product\Gallery\ImagesConfigFactoryInterface;
use Magento\Catalog\Model\Product\Image\UrlBuilder;
use Magento\Framework\Json\EncoderInterface;
use Magento\Framework\Stdlib\ArrayUtils;

class Gallery extends  \Magento\Catalog\Block\Product\View\Gallery
{

    public $helper;
    public function __construct(
        \Darvishani\Zoom\Helper\Data $helper,
        Context $context, ArrayUtils $arrayUtils, EncoderInterface $jsonEncoder, array $data = [], ImagesConfigFactoryInterface $imagesConfigFactory = null, array $galleryImagesConfig = [], UrlBuilder $urlBuilder = null)
    {
    parent::__construct($context, $arrayUtils, $jsonEncoder, $data, $imagesConfigFactory, $galleryImagesConfig, $urlBuilder);
    $this->helper=$helper;
    }

    /**
     * @param string $template
     */
    public function setTemplate($template): void
    {

        if($this->helper->isEnable()){
            $this->_template="Darvishani_Zoom::zoom.phtml";
        }else{
            $this->_template = $template;
        }
    }


}
