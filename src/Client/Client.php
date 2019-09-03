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

namespace I\YouTrack\Rest\Client;

use I\YouTrack\Rest\Response\Response;

interface Client
{
    /**
     * Version of PHP I: YouTrack REST client.
     */
    const VERSION = '1.0.0';

    /**
     * Create and send an HTTP request.
     *
     * @param string $method
     * @param string $uri
     * @param array $params
     * @param array $options
     * @return \I\YouTrack\Rest\Response\Response
     *
     * @throws \I\YouTrack\Rest\Authenticator\Exceptions\AuthenticationException
     * @throws \I\YouTrack\Rest\Authorizer\Exceptions\InvalidAuthorizationToken
     * @throws \I\YouTrack\Rest\Client\Exceptions\ClientException
     */
    public function request(string $method, string $uri, array $params = [], array $options = []): Response;

    /**
     * Create and send an GET HTTP request.
     *
     * @param string $uri
     * @param array $params
     * @param array $options
     * @return \I\YouTrack\Rest\Response\Response
     *
     * @throws \I\YouTrack\Rest\Authenticator\Exceptions\AuthenticationException
     * @throws \I\YouTrack\Rest\Authorizer\Exceptions\InvalidAuthorizationToken
     * @throws \I\YouTrack\Rest\Client\Exceptions\ClientException
     */
    public function get(string $uri, array $params = [], array $options = []): Response;

    /**
     * Create and send an POST HTTP request.
     *
     * @param string $uri
     * @param array $params
     * @param array $options
     * @return \I\YouTrack\Rest\Response\Response
     *
     * @throws \I\YouTrack\Rest\Authenticator\Exceptions\AuthenticationException
     * @throws \I\YouTrack\Rest\Authorizer\Exceptions\InvalidAuthorizationToken
     * @throws \I\YouTrack\Rest\Client\Exceptions\ClientException
     */
    public function post(string $uri, array $params = [], array $options = []): Response;

    /**
     * Create and send an PUT HTTP request.
     *
     * @param string $uri
     * @param array $params
     * @param array $options
     * @return \I\YouTrack\Rest\Response\Response
     *
     * @throws \I\YouTrack\Rest\Authenticator\Exceptions\AuthenticationException
     * @throws \I\YouTrack\Rest\Authorizer\Exceptions\InvalidAuthorizationToken
     * @throws \I\YouTrack\Rest\Client\Exceptions\ClientException
     */
    public function put(string $uri, array $params = [], array $options = []): Response;

    /**
     * Create and send an DELETE HTTP request.
     *
     * @param string $uri
     * @param array $params
     * @param array $options
     * @return \I\YouTrack\Rest\Response\Response
     *
     * @throws \I\YouTrack\Rest\Authenticator\Exceptions\AuthenticationException
     * @throws \I\YouTrack\Rest\Authorizer\Exceptions\InvalidAuthorizationToken
     * @throws \I\YouTrack\Rest\Client\Exceptions\ClientException
     */
    public function delete(string $uri, array $params = [], array $options = []): Response;

    /**
     * Write header value.
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    public function withHeader(string $key, string $value): void;

    /**
     * Write header values.
     *
     * @param array $headers
     * @return void
     */
    public function withHeaders(array $headers): void;
}
