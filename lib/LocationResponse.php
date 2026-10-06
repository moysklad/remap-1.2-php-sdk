<?php
/**
 * LocationResponse
 * PHP version 8.1
 *
 * @category Class
 * @package  OpenAPI\Client
 */

namespace OpenAPI\Client;

/**
 * Ответ вызова, полезные данные которого передаются в заголовке Location,
 * а тело ответа отсутствует. Значения принадлежат конкретному вызову.
 *
 * @package OpenAPI\Client
 */
class LocationResponse
{
    public function __construct(
        private readonly int $statusCode,
        private readonly ?string $location,
    ) {
    }

    /**
     * Имя заголовка Location сравнивается без учета регистра.
     *
     * @param array<string, string[]> $headers
     */
    public static function fromHeaders(int $statusCode, array $headers): self
    {
        foreach ($headers as $headerName => $values) {
            if (strcasecmp($headerName, 'Location') === 0) {
                return new self($statusCode, $values[0] ?? null);
            }
        }

        return new self($statusCode, null);
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * Значение заголовка Location или null, если заголовка нет.
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }
}
