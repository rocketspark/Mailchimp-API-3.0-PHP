<?php

namespace MailchimpAPI;

/**
 * Class Account
 * is a representation of the root of the mailchimp api
 * @package Mailchimp_API
 */
class Account extends Mailchimp
{
    /**
     * Account constructor.
     * @param $apikey
     * @throws Library_Exception
     */
    public function __construct($apikey)
    {
        parent::__construct($apikey);
            $this->request->appendToEndpoint('/');
    }
}
