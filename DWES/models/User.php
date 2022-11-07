<?php

class User implements Model
{

    private $id;

    private $nombre;

    private $apellidos;

    private $email;

    private $password;



    /**

     * Class constructor.

     */

    public function __construct()
    {
    }



    function getId()
    {

        return $this->id;
    }



    function getNombre()
    {

        return $this->nombre;
    }
    function getApellidos()
    {

        return $this->apellidos;
    }



    function getEmail()
    {

        return $this->email;
    }



    function getPassword()
    {

        return $this->password;
    }



    function setId($id)
    {

        $this->id = $id;
    }



    function setNombre($nombre)
    {

        $this->nombre = $nombre;
    }



    function setApellidos($apellidos)
    {

        $this->apellidos = $apellidos;
    }



    function setEmail($email)
    {

        $this->email = $email;
    }



    function setPassword($password)
    {

        $this->password = password_hash($password, PASSWORD_BCRYPT, ['cont' => 4]);
    }

    //Me va a devolver todos los elementos
    public function findAll()
    {
    }

    //Me devuelve el elemento filtrado por id
    public function findId()
    {
    }

    //Inserta en la base de datos
    public function save()
    {
    }

    //Actualizar en la base de datos filtrando
    public function update()
    {
    }

    //Eliminar de la bbdd
    public function delete()
    {
    }
}
