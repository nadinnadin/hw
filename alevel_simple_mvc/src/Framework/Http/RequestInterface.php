<?php


namespace Framework\Http;

/**
 * Interface RequestInterface
 * @package Framework\Http
 */
interface RequestInterface
{
    /**
     * @return array
     */
    public function getHeaders(): array;

    /**
     * @param string $key
     * @return string
     */
    public function getHeader(string $key): string;

    /**
     * @return array
     */
    public function getParams(): array;

    /**
     * @param string $key
     * @return string|null
     */
    public function getParam(string $key): ?string;

    /**
     * @return array|null
     */
    public function getQuery(): ?array;

    /**
     * @return string
     */
    public function getRequestType() : string;


}