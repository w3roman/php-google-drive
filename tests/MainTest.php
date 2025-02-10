<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use w3lifer\Google\Drive;

final class MainTest extends TestCase
{
    public function testUpload()
    {
        $googleDrive = new Drive([
            'pathToCredentials' => __DIR__ . '/_data/credentials.json',
            'pathToToken' => __DIR__ . '/_data/token.json',
        ]);
        $fileId = $googleDrive->upload(__DIR__ . '/_data/test.txt');
        $this->assertEquals(33, strlen($fileId));
        $this->assertStringStartsWith('1', $fileId);
    }

    public function testCreateFolder()
    {
        $googleDrive = new Drive([
            'pathToCredentials' => __DIR__ . '/_data/credentials.json',
            'pathToToken' => __DIR__ . '/_data/token.json',
        ]);
        $fileId = $googleDrive->createFolder('test');
        $this->assertEquals(33, strlen($fileId));
        $this->assertStringStartsWith('1', $fileId);
    }
}
