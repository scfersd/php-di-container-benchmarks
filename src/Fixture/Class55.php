<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class55
{
    private $dependency;

    public function __construct(Class54 $dependency)
    {
        $this->dependency = $dependency;
    }
}
