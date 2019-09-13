<?php

namespace Interop\Template\Exception;

use InvalidArgumentException, Throwable;

final class TemplateNotFound extends InvalidArgumentException implements TemplateExceptionInterface
{
    public static function fromName(string $templateName, int $code = 0, Throwable $previous = null): TemplateNotFound
    {
        return new static("Template '$templateName' not found.'", $code = 0, $previous = null);
    }
}
