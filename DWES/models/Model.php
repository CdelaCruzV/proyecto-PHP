<?php 

    // Interfaz de mis modelos
    interface Model{
        //Me va a devolver todos los elementos
        public function findAll();


        //Me devuelve el elemento filtrado por id
        public function findId();

        //Inserta en la base de datos
        public function save();

        //Actualizar en la base de datos filtrando
        public function update();

        //Eliminar de la bbdd
        public function delete();
    }
?>