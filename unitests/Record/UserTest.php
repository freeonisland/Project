<?php

namespace Record;

class UserTest extends \PHPUnit\Framework\TestCase
{
    function testCanUpdateProperty()
    {
        $user = new User('user');
        $this->assertInstanceOf(User::class, $user);
        
        $user->name = 'alpha';
        $this->assertEquals('alpha', $user->name);

        $this->expectException('InvalidArgumentException');
        $user->notexistsproperty = 'nothing';
    }
}