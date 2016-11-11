<?php

namespace Dugun\Bundle\CustomerCommunicationBundle\Provider\Intercom;

use Dugun\Bundle\CustomerCommunicationBundle\Provider\ProviderInterface;
use Intercom\IntercomClient;

/**
 * Class Client.
 *
 * @author Farhad Safarov <farhad.safarov@gmail.com>
 */
class Client extends IntercomClient implements ProviderInterface
{
    public function __construct($appId, $apiKey)
    {
        parent::__construct($appId, $apiKey);
    }

    /**
     * {@inheritdoc}
     */
    public function user(array $options)
    {
        if (!empty($options)) {
            $this->users->create($options);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function users(array $options)
    {
        if (array_key_exists('items', $options) && !empty($options['items'])) {
            $this->bulk->users($options);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function company(array $options)
    {
        if (!empty($options)) {
            $this->companies->create($options);
        }
    }
}
