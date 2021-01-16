<?php
namespace Prueba\Classes;
class Persona{
    private $nombre;
    private $apellido;
    
    public function __construct(){
        $this->nombre = "Jose Ivan";
        $this->apellido = "Ascurra Villalba";
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function getNombre(){
        return $this->nombre;     
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function __toString(){
        return "El nombre de la persona es: {$this->nombre} y su apellido es: {$this->apellido}";
    }
}