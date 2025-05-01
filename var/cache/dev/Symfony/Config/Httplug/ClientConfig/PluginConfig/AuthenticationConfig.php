<?php

namespace Symfony\Config\Httplug\ClientConfig\PluginConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AuthenticationConfig 
{
    private $type;
    private $username;
    private $password;
    private $token;
    private $service;
    private $headerName;
    private $headerValue;
    private $params;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|'basic'|'bearer'|'wsse'|'service'|'query_param'|'header' $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function username($value): static
    {
        $this->_usedProperties['username'] = true;
        $this->username = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function password($value): static
    {
        $this->_usedProperties['password'] = true;
        $this->password = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function token($value): static
    {
        $this->_usedProperties['token'] = true;
        $this->token = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): static
    {
        $this->_usedProperties['service'] = true;
        $this->service = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function headerName($value): static
    {
        $this->_usedProperties['headerName'] = true;
        $this->headerName = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function headerValue($value): static
    {
        $this->_usedProperties['headerValue'] = true;
        $this->headerValue = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function params(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['params'] = true;
        $this->params = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('username', $value)) {
            $this->_usedProperties['username'] = true;
            $this->username = $value['username'];
            unset($value['username']);
        }

        if (array_key_exists('password', $value)) {
            $this->_usedProperties['password'] = true;
            $this->password = $value['password'];
            unset($value['password']);
        }

        if (array_key_exists('token', $value)) {
            $this->_usedProperties['token'] = true;
            $this->token = $value['token'];
            unset($value['token']);
        }

        if (array_key_exists('service', $value)) {
            $this->_usedProperties['service'] = true;
            $this->service = $value['service'];
            unset($value['service']);
        }

        if (array_key_exists('header_name', $value)) {
            $this->_usedProperties['headerName'] = true;
            $this->headerName = $value['header_name'];
            unset($value['header_name']);
        }

        if (array_key_exists('header_value', $value)) {
            $this->_usedProperties['headerValue'] = true;
            $this->headerValue = $value['header_value'];
            unset($value['header_value']);
        }

        if (array_key_exists('params', $value)) {
            $this->_usedProperties['params'] = true;
            $this->params = $value['params'];
            unset($value['params']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['username'])) {
            $output['username'] = $this->username;
        }
        if (isset($this->_usedProperties['password'])) {
            $output['password'] = $this->password;
        }
        if (isset($this->_usedProperties['token'])) {
            $output['token'] = $this->token;
        }
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }
        if (isset($this->_usedProperties['headerName'])) {
            $output['header_name'] = $this->headerName;
        }
        if (isset($this->_usedProperties['headerValue'])) {
            $output['header_value'] = $this->headerValue;
        }
        if (isset($this->_usedProperties['params'])) {
            $output['params'] = $this->params;
        }

        return $output;
    }

}
