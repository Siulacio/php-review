<?php

class Employee
{
  public function __construct(
      public string $name,
      public int $age,
      public string $position
  ) {}

    public function __toString(): string
    {
        return sprintf("%s tiene %d años y es %s", $this->name, $this->age, $this->position);
    }
}

$employee = new Employee('Luis', 30, 'Desarrollador');
echo $employee;

$employee2 = new Employee('Karen', 33, 'Contadora');
echo $employee2;

