
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date', 'Catalogo') ?>

<?php echo Catalogo($atpresupuesto,1,array(
  'getprincipal' => 'getNroexp',
  'getsecundario' => 'getNomsolben',
  'campoprincipal' => 'nroexp',
  'camposecundario'=> 'nomsolben',
  'campobase' => 'atayudas_id',
  ), 'Atayudas_Aciestsoceco', 'atayudas', '' );
?>


