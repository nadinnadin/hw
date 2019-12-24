<?php

namespace Framework\Http;

final class Request implements RequestInterface, RequestSpecificationInterface
{
    /**
     * @var array
     */
    private $headers;

    /**
     * @var
     */
    private $params;

    /**
     * @var
     */
    private $query;

    /**
     * @var
     */
    private $server;

    public function __construct()
    {
        $this->server = $_SERVER;
        $this->params = $_POST;
        $this->query  = $_GET;
        $this->headers = headers_list();
    }


    /**
     * @inheritDoc
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @inheritDoc
     */
    public function getHeader(string $key): string
    {
        if (isset($this->headers[$key])) {
            return $this->headers[$key];
        }

        return null;
    }

    /**
     * @inheritDoc
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @inheritDoc
     */
    public function getParam(string $key): ?string
    {
        if (isset($this->params[$key])) {
            return $this->params[$key];
        }

        return null;
    }

    public function getRequestUri() : string
    {
        return (string) $_SERVER['REQUEST_URI'];
    }

    /**
     * @inheritDoc
     */
    public function getQuery(): ?array
    {
        return $this->query;
    }

    /**
     * @inheritDoc
     */
    public function getRequestType(): string
    {
        return $this->server['REQUEST_METHOD'];
    }

    /**
     * @inheritDoc
     */
    public function isGet(): bool
    {
        return self::GET === $this->getRequestType();
    }

    /**
     * @inheritDoc
     */
    public function isPost(): bool
    {
        return self::POST === $this->getRequestType();
    }

    /**
     * @inheritDoc
     */
    public function isPut(): bool
    {
        return self::PUT === $this->getRequestType();
    }

    /**
     * @inheritDoc
     */
    public function isDelete(): bool
    {
        return self::DELETE === $this->getRequestType();
    }

    /**
     * @inheritDoc
     */
    public function isPatch(): bool
    {
        return self::PATCH === $this->getRequestType();
    }

    /**
     * @inheritDoc
     */
    public function isOption(): bool
    {
        return self::OPTION === $this->getRequestType();
    }
}