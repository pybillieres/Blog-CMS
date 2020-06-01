<?php

namespace Pierre\P4\Framework;

class Request {

    private $parameters;
  
    public function __construct($parameters) 
    {
      $this->parameters = $parameters;//array_merge GET POST
    }
  

    public function existParameter($name) {
      return (isset($this->parameters[$name]) && $this->parameters[$name] != "");
    }
  

    public function Parameter($name) {
      if ($this->existParameter($name)) {
        return $this->parameters[$name];
      }
      else //paramètre introuvable
        throw new \Exception;
    }
  }