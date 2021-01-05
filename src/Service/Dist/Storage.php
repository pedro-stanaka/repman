<?php

declare(strict_types=1);

namespace Buddy\Repman\Service\Dist;

use Buddy\Repman\Service\Dist;
use Munus\Control\Option;

interface Storage
{
    public function has(Dist $dist): bool;

    /**
     * @param string[] $headers
     */
    public function download(string $url, Dist $dist, array $headers = []): void;

    public function remove(Dist $dist): void;

    public function filename(Dist $dist): string;

    public function size(Dist $dist): int;

    /**
     * @return Option<string>
     */
    public function getLocalFileForDistUrl(string $distFilename): Option;

    /**
     * @return Option<string>
     */
    public function getLocalFileForDist(Dist $dist): Option;
}
