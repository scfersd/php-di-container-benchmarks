<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class64
{
    private $dependency;

    public function __construct(Class63 $dependency)
    {
        $this->dependency = $dependency;
    }
}
