<?php

namespace Framework\View;

/**
 * Interface ViewInterface
 * @package Framework\View
 */
interface ViewInterface
{
    /**
     * @param string        $template
     * @param array|null    $data
     *
     * @return string
     */
    public function generate(string $template, array $data = null) : string;
}