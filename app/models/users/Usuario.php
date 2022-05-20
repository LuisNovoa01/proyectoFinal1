<?php

/**
 * Description of Usuario
 *
 * @author Juan Miguel Hurtado Montejano -> jmhurtadomontejano@gmail.com
 */
class Usuario {
    private $id;
    private $nombre;
    private $surname;
    private $dni;
    private $gender;
    private $birth_date;
    private $email;
    private $phone;
    private $postalCode;
    private $address;
    private $password;
    private $photo;
    private $rol;
    private $cookie_id;
    private $restart_password;
    private $restart_code;
    private $disableUser;

    public function __construct()
    {
    }

    public static function initValues($id, $nombre, $surname, $dni, $gender, $birth_date, $email, $phone, $postalCode, $address, $rol, $department) {
        $obj = new Usuario();
        $obj->id = $id;
        $obj->nombre = $nombre;
        $obj->surname = $surname;
        $obj->dni = $dni;
        $obj->gender = $gender;
        $obj->birth_date = $birth_date;
        $obj->email = $email;
        $obj->phone = $phone;
        $obj->postalCode = $postalCode;
        $obj->address = $address;
        $obj->rol = $rol;
        $obj->department = $department;
        return $obj;
    }

    //Array que va a contener los artículos de este usuario
    private $articulos;
    
    
    function getCookie_id() {
        return $this->cookie_id;
    }

    function setCookie_id($cookie_id): void {
        $this->cookie_id = $cookie_id;
    }

        function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getSurname() {
        return $this->surname;
    }

    function getDni() {
        return $this->dni;
    }

    function getGender() {
        return $this->gender;
    }

    function getBirth_date() {
        return $this->birth_date;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhone() {
        return $this->phone;
    }

    function getPostalCode() {
        return $this->postalCode;
    }

    function getAddress() {
        return $this->address;
    }

    function getPassword() {
        return $this->password;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getRol() {
        return $this->rol;
    }

    function getDepartment(){
        return $this->department;
    }

    function getUserDepartment() {
        $departmentDAO = new departmentDAO(ConexionBD::conectar());
        $this->department = $departmentDAO->find($this->getDepartment());
        if(!$this->department){
        }else{
        return $this->department;
    }
    }

    function getRestart_password() {
        return $this->restart_password;
    }

    function getRestart_code() {
        return $this->restart_code;
    }

    function getDisableUser() {
        return $this->disableUser;
    }

    function getArticulos() {
        return $this->articulos;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setSurname($surname): void {
        $this->surname = $surname;
    }

    function setDni($dni): void {
        $this->dni = $dni;
    }

    function setGender($gender): void{
        $this->gender = $gender;
    }

    function setBirth_date($birth_date): void{
        $this->birth_date = $birth_date;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setPhone($phone): void {
        $this->phone = $phone;
    }
    
    function setPostalCode($postalCode): void {
        $this->postalCode = $postalCode;
    }

    function setAddress($address): void {
        $this->address = $address;
    }

    function setPassword($password): void {
        $this->password = $password;
    }

    function setPhoto($photo): void {
        $this->photo = $photo;
    }

    function setArticulos($articulos): void {
        $this->articulos = $articulos;
    }

    function setRol($rol): void {
        $this->rol = $rol;
    }

    function setDepartment($department): void {
        $this->department = $department;
    }

    function setRestart_password($restart_password): void {
        $this->restart_password = $restart_password;
    }

    function setRestart_code($restart_code): void {
        $this->restart_code = $restart_code;
    }

    function setDisableUser($disableUser): void {
        $this->disableUser = $disableUser;
    }

}