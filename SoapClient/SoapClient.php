<?php

namespace SoapClient;

/**
 * This class can be overridden at your will.
 * Its only purpose is to show you how you can use your own SoapClient client.
 */
class SoapClient extends \SoapClient
{
    /**
     * Final XML request
     * @var string
     */
    public $lastRequest;

    /**
     * @see SoapClient::__doRequest()
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = null)
    {
        /**
         * Colissimo does not support type definition
         */
        $request = str_replace(' xsi:type="ns1:outputFormat"', '', $request);
        $request = str_replace(' xsi:type="ns1:letter"', '', $request);
        $request = str_replace(' xsi:type="ns1:address"', '', $request);
        $request = str_replace(' xsi:type="ns1:sender"', '', $request);
        /**
         * Colissimo returns headers and boundary parts
         */
        $response = parent::__doRequest($this->lastRequest = $request, $location, $action, $version, $oneWay);
        return $response;
    }
    /**
     * Override it in order to return the final XML Request
     * @see SoapClient::__getLastRequest()
     * @return string
     */
    public function __getLastRequest()
    {
        return $this->lastRequest;
    }
}
