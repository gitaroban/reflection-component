<?php
declare(strict_types=1);

namespace Gitaroban\ReflectionComponent;

use ReflectionProperty as BaseReflectionProperty;

class ReflectionProperty extends BaseReflectionProperty
{
    /**
     * @param object|string $object
     *
     * @return bool
     */
    public function estInitialisee(object|string $object): bool
    {
        if ($this->isPublic()) {
            return $this->isInitialized($object);
        }

        return $this->rendrePublic()
            ->isInitialized($object);
    }

    /**
     * @return $this
     */
    private function rendrePublic(): self
    {
        $this->setAccessible(true);
        return $this;
    }
}
