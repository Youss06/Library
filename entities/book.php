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

class user {

  Protected $name,
            $firstName,
            $city,
            $id_number;



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
              public function getName()
              {
                return $this->name;
              }

              public function setName($name)
              {
                if (is_string($name))
                {
                  $this->name = $name;
                }
              }
              public function getFirstName()
              {
                return $this->firstName;
              }

              public function setFirstName($firstName)
              {
                if (is_string($firstName))
                {
                  $this->firstName = $firstName;
                }
              }

              public function getTitle()
              {
                return $this->title;
              }

              public function setCity($city)
              {
                if (is_string($city))
                {
                  $this->city = $city;
                }
              }

              
}
