<?php
/**
 * Box packing (3D bin packing, knapsack problem).
 *
 * @author Samin Yaser
 */
declare(strict_types=1);

namespace SaminYaser\BoxPackerLite;

/**
 * Discards packing diagnostics when no logger is supplied.
 */
class NullLogger implements LoggerInterface
{
    public function info(string $message, array $context = []): void
    {
    }

    public function debug(string $message, array $context = []): void
    {
    }
}
