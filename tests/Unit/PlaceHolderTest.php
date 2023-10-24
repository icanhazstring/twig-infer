<?php
declare(strict_types=1);

namespace icanhazstring\TwigInfer\Tests\Unit;

use icanhazstring\TwigInfer\PlaceHolder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(PlaceHolder::class)]
final class PlaceHolderTest extends TestCase
{
    /**
     * @test
     */
    public function returnString(): void
    {
        $placeHolder = new PlaceHolder();
        expect($placeHolder->getOutput())->toBeString();
    }
}
