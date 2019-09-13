<?php

namespace Interop\Template;

use Interop\Template\Exception\TemplateNotFound;

interface TemplateEngineInterface
{
    /**
     * @param string $templateName
     * @param array $parameters
     * @return string
     * @throws TemplateNotFound
     */
    public function render(string $templateName, array $parameters = []): string;
}
