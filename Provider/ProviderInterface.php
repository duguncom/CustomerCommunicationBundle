<?php

namespace Dugun\Bundle\CustomerCommunicationBundle\Provider;

/**
 * Interface ProviderInterface
 *
 * @author Farhad Safarov <farhad.safarov@gmail.com>
 */
interface ProviderInterface
{
    /**
     * Creates a new user or updates existing ones
     *
     * @param array $options
     */
    public function user(array $options);

    /**
     * Creates or updates users in batch
     *
     * @param array $options
     */
    public function users(array $options);

    /**
     * Creates a new company or updates existing ones
     *
     * @param array $options
     */
    public function company(array $options);
}
