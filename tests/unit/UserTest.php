<?php
class UserTest extends PHPUnit\Framework\TestCase
{
    protected $user;
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->user =  new App\Models\User();
    }


    public function testThatReturnUserF_Name(){

        $this->user->setFirstName("Amadu       ");

        $this->assertEquals("Amadu", $this->user->getFirstName());

}
public function testThatReturnUserL_Name(){


        $this->user->setLastName("Jallow");
        $this->assertEquals("Jallow", $this->user->getLastName());

}
public function testThatReturnUserFull_Name(){

        $this->user->setLastName("Jallow");
        $this->user->setFirstName("Amadu");
        $this->assertEquals("Amadu Jallow", $this->user->getFullName());

}
public function testThatReturnUserDetails(){


        $this->user->setFirstName('Amadu');
        $this->user->setLastName('Jallow');
        $this->user->setEmail('amadu@example.com');

        $this->assertEquals(["Amadu Jallow","amadu@example.com"], $this->user->getEmailVariables());
}

}