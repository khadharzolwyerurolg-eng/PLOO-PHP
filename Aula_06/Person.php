<?php
class Person
{
    /**
     * @var string($name);
     * @var int($age);
     */

    private $age, $name;

    private function getName(): string 
    {
        return $this->name;
    }

    private function getAge(): int
    {
        return $this->age;
    }

    private function setName(string $name): self 
    {
        $this->name = $name;
        return $this;
    }

    private function setAge(int $age): self 
    {
        $this->age = $age;
        return $this;
    }
}