<?php

class book {
  // Protected

  Protected $title,
            $category,
            $author,
            $available;

    // Constructor
public function __construct(array $data){
  $this->hydrate($data);
}

// Hydrate
 public function hydrate(array $data){
    foreach ($data as $key => $value) {
        $method = 'set' . ucfirst($key);
          if (method_exists($this,$method)) {
          $this->$method($value);
    }
   }
  }
}
