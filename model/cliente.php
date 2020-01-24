<?php
class cliente
{

	private $pdo;
    
    public $id;
    public $dni;
    public $Nombre;
    public $Apellido;  
    public $Status;
    public $Fecha;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar($fecha,$fecha2)
	{
		if (empty($fecha)) {
			$sql="SELECT * FROM cliente";
		  }else{
;
			$sql= " SELECT * FROM cliente where fecha between '".$fecha."' and '".$fecha2."' ";
		  }
		   $sql;
		try	{
			$result = array();
			$stm = $this->pdo->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	




}