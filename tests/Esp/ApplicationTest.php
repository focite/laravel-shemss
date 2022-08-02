<?php

namespace Esp;

use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{

    public function testCreateFile()
    {
        $app = new Application('', '');
        $data = $app->CreateFile('aasdagag.pdf', 1);
        $this->assertStringContainsString('pdf', $data);
    }
}
