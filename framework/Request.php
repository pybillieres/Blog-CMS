<?php

namespace Pierre\P4\Framework;

class Request {

    private $parameters;
  
    public function __construct($parameters) 
    {
      $this->parameters = $parameters;
    }
  
    // Renvoie vrai si le paramètre existe dans la requête
    public function existeParameter($name) {
      return (isset($this->parameters[$name]) && $this->parameters[$name] != "");
    }
  
    // Renvoie la valeur du paramètre demandé
    public function Parameter($name) {
      if ($this->existeParameter($name)) {
        return $this->parameters[$name];
      }
      else //paramètre introuvable
        throw new \Exception("Paramètre '$name' absent de la requête");
    }
  }