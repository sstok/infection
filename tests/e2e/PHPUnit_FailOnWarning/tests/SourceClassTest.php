<?php

namespace PHPUnit_FailOnWarning\Test;

use PHPUnit_FailOnWarning\SourceClass;
use PHPUnit\Framework\TestCase;

class SourceClassTest extends TestCase
{
    /**
     * @dataProvider getNames
     */
    public function test_hello(int $idx, string $name)
    {
        $sourceClass = new SourceClass();
        $names = self::getNames2();

        $this->assertSame($name, $names[$idx]);
        $this->assertSame('hello', $sourceClass->hello());

        // Ensure this method gets called for coverage.
        $sourceClass->getNames();
    }

    public function getNames(): iterable
    {
        $names = new SourceClass();

        yield from $names->getNames();
    }

    public static function getNames2(): array
    {
        return [
            'Hello You',
            'Hello There'
        ];
    }
}
