<?

	require_once("pdfBNRLISINM.php");
	require_once("anchoBNRLISINM.php");

	$objrep=new mysreportes();

	$obj= new pdfreporte();

	for($i=0;$i<count($obj->titulos);$i++)
	{
		$obj->anchos[$i]=$objrep->getAncho($i);
	}



#	$obj->AliasNbPages();
#	$obj->AddPage();
#	$obj->Cuerpo();
#	$obj->Output();
$tb=$obj->bd->select($obj->sql);
if (!$tb->EOF)
{ //HAY DATOS
	$obj->AliasNbPages();
	$obj->AddPage();
	$obj->Cuerpo();
	$obj->Output();
}
else
{ //NO HAY DATOS
  ?>
   <script>
   alert('No hay informacion para procesar este reporte...');
   location=("bnrlisinm.php");
   </script>
  <?
}
?>