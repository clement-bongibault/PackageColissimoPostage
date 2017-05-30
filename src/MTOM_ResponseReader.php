<?php


namespace ColissimoPostage;

use WsdlToPhp\PackageBase\Utils;

class MTOM_ResponseReader
{
    const CONTENT_TYPE = 'Content-Type: application/xop+xml;';
    const UUID = '/--uuid:/'; //This is the separator of each part of the response
    const CONTENT = 'Content-';
    public $attachments = array();
    public $soapResponse = array();
    public $uuid = null;

    public function __construct($response)
    {
        if (strpos($response, self::CONTENT_TYPE) !== FALSE) {
            $this->parseResponse($response);
        } else {
            throw new Exception ('This response is not : ' . CONTENT_TYPE);
        }
    }

    private function parseResponse($response)
    {
        $content = array();
        $matches = array();
        preg_match_all(self::UUID, $response, $matches, PREG_OFFSET_CAPTURE);
        for ($i = 0; $i < count($matches [0]) - 1; $i++) {
            if ($i + 1 < count($matches [0])) {
                $content [$i] = substr($response, $matches [0] [$i] [1], $matches [0] [$i + 1] [1] - $matches [0] [$i] [1]);
            } else {
                $content [$i] = substr($response, $matches [0] [$i] [1], strlen($response));
            }
        }
        foreach ($content as $part) {
            if ($this->uuid == null) {
                $uuidStart = 0;
                $uuidEnd = 0;
                $uuidStart = strpos($part, self::UUID, 0) + strlen(self::UUID);
                $uuidEnd = strpos($part, "\r\n", $uuidStart);
                $this->uuid = substr($part, $uuidStart, $uuidEnd - $uuidStart);
            }
            $header = $this->extractHeader($part);
            if (count($header) > 0) {
                if (strpos($header['Content-Type'], 'type="text/xml"') !== FALSE) {
                    $this->soapResponse['header'] = $header;
                    $this->soapResponse['data'] = trim(substr($part, $header['offsetEnd']));
                } else {
                    $attachment['header'] = $header;
                    $attachment['data'] = trim(substr($part, $header['offsetEnd']));
                    array_push($this->attachments, $attachment);
                }
            }
        }
    }

    /** * Exclude the header from the Web Service response * @param string $part * @return array $header */
    private function extractHeader($part)
    {
        $header = array();
        $headerLineStart = strpos($part, self::CONTENT, 0);
        $endLine = 0;
        while ($headerLineStart !== FALSE) {
            $header['offsetStart'] = $headerLineStart;
            $endLine = strpos($part, "\r\n", $headerLineStart);
            $headerLine = explode(': ', substr($part, $headerLineStart, $endLine - $headerLineStart));
            $header[$headerLine[0]] = $headerLine[1];
            $headerLineStart = strpos($part, self::CONTENT, $endLine);
        }
        $header['offsetEnd'] = $endLine;
        return $header;
    }

    public function soapResponseToXml(){

        $response = $this->soapResponse['data'];
        /**
         * So we only keep the XML envelope
         */
        $response = substr($response, strpos($response, '<soap:Envelope '), strrpos($response, '</soap:Envelope>') - strpos($response, '<soap:Envelope ') + strlen('</soap:Envelope>'));

        /**
         * And we remove xop:Include definitions
         */
        if(strpos($response, '<label>' !== false))
            $response = substr_replace($response, '', strpos($response, '<label>'), strrpos($response, '</label>') - strpos($response, '<label>') + strlen('</label>'));

        $response = '<?xml version="1.0" encoding="UTF-8"?>' . trim($response);

        return Utils::getFormatedXml($response, true);
    }
}



