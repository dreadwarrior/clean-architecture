<?php

declare(strict_types=1);

namespace Damianopetrungaro\CleanArchitecture\Persistence;

interface Transaction
{
    /**
     * Begin a new transaction
     *
     * @return bool
     */
    public function begin(): bool;

    /**
     * Commit a transaction
     *
     * @return bool
     */
    public function commit(): bool;

    /**
     * Rollback a transaction
     *
     * @return bool
     */
    public function rollback(): bool;
}
