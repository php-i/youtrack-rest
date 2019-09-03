<?php

declare(strict_types=1);

/*
 * This file is part of PHP I: YouTrack REST.
 *
 * (c) Anton Komarev <anton@komarev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace I\YouTrack\Rest\Authenticator;

use I\YouTrack\Rest\Client\Client as ClientContract;

interface Authenticator
{
    /**
     * Authenticate API Client.
     *
     * @param \I\YouTrack\Rest\Client\Client $client
     * @return void
     *
     * @throws \I\YouTrack\Rest\Authenticator\Exceptions\AuthenticationException
     */
    public function authenticate(ClientContract $client): void;

    /**
     * Retrieve authentication token.
     *
     * @return string
     */
    public function token(): string;
}