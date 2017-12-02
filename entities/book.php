<?php

class book {
  // Protected

  Protected $title,
            $category,
            $author,
            $available,
            $summary;

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


// SETTERS
  public function getId()
    {
      return $this->id;
    }

// Setters  and Getters
    public function setId($id)
    {
      $id = (int)$id;
      if ($id > 0)
      {
        $this->id = $id;
      }
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function setTitle($title)
    {
      if (is_string($title))
      {
        $this->title = $title;
      }
    }


    public function getCategory()
    {
      return $this->category;
    }

    public function setCategory($category)
    {
      if (is_string($category))
      {
        $this->category = $category;
      }
    }

    public function getAuthor()
    {
      return $this->author;
    }

    public function setAuthor($author)
    {
      if (is_string($author))
      {
        $this->author = $author;
      }
    }

    public function getAvailable()
    {
      return $this->available;
    }


    public function setAvailable($available)
    {
      if (is_string($available))
      {
        $this->available = $available;
      }
    }


    public function getSummary()
    {
      return $this->summary;
    }


    public function setSummary($summary)
    {
      if (is_string($summary))
      {
        $this->summary = $summary;
      }
    }

}
