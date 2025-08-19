<?php

class User
{
  public function getAllUsers()
  {
    // Normally you’d use a DB here; static for simplicity
    return [
      ['name' => 'Alice'],
      ['name' => 'Bob'],
    ];
  }
}
