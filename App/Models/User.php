<?php
namespace App\Models;
class User
 {
    private ?String $first_name;
    private ?String $last_name;
    private ?String $email;

    public function __construct($first_name = null,$last_name = null,$email = null){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }
    public function setFirstName($name){
        $this->first_name =trim($name);
    }
    public function getFirstName(){
       return $this->first_name;
    } 
    public function setLastName($name){
        $this->last_name = trim($name);
    }
    public function getLastName(){
        return $this->last_name;
    }
    public function getFullName(){
        return trim(ucwords($this->first_name." ".$this->last_name));
}
public function setEmail($email){
    $this->email = trim($email);
    return;
}
public function getEmail(){
  return  $this->email;
}
 public function getEmailVariables(){
    return (
        [
        'full_name' => "$this->first_name $this->last_name",
        'email' => "$this->email"
        ]
    );
    
 }

 }
 
?>