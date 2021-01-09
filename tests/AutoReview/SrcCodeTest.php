<?php

namespace App\Tests\AutoReview;

use Ergebnis\Test\Util\Helper;
use PHPUnit\Framework\TestCase;

final class SrcCodeTest extends TestCase
{
    use Helper;

    public function testSrcClassesAreAbstractOrFinal(): void
    {
        self::assertClassesAreAbstractOrFinal(__DIR__ . '/../../src');
    }
}