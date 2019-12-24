<?php

namespace Framework\Http;

/**
 * Interface RequestSpecificationInterface
 * @package Framework\Http
 */
interface RequestSpecificationInterface
{
    const POST      = 'POST';
    const GET       = 'GET';
    const PUT       = 'PUT';
    const DELETE    = 'DELETE';
    const PATCH     = 'PATCH';
    const OPTION    = 'OPTION';

    /**
     * @return bool
     */
    public function isGet(): bool;

    /**
     * @return bool
     */
    public function isPost(): bool;

    /**
     * @return bool
     */
    public function isPut(): bool;

    /**
     * @return bool
     */
    public function isDelete(): bool;

    /**
     * @return bool
     */
    public function isPatch(): bool;

    /**
     * @return bool
     */
    public function isOption(): bool;
}