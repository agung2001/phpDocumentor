<?php

declare(strict_types=1);

namespace phpDocumentor\Descriptor\Interfaces;

use phpDocumentor\Descriptor\Collection;

interface AttributedInterface
{
    /** @return Collection<AttributeInterface> */
    public function getAttributes(): Collection;

    /** @return Collection<AttributeInterface> */
    public function getInheritedAttributes(): Collection;

    public function addAttribute(AttributeInterface $attribute): void;
}
