<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class30
{
    private $dependency;

    public function __construct(Class29 $dependency)
    {
        $this->dependency = $dependency;
    }
}
