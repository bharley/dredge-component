<?php

namespace Dredge\Component\Tests;

/**
 * Ridiculously simple test suite that ensures the files are loading properly.
 */
class AutoloadingTest extends \PHPUnit_Framework_TestCase
{
    public function testComponentInterfaceLoaded()
    {
        $this->assertInternalType('string', Dredge\Component\ComponentInterface::class);
    }

    public function testComponentExceptionLoaded()
    {
        $this->assertInternalType('string', Dredge\Component\Exception\ComponentException::class);
    }

    public function testComponentSettingExceptionLoaded()
    {
        $this->assertInternalType('string', Dredge\Component\Exception\SettingException::class);
    }
}
