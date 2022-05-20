<?php
/**
 * Description of Departament
 *
 *  @author Juan Miguel Hurtado Montejano -> jmhurtadomontejano@gmail.com
 */
class Department {
    private $idDepartment;
    private $name;
    private $description;
    private $phone;
    private $emailDepartment;
    private $iconDepartment; 
    private $disable;
    
    //Va a almacenar los datos de los usuarios relacionado con este Departamento
    private $users;

    public function __construct()
    {
    }

    public static function initValues($idDepartment, $name, $description, $phone, $emailDepartment, $iconDepartment, $disable) {
        debbuger("initValues");
        $obj = new Department();
        $obj->idDepartment = $idDepartment;
        $obj->name = $name;
        $obj->description = $description;
        $obj->phone = $phone;
        $obj->emailDepartment = $emailDepartment;
        $obj->iconDepartment = $iconDepartment;
        $obj->disable = $disable;
        return $obj;
    }
    
    function getIdDepartment() {
        return $this->idDepartment;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getPhone() {
        return $this->phone;
    }

    function getEmailDepartment() {
        return $this->emailDepartment;
    }

    function getIconDepartment() {
        return $this->iconDepartment;
    }

    function getDisable() {
        return $this->disable;
    }

    function setIdDepartment($id): void {
        $this->id = $idDepartment;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

    function setPhone($phone): void {
        $this->phone = $phone;
    }

    function setEmailDepartment($emailDepartment): void {
        $this->emailDepartment = $emailDepartment;
    }

    function setIconDepartment($iconDepartment): void {
        $this->iconDepartment = $iconDepartment;
    }

    function setDisable($disable): void {
        $this->disable = $disable;
    }
    
}
