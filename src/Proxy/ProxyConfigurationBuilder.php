<?php

declare(strict_types=1);

namespace PaypalServerSdkLib\Proxy;

use PaypalServerSdkLib\ConfigurationDefaults;

class ProxyConfigurationBuilder
{
    private $address;

    private $port = ConfigurationDefaults::PROXY_CONFIGURATION['port'];

    private $type = ConfigurationDefaults::PROXY_CONFIGURATION['type'];

    private $user = ConfigurationDefaults::PROXY_CONFIGURATION['auth']['user'];

    private $pass = ConfigurationDefaults::PROXY_CONFIGURATION['auth']['pass'];

    private $tunnel = ConfigurationDefaults::PROXY_CONFIGURATION['tunnel'];

    private $authMethod = ConfigurationDefaults::PROXY_CONFIGURATION['auth']['method'];

    private function __construct(string $address)
    {
        $this->address = $address;
    }

    /**
     * Create an instance of ProxyConfigurationBuilder
     */
    public static function init(string $address): self
    {
        return new self($address);
    }

    /**
     * Set proxy authentication method
     */
    public function tunnel(bool $tunnel): self
    {
        $this->tunnel = $tunnel;
        return $this;
    }

    /**
     * Set the proxy address
     */
    public function address(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Set the proxy port
     */
    public function port(int $port): self
    {
        $this->port = $port;
        return $this;
    }

    /**
     * Set the proxy port
     */
    public function type(int $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Set proxy authentication method
     */
    public function authMethod(string $authMethod): self
    {
        $this->authMethod = $authMethod;
        return $this;
    }

    /**
     * Set proxy username and password
     */
    public function auth(string $user, string $pass): self
    {
        $this->user = $user;
        $this->pass = $pass;
        return $this;
    }

    public function getConfiguration(): array
    {
        return [
            'port' => $this->port,
            'type' => $this->type,
            'tunnel' => $this->tunnel,
            'address' => $this->address,
            'auth' => ['user' => "$this->user", 'pass' => "$this->pass", 'method' => $this->authMethod]
        ];
    }
}
