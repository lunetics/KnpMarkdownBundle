<?php

namespace Bundle\MarkdownBundle\Tests\Performance;

use Bundle\MarkdownBundle\Parser\Preset\Min as Parser;

/**
 * Run tests with minimal-featured Markdown Parser
 */
class Min extends Base
{
    /**
     * @return Parser
     */
    protected function getParser()
    {
        return new Parser();
    }
}
