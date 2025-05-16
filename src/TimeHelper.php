<?php

declare(strict_types=1);

namespace IlyaKazakov\TimeHelper;

class TimeHelper
{
    /**
     * Get current Moscow time in HH:MM:SS format
     *
     * @return string
     * @throws \Exception
     */
    public static function getMoscowTime(): string
    {
        $date = new \DateTime('now', new \DateTimeZone('Europe/Moscow'));
        return $date->format('H:i:s');
    }

    /**
     * Get current GMT time in HH:MM:SS format
     *
     * @return string
     * @throws \Exception
     */
    public static function getGMTTime(): string
    {
        $date = new \DateTime('now', new \DateTimeZone('GMT'));
        return $date->format('H:i:s');
    }
}