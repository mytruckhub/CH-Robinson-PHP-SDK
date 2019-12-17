<?php

namespace CHRobinson\Core;

class SandboxEnvironment extends CHRobinsonEnvironment
{
    public function __construct($clientId, $clientSecret)
    {
        parent::__construct($clientId, $clientSecret);
    }

    public function baseUrl()
    {
        return "https://sandbox-api.navisphere.com";
    }
}
