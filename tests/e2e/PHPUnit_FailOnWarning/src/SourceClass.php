<?php

namespace PHPUnit_FailOnWarning;

class SourceClass
{
    public function hello(): string
    {
        return 'hello';
    }

    public function getNames(): iterable
    {
        yield [0, 'Hello You'];
        yield [1, 'Hello There'];
    }
}
