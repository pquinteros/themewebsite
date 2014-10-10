<?php
require_once("class.php");
Class Generic
{


public function get_slide()
{
$sql="select * from slides order by id_slide asc";
$res=mysql_query($sql,Conectar::con());
while ($reg=mysql_fetch_assoc($res))
{
$this->slide[]=$reg;
}
return $this->slide;
}

/*
public function get_productos($cat)
{
$sql="select * from productos where id_categoria=$cat order by id_productos asc";
$res=mysql_query($sql,Conectar::con());
while ($reg=mysql_fetch_assoc($res))
{
$this->pro[]=$reg;
}
return $this->pro;
}


public function get_producto($id)
{
$sql="select * from productos where id_productos=$id";
$res=mysql_query($sql,Conectar::con());
$reg=mysql_fetch_assoc($res);
$this->prod[]=$reg;

return $this->prod;
}

public function get_page($id)
{
$sql="select * from pages where id_page=$id";
$res=mysql_query($sql,Conectar::con());
$reg=mysql_fetch_assoc($res);
$this->page[]=$reg;

return $this->page;
}
  */   
}
?>