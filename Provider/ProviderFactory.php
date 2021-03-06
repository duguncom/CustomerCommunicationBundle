<?php

namespace Dugun\Bundle\CustomerCommunicationBundle\Provider;

use Dugun\Bundle\CustomerCommunicationBundle\Provider\Intercom\Client;

/**
 * Class ProviderFactory.
 *
 * @author Farhad Safarov <farhad.safarov@gmail.com>
 */
class ProviderFactory
{
    /**
     * ProviderFactory constructor.
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @return ProviderInterface
     */
    public function init()
    {
        $intercomConfig = $this->config['intercom'];

        if (array_key_exists('accessToken', $intercomConfig)) {
            return new Client($intercomConfig['accessToken'], null);
        } elseif (array_key_exists('appId', $intercomConfig) && array_key_exists('apiKey', $intercomConfig)) {
            return new Client($intercomConfig['appId'], $intercomConfig['apiKey']);
        }

        throw new \InvalidArgumentException('Config');
    }
}
