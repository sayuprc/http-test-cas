<?php

declare(strict_types=1);

namespace Sayuprc\HttpTestCase\Tests;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Sayuprc\HttpTestCase\TestResponse;

class TestResponseTest extends TestCase
{
    /**
     * Testing assertions
     *
     * @return void
     */
    public function testAssertions(): void
    {
        $response = new TestResponse(
            new Response(
                200,
                [
                    'Host' => 'test',
                    'Content-Type' => 'application/json',
                    'line' => [
                        'a',
                        'b',
                        'c',
                        'd',
                    ],
                    'Location' => 'https://example.com',
                ],
                '{"name": "hoge", "birthday": {"year": 2023, "month": 3, "day": 30}}'
            )
        );

        $response
            ->assertStatusCode(200)
            ->assertHeader('host', ['test'])
            ->assertHeaderLine('line', 'a, b, c, d')
            ->assertLocation('https://example.com')
            ->assertContentType('application/json')
            ->assertBody('{"name": "hoge", "birthday": {"year": 2023, "month": 3, "day": 30}}')
            ->assertBodyContains('{"name"')
            ->assertJson('{"name": "hoge", "birthday": {"year": 2023, "month": 3, "day": 30}}')
            ->assertJson(['name' => 'hoge', 'birthday' => ['year' => 2023, 'month' => 3, 'day' => 30]])
            ->assertJsonKey('birthday.year', 2023)
            ->assertJsonKey('birthday', ['year' => 2023, 'month' => 3, 'day' => 30])
            ->assertBodyContains('day');
    }
}
