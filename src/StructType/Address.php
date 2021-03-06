<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for address StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Address extends AbstractStructBase
{
    /**
     * The companyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $companyName;
    /**
     * The lastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $lastName;
    /**
     * The firstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $firstName;
    /**
     * The line0
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line0;
    /**
     * The line1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line1;
    /**
     * The line2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line2;
    /**
     * The line3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line3;
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $countryCode;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The zipCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zipCode;
    /**
     * The phoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $phoneNumber;
    /**
     * The mobileNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mobileNumber;
    /**
     * The doorCode1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $doorCode1;
    /**
     * The doorCode2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $doorCode2;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
    /**
     * The intercom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $intercom;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * Constructor method for address
     * @uses Address::setCompanyName()
     * @uses Address::setLastName()
     * @uses Address::setFirstName()
     * @uses Address::setLine0()
     * @uses Address::setLine1()
     * @uses Address::setLine2()
     * @uses Address::setLine3()
     * @uses Address::setCountryCode()
     * @uses Address::setCity()
     * @uses Address::setZipCode()
     * @uses Address::setPhoneNumber()
     * @uses Address::setMobileNumber()
     * @uses Address::setDoorCode1()
     * @uses Address::setDoorCode2()
     * @uses Address::setEmail()
     * @uses Address::setIntercom()
     * @uses Address::setLanguage()
     * @param string $companyName
     * @param string $lastName
     * @param string $firstName
     * @param string $line0
     * @param string $line1
     * @param string $line2
     * @param string $line3
     * @param string $countryCode
     * @param string $city
     * @param string $zipCode
     * @param string $phoneNumber
     * @param string $mobileNumber
     * @param string $doorCode1
     * @param string $doorCode2
     * @param string $email
     * @param string $intercom
     * @param string $language
     */
    public function __construct($companyName = null, $lastName = null, $firstName = null, $line0 = null, $line1 = null, $line2 = null, $line3 = null, $countryCode = null, $city = null, $zipCode = null, $phoneNumber = null, $mobileNumber = null, $doorCode1 = null, $doorCode2 = null, $email = null, $intercom = null, $language = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setLine0($line0)
            ->setLine1($line1)
            ->setLine2($line2)
            ->setLine3($line3)
            ->setCountryCode($countryCode)
            ->setCity($city)
            ->setZipCode($zipCode)
            ->setPhoneNumber($phoneNumber)
            ->setMobileNumber($mobileNumber)
            ->setDoorCode1($doorCode1)
            ->setDoorCode2($doorCode2)
            ->setEmail($email)
            ->setIntercom($intercom)
            ->setLanguage($language);
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \ColissimoPostage\StructType\Address
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \ColissimoPostage\StructType\Address
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \ColissimoPostage\StructType\Address
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Get line0 value
     * @return string|null
     */
    public function getLine0()
    {
        return $this->line0;
    }
    /**
     * Set line0 value
     * @param string $line0
     * @return \ColissimoPostage\StructType\Address
     */
    public function setLine0($line0 = null)
    {
        // validation for constraint: string
        if (!is_null($line0) && !is_string($line0)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line0)), __LINE__);
        }
        $this->line0 = $line0;
        return $this;
    }
    /**
     * Get line1 value
     * @return string|null
     */
    public function getLine1()
    {
        return $this->line1;
    }
    /**
     * Set line1 value
     * @param string $line1
     * @return \ColissimoPostage\StructType\Address
     */
    public function setLine1($line1 = null)
    {
        // validation for constraint: string
        if (!is_null($line1) && !is_string($line1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line1)), __LINE__);
        }
        $this->line1 = $line1;
        return $this;
    }
    /**
     * Get line2 value
     * @return string|null
     */
    public function getLine2()
    {
        return $this->line2;
    }
    /**
     * Set line2 value
     * @param string $line2
     * @return \ColissimoPostage\StructType\Address
     */
    public function setLine2($line2 = null)
    {
        // validation for constraint: string
        if (!is_null($line2) && !is_string($line2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line2)), __LINE__);
        }
        $this->line2 = $line2;
        return $this;
    }
    /**
     * Get line3 value
     * @return string|null
     */
    public function getLine3()
    {
        return $this->line3;
    }
    /**
     * Set line3 value
     * @param string $line3
     * @return \ColissimoPostage\StructType\Address
     */
    public function setLine3($line3 = null)
    {
        // validation for constraint: string
        if (!is_null($line3) && !is_string($line3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line3)), __LINE__);
        }
        $this->line3 = $line3;
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \ColissimoPostage\StructType\Address
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \ColissimoPostage\StructType\Address
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \ColissimoPostage\StructType\Address
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $phoneNumber
     * @return \ColissimoPostage\StructType\Address
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get mobileNumber value
     * @return string|null
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }
    /**
     * Set mobileNumber value
     * @param string $mobileNumber
     * @return \ColissimoPostage\StructType\Address
     */
    public function setMobileNumber($mobileNumber = null)
    {
        // validation for constraint: string
        if (!is_null($mobileNumber) && !is_string($mobileNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobileNumber)), __LINE__);
        }
        $this->mobileNumber = $mobileNumber;
        return $this;
    }
    /**
     * Get doorCode1 value
     * @return string|null
     */
    public function getDoorCode1()
    {
        return $this->doorCode1;
    }
    /**
     * Set doorCode1 value
     * @param string $doorCode1
     * @return \ColissimoPostage\StructType\Address
     */
    public function setDoorCode1($doorCode1 = null)
    {
        // validation for constraint: string
        if (!is_null($doorCode1) && !is_string($doorCode1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($doorCode1)), __LINE__);
        }
        $this->doorCode1 = $doorCode1;
        return $this;
    }
    /**
     * Get doorCode2 value
     * @return string|null
     */
    public function getDoorCode2()
    {
        return $this->doorCode2;
    }
    /**
     * Set doorCode2 value
     * @param string $doorCode2
     * @return \ColissimoPostage\StructType\Address
     */
    public function setDoorCode2($doorCode2 = null)
    {
        // validation for constraint: string
        if (!is_null($doorCode2) && !is_string($doorCode2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($doorCode2)), __LINE__);
        }
        $this->doorCode2 = $doorCode2;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \ColissimoPostage\StructType\Address
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get intercom value
     * @return string|null
     */
    public function getIntercom()
    {
        return $this->intercom;
    }
    /**
     * Set intercom value
     * @param string $intercom
     * @return \ColissimoPostage\StructType\Address
     */
    public function setIntercom($intercom = null)
    {
        // validation for constraint: string
        if (!is_null($intercom) && !is_string($intercom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($intercom)), __LINE__);
        }
        $this->intercom = $intercom;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \ColissimoPostage\StructType\Address
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\Address
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
