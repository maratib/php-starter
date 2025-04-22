<?php
namespace App\Core;


use PHPUnit\Framework\TestCase;


class UserTest extends TestCase {


    public function testViewInstantiation() {
        // Create an instance of the View class
        $user = new User('John');
        

        // Check if the instance is of the correct class
        // $this->assertInstanceOf('View', $view);

        $this->assertSame('John', $user->getName());
    }

    
}