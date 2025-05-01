<?php

namespace Symfony\Config\Httplug\ClientConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'AuthenticationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'CookieConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HistoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'DecoderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'LoggerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'RedirectConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'RetryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'StopwatchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ErrorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ThrottleConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ReferenceConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ConfiguratorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'AddHostConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'AddPathConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'BaseUriConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ContentTypeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderAppendConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderDefaultsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderSetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderRemoveConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'QueryDefaultsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'RequestSeekableBodyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ResponseSeekableBodyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'VcrConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PluginConfig 
{
    private $authentication;
    private $cache;
    private $cookie;
    private $history;
    private $decoder;
    private $logger;
    private $redirect;
    private $retry;
    private $stopwatch;
    private $error;
    private $throttle;
    private $reference;
    private $configurator;
    private $addHost;
    private $addPath;
    private $baseUri;
    private $contentType;
    private $headerAppend;
    private $headerDefaults;
    private $headerSet;
    private $headerRemove;
    private $queryDefaults;
    private $requestSeekableBody;
    private $responseSeekableBody;
    private $vcr;
    private $_usedProperties = [];

    public function authentication(string $name, array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\AuthenticationConfig
    {
        if (!isset($this->authentication[$name])) {
            $this->_usedProperties['authentication'] = true;
            $this->authentication[$name] = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AuthenticationConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "authentication()" has already been initialized. You cannot pass values the second time you call authentication().');
        }

        return $this->authentication[$name];
    }

    /**
     * @template TValue
     * @param TValue $value
     * Configure HTTP caching, requires the php-http/cache-plugin package
     * @default {"enabled":false,"stream_factory":"httplug.psr17_stream_factory","config":{"blacklisted_paths":[],"methods":["GET","HEAD"],"cache_listeners":[]}}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig : static)
     */
    public function cache(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = $value;

            return $this;
        }

        if (!$this->cache instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }

        return $this->cache;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig : static)
     */
    public function cookie(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = $value;

            return $this;
        }

        if (!$this->cookie instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cookie()" has already been initialized. You cannot pass values the second time you call cookie().');
        }

