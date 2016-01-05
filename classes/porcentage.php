<?php 

 class porcentage extends Modelo 
{
	protected $id;
	protected $porcentage;
	
	public function saca_user()
    { 
        $result = $this->_db->query('SELECT * FROM user'); 
         
        $users = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $users; 
    } 
}

?>