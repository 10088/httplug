<?php

namespace Http\Client\Exception;

use Http\Client\Exception;

/**
 * Custom Unexpected Value exception
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class UnexpectedValueException extends \UnexpectedValueException implements Exception
{
}