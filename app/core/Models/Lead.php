<?php

namespace App\core\Models;

class Lead extends Model
{
  public string $name;
  public string $email;
  public string $phone;
  public string $source;
  public array $data;
  public array $fillable = ["name", "email", "phone", "source"];
  public array $dataFillable = ["tipo_do_problema"];

  public function fill(array $data)
  {
    foreach ($data as $key => $value) {
      if (in_array($key, $this->fillable)) {
        $this->$key = $value;
      }

      if (in_array($key, $this->dataFillable)) {
        $this->data[$key] = $value;
      }
    }
  }
}