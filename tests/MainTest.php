<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use w3lifer\Google\Drive;

final class MainTest extends TestCase
{
    public function testUpload(): void
    {
        $googleDrive = new Drive([
            'pathToCredentials' => __DIR__ . '/credentials.json',
            'pathToToken' => __DIR__ . '/token.json',
        ]);
        $fileId = $googleDrive->upload(__DIR__ . '/_data/tmp.txt');
        $this->assertTrue(is_string($fileId));
        $this->assertEquals(33, strlen($fileId));
        $this->assertStringStartsWith('1', $fileId);
    }
}
