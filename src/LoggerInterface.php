<?php
/**
 * Box packing (3D bin packing, knapsack problem).
 *
 * @author Samin Yaser
 */
declare(strict_types=1);

namespace SaminYaser\BoxPackerLite;

/**
 * Receives optional packing diagnostics.
 */
interface LoggerInterface
{
    public function info(string $message, array $context = []): void;

    public function debug(string $message, array $context = []): void;
}
