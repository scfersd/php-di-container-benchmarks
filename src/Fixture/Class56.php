<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class56
{
    private $dependency;

    public function __construct(Class55 $dependency)
    {
        $this->dependency = $dependency;
    }
}
