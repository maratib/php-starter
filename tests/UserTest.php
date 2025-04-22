<?php
namespace App\Core;


use PHPUnit\Framework\TestCase;


class UserTest extends TestCase {


    public function testInit() {
        // Create an instance of the View class
        $user = new User('John');
        
        
        
        
        ob_start();
        echo "HI!";
        print_r("HI!");
        var_dump("HI!");

        ob_end_clean();

        // ob_flush();


        // Check if the instance is of the correct class
        $this->assertInstanceOf(User::class, $user);

        $this->assertSame('John', $user->getName());
    }

    
}