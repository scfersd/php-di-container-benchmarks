<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class74
{
    private $dependency;

    public function __construct(Class73 $dependency)
    {
        $this->dependency = $dependency;
    }
}
