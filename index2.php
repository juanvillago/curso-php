
<?php
/*
class Person {
    protected $firstName; // public, protected <-> private
    protected $lastName;
    protected $nickname;
    protected $changedNickname = 0;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setNickname($nickname)
    {
        if ($this->changedNickname >= 2) {
            throw new Exception(
                "You can't change a nickname more than 2 times"
            );
        }

        $this->nickname = $nickname;

        $this->changedNickname++;
    }

    protected function setvalidation($nickname)
    {
        $contar= strlen($this->nickname=$nickname);
        if ($contar <= 2) {
            throw new Exception(
                "el nombre debe tener al menos 2 caracteres"
            );
             
        }
        else {
            $this->nickname=$nickname;
        }
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person1 = new Person('Duilio', 'Palacios');

$person1->setNickname('S');
$person1->setNickname('S');

exit($person1->getNickname());




echo $person1->getFullName();


*/

class Person
{
protected $firstName;
protected $lastName;
protected $nickName;
protected $changeNickName = 0;
protected $birthDay;

public function __construct($firstName,$lastName,$birthDay)
{
$this->firstName = $firstName;
$this->lastName = $lastName;
//$this->nickName = $nickName;
$this->birthDay = $birthDay;
}

public function getFirstName()
{
return $this->firstName;
}

public function getLastName()
{
return $this->lastName;
}

public function setNickName($nickName)
{
$this->changeNickName();
$this->strNickaName($nickName);
$this->nickNameDistingNameLastName($nickName);
$this->nickName = $nickName;
}

protected function changeNickName()
{
if($this->changeNickName >= 2)
{
throw new Exception("You can't change a nickname more than 2 times");
}
$this->changeNickName++;
}

protected function strNickaName($nickName)
{
if(strlen($nickName) < 2)
{
throw new Exception("El nickname debe tener por lo menos 2 caracteres");
}
}

protected function nickNameDistingNameLastName($nickName)
{
if($nickName == $this->firstName || $nickName == $this->lastName)
{
throw new Exception("El nickname no puede ser igual al firstName o lastName");
}
}

public function getNickName()
{
return strtolower($this->nickName);
}

public function getBirthDay()
{
return $this->birthDay;
}

public function getAge()
{
$birthDay = new Datetime($this->birthDay);
$toDay = new Datetime();
$age = $toDay->diff($birthDay);
return $age->y;
}

public function getFullName()
{
return $this->firstName. ' ' .$this->lastName;
}
}

$person1 = new Person('Lucas','Guardón','05-08-1987');

$person1->setNickName('el_negro');
$person1->setNickName('lala');
//$person1->setNickName('hola');

echo $person1->getAge();
echo $person1->getFullName();
echo $person1->getNickName();