<?php

use Illuminate\Support\Facades\Blade;
use Pest\Expectation;

function expectBlade(string $blade): Expectation
{
    return expect(Blade::render($blade));
}

it('can do simple in_array checks', function () {
    expectBlade(<<<'blade'
    @in('test', ['foo', 'test'])
        Hello, world!
    @endin
    blade)
        ->toContain('Hello, world!');
});

it('can do strict in_array checks', function () {
    expectBlade(<<<'blade'
    @in(1, ['1', '2'], true)
        Hello, world!
    @endin
    blade)
        ->not->toContain('Hello, world!');
});

it('can use strict with named arguments', function () {
    expectBlade(<<<'blade'
    @in(1, ['1', '2'], strict: true)
        Hello, world!
    @endin
    blade)
        ->not->toContain('Hello, world!');
});

it('can do an in check on multiple needs', function () {
    expectBlade(<<<'blade'
    @in([1, 2], [1, 2])
        Hello, world!
    @endin
    blade)
        ->toContain('Hello, world!');

    expectBlade(<<<'blade'
    @in([3, 4], [1, 2])
        Hello, world!
    @endin
    blade)
        ->not->toContain('Hello, world!');
});
