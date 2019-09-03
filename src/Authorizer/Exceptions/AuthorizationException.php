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

namespace I\YouTrack\Rest\Authorizer\Exceptions;

use I\YouTrack\Rest\Client\Exceptions\ClientException;

class AuthorizationException extends ClientException
{
}