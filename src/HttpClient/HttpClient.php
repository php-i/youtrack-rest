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

namespace I\YouTrack\Rest\HttpClient;

use Psr\Http\Message\ResponseInterface as HttpMessageResponse;

interface HttpClient
{
    /**
     * Send request to the server and fetch the raw response.
     *
     * @param string $method Request Method
     * @param string $uri URI/Endpoint to send the request to
     * @param array $options Additional Options
     * @return \Psr\Http\Message\ResponseInterface Raw response from the server
     *
     * @throws \I\YouTrack\Rest\HttpClient\Exceptions\HttpClientException
     */
    public function request(string $method, string $uri, array $options = []): HttpMessageResponse;
}
