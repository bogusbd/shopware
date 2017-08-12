<?php

namespace Shopware\Media\Event;

use Symfony\Component\EventDispatcher\Event;

class MigrateAdvanceEvent extends Event
{
    const EVENT_NAME = 'media.migrate.advance';

    /**
     * @var string
     */
    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }
}