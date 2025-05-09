<?php  

class Usuario{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;

    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

   
    public function getNombre()
    {
        return $this->nombre;
    }

  
    public function setNombre($nombre): self
    {
        $this->nombre = $this->db->real_escape_string($nombre);

        return $this;
    }

   
    public function getApellidos()
    {
        return $this->apellidos;
    }

   
    public function setApellidos($apellidos): self
    {
        $this->apellidos = $this->db->real_escape_string($apellidos);

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }

 
    public function setEmail($email): self
    {
        $this->email = $this->db->real_escape_string($email);

        return $this;
    }

 
    public function getPassword()
    {
        return $this->password;
    }

  
    public function setPassword($password): self
    {
        $this->password = password_hash($this->db->real_escape_string($password), PASSWORD_BCRYPT, ['const' => 4]);

        return $this;
    }

    public function getRol()
    {
        return $this->rol;
    }


    public function setRol($rol): self
    {
        $this->rol = $rol;

        return $this;
    }


    public function getImagen()
    {
        return $this->imagen;
    }

 
    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function save(){
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', NULL)";
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }

        return $result;
    }
}