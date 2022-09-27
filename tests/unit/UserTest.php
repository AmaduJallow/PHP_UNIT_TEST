<?php

class UserTest extends PHPUnit\Framework\TestCase
{
    public function testThatReturnUserF_Name(){
        $user = new App\Models\User();
        
        $user->setFirstName('Billy');
        
        $this->assertEquals($user->getFirstName(),'Billy');
    }
    public function testThatReturnUserL_Name(){
        $user = new App\Models\User();
        $user->setLastName('Smith');

        $this->assertEquals($user->getLastName(),'Smith');
        
    }
    public function testThatReturnFullName(){
         $user = new App\Models\User();
         $user->setFirstName(' Phoenix');
         $user->setLastName('Smith      ');
        
         $this->assertEquals($user->getFullName(),'Phoenix Smith');
    }
    public function testThatEmailAddressCanBeSet(){
        $user = new App\Models\User();
        $user->setEmail('pharmacy@example.com');
        
        $this->assertEquals($user->getEmail(),'pharmacy@example.com');
        
    }

    public function testThatEmail(){
        $user = new App\Models\User();
           $user->setFirstName(' Phoenix');
         $user->setLastName('Smith      ');
        $user->setEmail('pharmacy@example.com');
        $this->assertArrayHasKey('full_name',$user->getEmailVariables());
        $this->assertArrayHasKey('email',$user->getEmailVariables());
        
        $this->assertEquals($user->getEmailVariables()['full_name'],
        "Phoenix Smith");
          $this->assertEquals($user->getEmailVariables()['email'],
          "pharmacy@example.com");
        
    }
} 