<?php

namespace Symfony\Config\Httplug\ClientConfig\PluginConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ThrottleConfig 
{
    private $enabled;
    private $name;
    private $key;
    private $tokens;
    private $maxTime;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * Rate limiter service name from symfony/rate-limiter configuration. E.g. for a rate limiter http_client you specify limiter.http_client here
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): static
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * Key to avoid sharing this rate limiter with other clients or other services. You can use the name of the client for example.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function key($value): static
    {
        $this->_usedProperties['key'] = true;
        $this->key = $value;

        return $this;
    }

    /**
     * How many tokens spending per request
     * @default 1
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function tokens($value): static
    {
        $this->_usedProperties['tokens'] = true;
        $this->tokens = $value;

        return $this;
    }

    /**
     * Maximum accepted waiting time in seconds
     * @default null
     * @param ParamConfigurator|float $value
     * @return $this
     */
    public function maxTime($value): static
    {
        $this->_usedProperties['maxTime'] = true;
        $this->maxTime = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('key', $value)) {
            $this->_usedProperties['key'] = true;
            $this->key = $value['key'];
            unset($value['key']);
        }

        if (array_key_exists('tokens', $value)) {
            $this->_usedProperties['tokens'] = true;
            $this->tokens = $value['tokens'];
            unset($value['tokens']);
        }

        if (array_key_exists('max_time', $value)) {
            $this->_usedProperties['maxTime'] = true;
            $this->maxTime = $value['max_time'];
            unset($value['max_time']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['key'])) {
            $output['key'] = $this->key;
        }
        if (isset($this->_usedProperties['tokens'])) {
            $output['tokens'] = $this->tokens;
        }
        if (isset($this->_usedProperties['maxTime'])) {
            $output['max_time'] = $this->maxTime;
        }

        return $output;
    }

}
