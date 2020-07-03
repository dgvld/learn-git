<?php
interface ParserInterface
    /**
     * @author Denis Grigorev <examle@mail.com>
     */
{
    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag): array;
}