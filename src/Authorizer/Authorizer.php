<?php

/*
 * This file is part of PHP I: YouTrack REST.
 *
 * (c) Anton Komarev <anton@komarev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace I\YouTrack\Rest\Authorizer;

use I\YouTrack\Rest\Client\Client;

interface Authorizer
{
    /**
     * Append authorization headers to REST client.
     *
     * @param \I\YouTrack\Rest\Client\Client $client
     * @return void
     */
    public function appendHeadersTo(Client $client): void;
}
