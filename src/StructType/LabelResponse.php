<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for labelResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class LabelResponse extends AbstractStructBase
{
    /**
     * The label
     * Meta informations extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var base64Binary
     */
    public $label;
    /**
     * The cn23
     * Meta informations extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var base64Binary
     */
    public $cn23;
    /**
     * The parcelNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parcelNumber;
    /**
     * The parcelNumberPartner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parcelNumberPartner;
    /**
     * The pdfUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pdfUrl;
    /**
     * Constructor method for labelResponse
     * @uses LabelResponse::setLabel()
     * @uses LabelResponse::setCn23()
     * @uses LabelResponse::setParcelNumber()
     * @uses LabelResponse::setParcelNumberPartner()
     * @uses LabelResponse::setPdfUrl()
     * @param base64Binary $label
     * @param base64Binary $cn23
     * @param string $parcelNumber
     * @param string $parcelNumberPartner
     * @param string $pdfUrl
     */
    public function __construct(base64Binary $label = null, base64Binary $cn23 = null, $parcelNumber = null, $parcelNumberPartner = null, $pdfUrl = null)
    {
        $this
            ->setLabel($label)
            ->setCn23($cn23)
            ->setParcelNumber($parcelNumber)
            ->setParcelNumberPartner($parcelNumberPartner)
            ->setPdfUrl($pdfUrl);
    }
    /**
     * Get label value
     * @return base64Binary|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param base64Binary $label
     * @return \ColissimoPostage\StructType\LabelResponse
     */
    public function setLabel(base64Binary $label = null)
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Get cn23 value
     * @return base64Binary|null
     */
    public function getCn23()
    {
        return $this->cn23;
    }
    /**
     * Set cn23 value
     * @param base64Binary $cn23
     * @return \ColissimoPostage\StructType\LabelResponse
     */
    public function setCn23(base64Binary $cn23 = null)
    {
        $this->cn23 = $cn23;
        return $this;
    }
    /**
     * Get parcelNumber value
     * @return string|null
     */
    public function getParcelNumber()
    {
        return $this->parcelNumber;
    }
    /**
     * Set parcelNumber value
     * @param string $parcelNumber
     * @return \ColissimoPostage\StructType\LabelResponse
     */
    public function setParcelNumber($parcelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parcelNumber)), __LINE__);
        }
        $this->parcelNumber = $parcelNumber;
        return $this;
    }
    /**
     * Get parcelNumberPartner value
     * @return string|null
     */
    public function getParcelNumberPartner()
    {
        return $this->parcelNumberPartner;
    }
    /**
     * Set parcelNumberPartner value
     * @param string $parcelNumberPartner
     * @return \ColissimoPostage\StructType\LabelResponse
     */
    public function setParcelNumberPartner($parcelNumberPartner = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumberPartner) && !is_string($parcelNumberPartner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parcelNumberPartner)), __LINE__);
        }
        $this->parcelNumberPartner = $parcelNumberPartner;
        return $this;
    }
    /**
     * Get pdfUrl value
     * @return string|null
     */
    public function getPdfUrl()
    {
        return $this->pdfUrl;
    }
    /**
     * Set pdfUrl value
     * @param string $pdfUrl
     * @return \ColissimoPostage\StructType\LabelResponse
     */
    public function setPdfUrl($pdfUrl = null)
    {
        // validation for constraint: string
        if (!is_null($pdfUrl) && !is_string($pdfUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pdfUrl)), __LINE__);
        }
        $this->pdfUrl = $pdfUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\LabelResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}