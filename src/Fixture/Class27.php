<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class27
{
    private $dependency;

    public function __construct(Class26 $dependency)
    {
        $this->dependency = $dependency;
    }
}
