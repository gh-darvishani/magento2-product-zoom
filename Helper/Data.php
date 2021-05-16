<?php

namespace Darvishani\Zoom\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    const XML_CONFIG_ENABLE="enable";
    const XML_CONFIG_MINI_HIDDEN="mini_hidden";
    const XML_CONFIG_ZOOM_CONTAINER_W="zoom_container_w";
    const XML_CONFIG_ZOOM_CONTAINER_H="zoom_container_h";
    const XML_CONFIG_ZOOM_CONTAINER_POSITION_T="zoom_container_position_t";
    const XML_CONFIG_ZOOM_CONTAINER_POSITION_R="zoom_container_position_r";
    const XML_CONFIG_ZOOM_MAGNIFICATION_WIDTH="zoom_magnification_width";
    const XML_CONFIG_ZOOM_MAGNIFICATION_HEIGHT="zoom_magnification_height";
    const XML_CONFIG_MINI_MAGNIFICATION_DEGREE="magnification_degree";
    const XML_CONFIG_DEFAULT="darvishani_zoom/zoom/";


    private function getConfig($flag){
        return $this->scopeConfig->getValue(self::XML_CONFIG_DEFAULT.$flag);
    }

    public function isEnable(){
        return $this->getConfig(self::XML_CONFIG_ENABLE);
    }
    public function getMiniWithToHiddenZoom(){
        return $this->getConfig(self::XML_CONFIG_MINI_HIDDEN);
    }
    public function getMagnificationDegree(){
        return $this->getConfig(self::XML_CONFIG_MINI_MAGNIFICATION_DEGREE);
    }
    public function getZoomContainerWidth(){
        return $this->getConfig(self::XML_CONFIG_ZOOM_CONTAINER_W);
    }
    public function getZoomContainerHeight(){
        return $this->getConfig(self::XML_CONFIG_ZOOM_CONTAINER_H);
    }

    public function getZoomContainerPositionTop(){
        return $this->getConfig(self::XML_CONFIG_ZOOM_CONTAINER_POSITION_T);
    }
    public function getZoomContainerPositionRight(){
        return $this->getConfig(self::XML_CONFIG_ZOOM_CONTAINER_POSITION_R);
    }

    public function getZoomMagnificationWidth(){
        return $this->getConfig(self::XML_CONFIG_ZOOM_MAGNIFICATION_WIDTH);
    }
    public function getZoomMagnificationHeight(){
        return $this->getConfig(self::XML_CONFIG_ZOOM_MAGNIFICATION_HEIGHT);
    }

}
