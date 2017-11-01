<?php
/*
 * TelstraMessagingAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace TelstraMessagingAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class SendMMSRequest implements JsonSerializable
{
    /**
     * This will be the source address that will be displayed on the
     * receiving device. If it is not present then it will default to the MSISDN
     * assigned to the app. If replyRequest is set to true, then this field will
     * be ignored.
     * @required
     * @var string $from public property
     */
    public $from;

    /**
     * This is the destination address.
     * @required
     * @var string $to public property
     */
    public $to;

    /**
     * The subject that will be used in an MMS message.
     * @required
     * @var string $subject public property
     */
    public $subject;

    /**
     * If set to true, the reply message functionality will be implemented
     * and the to address will be ignored if present.
     * @required
     * @var bool $replyRequest public property
     */
    public $replyRequest;

    /**
     * An Array of content that will be sent in an MMS message. If this
     * array is present it will cause the “body” element to be ignored, and the
     * message will be sent as an MMS.
     * @required
     * @maps MMSContent
     * @var MMSContent[] $mMSContent public property
     */
    public $mMSContent;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $from         Initialization value for $this->from
     * @param string $to           Initialization value for $this->to
     * @param string $subject      Initialization value for $this->subject
     * @param bool   $replyRequest Initialization value for $this->replyRequest
     * @param array  $mMSContent   Initialization value for $this->mMSContent
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->from         = func_get_arg(0);
            $this->to           = func_get_arg(1);
            $this->subject      = func_get_arg(2);
            $this->replyRequest = func_get_arg(3);
            $this->mMSContent   = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['from']         = $this->from;
        $json['to']           = $this->to;
        $json['subject']      = $this->subject;
        $json['replyRequest'] = $this->replyRequest;
        $json['MMSContent']   = $this->mMSContent;

        return $json;
    }
}