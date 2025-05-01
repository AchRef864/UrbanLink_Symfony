<?php

namespace Symfony\Config\Httplug\ClientConfig\PluginConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ResponseSeekableBodyConfig 
{
    private $enabled;
    private $useFileBuffer;
    private $memoryBufferSize;
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
     * Whether to use a file buffer if the stream is too big for a memory buffer
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useFileBuffer($value): static
    {
        $this->_usedProperties['useFileBuffer'] = true;
        $this->useFileBuffer = $value;

        return $this;
    }

    /**
     * Maximum memory size in bytes before using a file buffer if use_file_buffer is true. Defaults to 2097152 (2 MB)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function memoryBufferSize($value): static
    {
        $this->_usedProperties['memoryBufferSize'] = true;
        $this->memoryBufferSize = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('use_file_buffer', $value)) {
            $this->_usedProperties['useFileBuffer'] = true;
            $this->useFileBuffer = $value['use_file_buffer'];
            unset($value['use_file_buffer']);
        }

        if (array_key_exists('memory_buffer_size', $value)) {
            $this->_usedProperties['memoryBufferSize'] = true;
            $this->memoryBufferSize = $value['memory_buffer_size'];
            unset($value['memory_buffer_size']);
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
        if (isset($this->_usedProperties['useFileBuffer'])) {
            $output['use_file_buffer'] = $this->useFileBuffer;
        }
        if (isset($this->_usedProperties['memoryBufferSize'])) {
            $output['memory_buffer_size'] = $this->memoryBufferSize;
        }

        return $output;
    }

}