        return $this->cookie;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig : static)
     */
    public function history(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['history'] = true;
            $this->history = $value;

            return $this;
        }

        if (!$this->history instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig) {
            $this->_usedProperties['history'] = true;
            $this->history = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "history()" has already been initialized. You cannot pass values the second time you call history().');
        }

        return $this->history;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"use_content_encoding":true}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig : static)
     */
    public function decoder(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = $value;

            return $this;
        }

        if (!$this->decoder instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "decoder()" has already been initialized. You cannot pass values the second time you call decoder().');
        }

        return $this->decoder;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"logger":"logger","formatter":null}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig : static)
     */
    public function logger(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = $value;

            return $this;
        }

        if (!$this->logger instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig) {
            $this->_usedProperties['logger'] = true;
            $this->logger = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "logger()" has already been initialized. You cannot pass values the second time you call logger().');
        }

        return $this->logger;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"preserve_header":true,"use_default_for_multiple":true}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig : static)
     */
    public function redirect(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = $value;

            return $this;
        }

        if (!$this->redirect instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "redirect()" has already been initialized. You cannot pass values the second time you call redirect().');
        }

        return $this->redirect;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"retry":1}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig : static)
     */
    public function retry(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['retry'] = true;
            $this->retry = $value;

            return $this;
        }

        if (!$this->retry instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig) {
            $this->_usedProperties['retry'] = true;
            $this->retry = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "retry()" has already been initialized. You cannot pass values the second time you call retry().');
        }

        return $this->retry;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"stopwatch":"debug.stopwatch"}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig : static)
     */
    public function stopwatch(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = $value;

            return $this;
        }

        if (!$this->stopwatch instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "stopwatch()" has already been initialized. You cannot pass values the second time you call stopwatch().');
        }

        return $this->stopwatch;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"only_server_exception":false}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig : static)
     */
    public function error(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['error'] = true;
            $this->error = $value;

            return $this;
        }

        if (!$this->error instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig) {
            $this->_usedProperties['error'] = true;
            $this->error = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "error()" has already been initialized. You cannot pass values the second time you call error().');
        }

        return $this->error;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"key":null,"tokens":1,"max_time":null}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\ThrottleConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\ThrottleConfig : static)
     */
    public function throttle(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\ThrottleConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['throttle'] = true;
            $this->throttle = $value;

            return $this;
        }

        if (!$this->throttle instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ThrottleConfig) {
            $this->_usedProperties['throttle'] = true;
            $this->throttle = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ThrottleConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "throttle()" has already been initialized. You cannot pass values the second time you call throttle().');
        }

        return $this->throttle;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Reference to a plugin service
     * @default {"enabled":false}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig : static)
     */
    public function reference(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['reference'] = true;
            $this->reference = $value;

            return $this;
        }

        if (!$this->reference instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig) {
            $this->_usedProperties['reference'] = true;
            $this->reference = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "reference()" has already been initialized. You cannot pass values the second time you call reference().');
        }

        return $this->reference;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Configure a plugin with a configurator
     * @default {"enabled":false,"config":[]}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\ConfiguratorConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\ConfiguratorConfig : static)
     */
    public function configurator(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\ConfiguratorConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['configurator'] = true;
            $this->configurator = $value;

            return $this;
        }

        if (!$this->configurator instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ConfiguratorConfig) {
            $this->_usedProperties['configurator'] = true;
            $this->configurator = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ConfiguratorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "configurator()" has already been initialized. You cannot pass values the second time you call configurator().');
        }

        return $this->configurator;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Set scheme, host and port in the request URI.
     * @default {"enabled":false,"replace":false}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig : static)
     */
    public function addHost(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['addHost'] = true;
            $this->addHost = $value;

            return $this;
        }

        if (!$this->addHost instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig) {
            $this->_usedProperties['addHost'] = true;
            $this->addHost = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "addHost()" has already been initialized. You cannot pass values the second time you call addHost().');
        }

        return $this->addHost;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Add a base path to the request.
     * @default {"enabled":false}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig : static)
     */
    public function addPath(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['addPath'] = true;
            $this->addPath = $value;

            return $this;
        }

        if (!$this->addPath instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig) {
            $this->_usedProperties['addPath'] = true;
            $this->addPath = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "addPath()" has already been initialized. You cannot pass values the second time you call addPath().');
        }

        return $this->addPath;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Set a base URI to the request.
     * @default {"enabled":false,"replace":false}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig : static)
     */
    public function baseUri(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['baseUri'] = true;
            $this->baseUri = $value;

            return $this;
        }

        if (!$this->baseUri instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig) {
            $this->_usedProperties['baseUri'] = true;
            $this->baseUri = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "baseUri()" has already been initialized. You cannot pass values the second time you call baseUri().');
        }

        return $this->baseUri;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Detect the content type of a request body and set the Content-Type header if it is not already set.
     * @default {"enabled":false,"skip_detection":false}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig : static)
     */
    public function contentType(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['contentType'] = true;
            $this->contentType = $value;

            return $this;
        }

        if (!$this->contentType instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig) {
            $this->_usedProperties['contentType'] = true;
            $this->contentType = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "contentType()" has already been initialized. You cannot pass values the second time you call contentType().');
        }

        return $this->contentType;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Append headers to the request. If the header already exists the value will be appended to the current value.
     * @default {"enabled":false,"headers":[]}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig : static)
     */
    public function headerAppend(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['headerAppend'] = true;
            $this->headerAppend = $value;

            return $this;
        }

        if (!$this->headerAppend instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig) {
            $this->_usedProperties['headerAppend'] = true;
            $this->headerAppend = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "headerAppend()" has already been initialized. You cannot pass values the second time you call headerAppend().');
        }

        return $this->headerAppend;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Set header to default value if it does not exist.
     * @default {"enabled":false,"headers":[]}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig : static)
     */
    public function headerDefaults(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['headerDefaults'] = true;
            $this->headerDefaults = $value;

            return $this;
        }

        if (!$this->headerDefaults instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig) {
            $this->_usedProperties['headerDefaults'] = true;
            $this->headerDefaults = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "headerDefaults()" has already been initialized. You cannot pass values the second time you call headerDefaults().');
        }

        return $this->headerDefaults;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Set headers to requests. If the header does not exist it wil be set, if the header already exists it will be replaced.
     * @default {"enabled":false,"headers":[]}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig : static)
     */
    public function headerSet(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['headerSet'] = true;
            $this->headerSet = $value;

            return $this;
        }

        if (!$this->headerSet instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig) {
            $this->_usedProperties['headerSet'] = true;
            $this->headerSet = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "headerSet()" has already been initialized. You cannot pass values the second time you call headerSet().');
        }

        return $this->headerSet;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Remove headers from requests.
     * @default {"enabled":false,"headers":[]}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig : static)
     */
    public function headerRemove(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['headerRemove'] = true;
            $this->headerRemove = $value;

            return $this;
        }

        if (!$this->headerRemove instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig) {
            $this->_usedProperties['headerRemove'] = true;
            $this->headerRemove = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "headerRemove()" has already been initialized. You cannot pass values the second time you call headerRemove().');
        }

        return $this->headerRemove;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Sets query parameters to default value if they are not present in the request.
     * @default {"enabled":false,"parameters":[]}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig : static)
     */
    public function queryDefaults(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['queryDefaults'] = true;
            $this->queryDefaults = $value;

            return $this;
        }

        if (!$this->queryDefaults instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig) {
            $this->_usedProperties['queryDefaults'] = true;
            $this->queryDefaults = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "queryDefaults()" has already been initialized. You cannot pass values the second time you call queryDefaults().');
        }

        return $this->queryDefaults;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Ensure that the request body is seekable so that several plugins can look into it.
     * @default {"enabled":false,"use_file_buffer":true}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\RequestSeekableBodyConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\RequestSeekableBodyConfig : static)
     */
    public function requestSeekableBody(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\RequestSeekableBodyConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['requestSeekableBody'] = true;
            $this->requestSeekableBody = $value;

            return $this;
        }

        if (!$this->requestSeekableBody instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\RequestSeekableBodyConfig) {
            $this->_usedProperties['requestSeekableBody'] = true;
            $this->requestSeekableBody = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RequestSeekableBodyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "requestSeekableBody()" has already been initialized. You cannot pass values the second time you call requestSeekableBody().');
        }

        return $this->requestSeekableBody;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Ensure that the response body is seekable so that several plugins can look into it.
     * @default {"enabled":false,"use_file_buffer":true}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\ResponseSeekableBodyConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\ResponseSeekableBodyConfig : static)
     */
    public function responseSeekableBody(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\ResponseSeekableBodyConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['responseSeekableBody'] = true;
            $this->responseSeekableBody = $value;

            return $this;
        }

        if (!$this->responseSeekableBody instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ResponseSeekableBodyConfig) {
            $this->_usedProperties['responseSeekableBody'] = true;
            $this->responseSeekableBody = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ResponseSeekableBodyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "responseSeekableBody()" has already been initialized. You cannot pass values the second time you call responseSeekableBody().');
        }

        return $this->responseSeekableBody;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Record response to be replayed during tests or development cycle.
     * @default {"enabled":false,"recorder":"filesystem","naming_strategy":"default"}
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig : static)
     */
    public function vcr(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['vcr'] = true;
            $this->vcr = $value;

            return $this;
        }

        if (!$this->vcr instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig) {
            $this->_usedProperties['vcr'] = true;
            $this->vcr = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "vcr()" has already been initialized. You cannot pass values the second time you call vcr().');
        }

        return $this->vcr;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('authentication', $value)) {
            $this->_usedProperties['authentication'] = true;
            $this->authentication = array_map(fn ($v) => new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AuthenticationConfig($v), $value['authentication']);
            unset($value['authentication']);
        }

        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = \is_array($value['cache']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig($value['cache']) : $value['cache'];
            unset($value['cache']);
        }

        if (array_key_exists('cookie', $value)) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = \is_array($value['cookie']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig($value['cookie']) : $value['cookie'];
            unset($value['cookie']);
        }

        if (array_key_exists('history', $value)) {
            $this->_usedProperties['history'] = true;
            $this->history = \is_array($value['history']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig($value['history']) : $value['history'];
            unset($value['history']);
        }

        if (array_key_exists('decoder', $value)) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = \is_array($value['decoder']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig($value['decoder']) : $value['decoder'];
            unset($value['decoder']);
        }

        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = \is_array($value['logger']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig($value['logger']) : $value['logger'];
            unset($value['logger']);
        }

        if (array_key_exists('redirect', $value)) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = \is_array($value['redirect']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig($value['redirect']) : $value['redirect'];
            unset($value['redirect']);
        }

        if (array_key_exists('retry', $value)) {
            $this->_usedProperties['retry'] = true;
            $this->retry = \is_array($value['retry']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig($value['retry']) : $value['retry'];
            unset($value['retry']);
        }

        if (array_key_exists('stopwatch', $value)) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = \is_array($value['stopwatch']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig($value['stopwatch']) : $value['stopwatch'];
            unset($value['stopwatch']);
        }

        if (array_key_exists('error', $value)) {
            $this->_usedProperties['error'] = true;
            $this->error = \is_array($value['error']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig($value['error']) : $value['error'];
            unset($value['error']);
        }

        if (array_key_exists('throttle', $value)) {
            $this->_usedProperties['throttle'] = true;
            $this->throttle = \is_array($value['throttle']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ThrottleConfig($value['throttle']) : $value['throttle'];
            unset($value['throttle']);
        }

        if (array_key_exists('reference', $value)) {
            $this->_usedProperties['reference'] = true;
            $this->reference = \is_array($value['reference']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig($value['reference']) : $value['reference'];
            unset($value['reference']);
        }

        if (array_key_exists('configurator', $value)) {
            $this->_usedProperties['configurator'] = true;
            $this->configurator = \is_array($value['configurator']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ConfiguratorConfig($value['configurator']) : $value['configurator'];
            unset($value['configurator']);
        }

        if (array_key_exists('add_host', $value)) {
            $this->_usedProperties['addHost'] = true;
            $this->addHost = \is_array($value['add_host']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig($value['add_host']) : $value['add_host'];
            unset($value['add_host']);
        }

        if (array_key_exists('add_path', $value)) {
            $this->_usedProperties['addPath'] = true;
            $this->addPath = \is_array($value['add_path']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig($value['add_path']) : $value['add_path'];
            unset($value['add_path']);
        }

        if (array_key_exists('base_uri', $value)) {
            $this->_usedProperties['baseUri'] = true;
            $this->baseUri = \is_array($value['base_uri']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig($value['base_uri']) : $value['base_uri'];
            unset($value['base_uri']);
        }

        if (array_key_exists('content_type', $value)) {
            $this->_usedProperties['contentType'] = true;
            $this->contentType = \is_array($value['content_type']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig($value['content_type']) : $value['content_type'];
            unset($value['content_type']);
        }

        if (array_key_exists('header_append', $value)) {
            $this->_usedProperties['headerAppend'] = true;
            $this->headerAppend = \is_array($value['header_append']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig($value['header_append']) : $value['header_append'];
            unset($value['header_append']);
        }

        if (array_key_exists('header_defaults', $value)) {
            $this->_usedProperties['headerDefaults'] = true;
            $this->headerDefaults = \is_array($value['header_defaults']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig($value['header_defaults']) : $value['header_defaults'];
            unset($value['header_defaults']);
        }

        if (array_key_exists('header_set', $value)) {
            $this->_usedProperties['headerSet'] = true;
            $this->headerSet = \is_array($value['header_set']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig($value['header_set']) : $value['header_set'];
            unset($value['header_set']);
        }

        if (array_key_exists('header_remove', $value)) {
            $this->_usedProperties['headerRemove'] = true;
            $this->headerRemove = \is_array($value['header_remove']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig($value['header_remove']) : $value['header_remove'];
            unset($value['header_remove']);
        }

        if (array_key_exists('query_defaults', $value)) {
            $this->_usedProperties['queryDefaults'] = true;
            $this->queryDefaults = \is_array($value['query_defaults']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig($value['query_defaults']) : $value['query_defaults'];
            unset($value['query_defaults']);
        }

        if (array_key_exists('request_seekable_body', $value)) {
            $this->_usedProperties['requestSeekableBody'] = true;
            $this->requestSeekableBody = \is_array($value['request_seekable_body']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RequestSeekableBodyConfig($value['request_seekable_body']) : $value['request_seekable_body'];
            unset($value['request_seekable_body']);
        }

        if (array_key_exists('response_seekable_body', $value)) {
            $this->_usedProperties['responseSeekableBody'] = true;
            $this->responseSeekableBody = \is_array($value['response_seekable_body']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ResponseSeekableBodyConfig($value['response_seekable_body']) : $value['response_seekable_body'];
            unset($value['response_seekable_body']);
        }

        if (array_key_exists('vcr', $value)) {
            $this->_usedProperties['vcr'] = true;
            $this->vcr = \is_array($value['vcr']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig($value['vcr']) : $value['vcr'];
            unset($value['vcr']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['authentication'])) {
            $output['authentication'] = array_map(fn ($v) => $v->toArray(), $this->authentication);
        }
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig ? $this->cache->toArray() : $this->cache;
        }
        if (isset($this->_usedProperties['cookie'])) {
            $output['cookie'] = $this->cookie instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig ? $this->cookie->toArray() : $this->cookie;
        }
        if (isset($this->_usedProperties['history'])) {
            $output['history'] = $this->history instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig ? $this->history->toArray() : $this->history;
        }
        if (isset($this->_usedProperties['decoder'])) {
            $output['decoder'] = $this->decoder instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig ? $this->decoder->toArray() : $this->decoder;
        }
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig ? $this->logger->toArray() : $this->logger;
        }
        if (isset($this->_usedProperties['redirect'])) {
            $output['redirect'] = $this->redirect instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig ? $this->redirect->toArray() : $this->redirect;
        }
        if (isset($this->_usedProperties['retry'])) {
            $output['retry'] = $this->retry instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig ? $this->retry->toArray() : $this->retry;
        }
        if (isset($this->_usedProperties['stopwatch'])) {
            $output['stopwatch'] = $this->stopwatch instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig ? $this->stopwatch->toArray() : $this->stopwatch;
        }
        if (isset($this->_usedProperties['error'])) {
            $output['error'] = $this->error instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig ? $this->error->toArray() : $this->error;
        }
        if (isset($this->_usedProperties['throttle'])) {
            $output['throttle'] = $this->throttle instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ThrottleConfig ? $this->throttle->toArray() : $this->throttle;
        }
        if (isset($this->_usedProperties['reference'])) {
            $output['reference'] = $this->reference instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig ? $this->reference->toArray() : $this->reference;
        }
        if (isset($this->_usedProperties['configurator'])) {
            $output['configurator'] = $this->configurator instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ConfiguratorConfig ? $this->configurator->toArray() : $this->configurator;
        }
        if (isset($this->_usedProperties['addHost'])) {
            $output['add_host'] = $this->addHost instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig ? $this->addHost->toArray() : $this->addHost;
        }
        if (isset($this->_usedProperties['addPath'])) {
            $output['add_path'] = $this->addPath instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig ? $this->addPath->toArray() : $this->addPath;
        }
        if (isset($this->_usedProperties['baseUri'])) {
            $output['base_uri'] = $this->baseUri instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig ? $this->baseUri->toArray() : $this->baseUri;
        }
        if (isset($this->_usedProperties['contentType'])) {
            $output['content_type'] = $this->contentType instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig ? $this->contentType->toArray() : $this->contentType;
        }
        if (isset($this->_usedProperties['headerAppend'])) {
            $output['header_append'] = $this->headerAppend instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig ? $this->headerAppend->toArray() : $this->headerAppend;
        }
        if (isset($this->_usedProperties['headerDefaults'])) {
            $output['header_defaults'] = $this->headerDefaults instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig ? $this->headerDefaults->toArray() : $this->headerDefaults;
        }
        if (isset($this->_usedProperties['headerSet'])) {
            $output['header_set'] = $this->headerSet instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig ? $this->headerSet->toArray() : $this->headerSet;
        }
        if (isset($this->_usedProperties['headerRemove'])) {
            $output['header_remove'] = $this->headerRemove instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig ? $this->headerRemove->toArray() : $this->headerRemove;
        }
        if (isset($this->_usedProperties['queryDefaults'])) {
            $output['query_defaults'] = $this->queryDefaults instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig ? $this->queryDefaults->toArray() : $this->queryDefaults;
        }
        if (isset($this->_usedProperties['requestSeekableBody'])) {
            $output['request_seekable_body'] = $this->requestSeekableBody instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\RequestSeekableBodyConfig ? $this->requestSeekableBody->toArray() : $this->requestSeekableBody;
        }
        if (isset($this->_usedProperties['responseSeekableBody'])) {
            $output['response_seekable_body'] = $this->responseSeekableBody instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ResponseSeekableBodyConfig ? $this->responseSeekableBody->toArray() : $this->responseSeekableBody;
        }
        if (isset($this->_usedProperties['vcr'])) {
            $output['vcr'] = $this->vcr instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig ? $this->vcr->toArray() : $this->vcr;
        }

        return $output;
    }

}
