<?php

declare(strict_types=1);

namespace Marktic\Faq\Base\Models\HasPosition;

trait HasPositionRecordTrait
{
   protected ?int $position = null;

    public function getPosition(): int
    {
        return (int) $this->position;
    }

    public function setPosition(int|null $position): self
    {
        $this->position = $position;
        return $this;
    }
}