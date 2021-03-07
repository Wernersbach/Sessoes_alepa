<?php
class Ferramentas
{
    public function sair()
    {
	    session_destroy();
	    header("Location: index.php");
    }
}
?>