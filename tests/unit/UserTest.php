<?php

class UserTest extends PHPUnit\Framework\TestCase
{
    public function testThatReturnUserF_Name(){
        $user = new App\Models\User();
        $user->setFirstName("Amadu       ");

        $this->assertEquals("Amadu", $user->getFirstName());



}
public function testThatReturnUserL_Name(){
        $user = new App\Models\User();

        $user->setLastName("Jallow");
        $this->assertEquals("Jallow", $user->getLastName());

}
public function testThatReturnUserFull_Name(){
        $user = new App\Models\User();
        $user->setLastName("Jallow");
        $user->setFirstName("Amadu");

        $this->assertEquals("Amadu Jallow", $user->getFullName());

}

}