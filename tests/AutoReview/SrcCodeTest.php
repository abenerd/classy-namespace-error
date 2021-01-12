<?php

namespace App\Tests\AutoReview;

use Ergebnis\Classy\Construct;
use Ergebnis\Classy\Constructs;
use Ergebnis\Test\Util\Helper;
use PHPUnit\Framework\TestCase;

final class SrcCodeTest extends TestCase
{
    use Helper;

    public function testSrcClassesAreAbstractOrFinal(): void
    {
        self::assertClassesAreAbstractOrFinal(__DIR__ . '/../../src');
    }

    /** @dataProvider constructProvider */
    public function testConstructsExist(Construct $construct): void
    {
        $name = $construct->name();
        self::assertTrue(class_exists($name) || trait_exists($name) || interface_exists($name) || file_exists($name));
    }

    /** @return \Generator<Construct> */
    public function constructProvider(): \Generator
    {
        $constructs = Constructs::fromDirectory(__DIR__ . '/../../src');

        foreach ($constructs as $construct) {
            yield $construct->name() => [
                $construct,
            ];
        }
    }
}
