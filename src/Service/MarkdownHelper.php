<?php

namespace App\Service;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Cache\CacheInterface;

class MarkdownHelper
{
    public function __construct(private readonly MarkdownParserInterface $markdownParser, private readonly CacheInterface $cache, private readonly bool $isDebug, private readonly LoggerInterface $logger)
    {
    }

    public function parse(string $source): string
    {
        if (stripos($source, 'cat') !== false) {
            $this->logger->info('Meow!');
        }

        if ($this->isDebug) {
            return $this->markdownParser->transformMarkdown($source);
        }

        return $this->cache->get('markdown_'.md5($source), fn() => $this->markdownParser->transformMarkdown($source));
    }
}
