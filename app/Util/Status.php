<?php

namespace App\Util;

class Status
{
    public const INSTOCK = 'INSTOCK';
    public const OUTSTOCK = 'OUTSTOCK';

    public const PENDING = 'PENDING';
    public const CANCELLED = 'CANCELLED';
    public const PAID = 'PAID';
    public const COMPLETED = 'COMPLETED';
    public const FAILED = 'FAILED';
    public const PROCESSING = 'PROCESSING';
    public const ACCEPTED = 'ACCEPTED';
    public const REJECTED = 'REJECTED';

    /**
     * Get all possible statuses.
     *
     * @return array
     */
    public static function getAllStatuses(): array
    {
        return [
            self::INSTOCK,
            self::OUTSTOCK,
            self::PENDING,
            self::CANCELLED,
            self::PAID,
            self::COMPLETED,
            self::PROCESSING,
            self::ACCEPTED,
            self::FAILED,
            self::REJECTED

        ];
    }
}
