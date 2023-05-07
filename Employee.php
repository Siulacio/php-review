<?php

class Employee
{
  public function __construct(
      public string $name,
      public int $age,
      public string $position
  ) {}
}

$employee = new Employee('Luis', 30, 'Desarrollador');
echo sprintf("%s tiene %d años y es %s", $employee->name, $employee->age, $employee->position);

$employee = new Employee('Karen', 33, 'Contadora');
echo sprintf("%s tiene %d años y es %s", $employee->name, $employee->age, $employee->position);

