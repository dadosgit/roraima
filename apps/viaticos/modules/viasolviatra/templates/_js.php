<script language="Javascript">
    if($('viasolviatra_tipvia').value=='N')
        $('divcodpai').hide();
    else
        $('divcodpai').show();
    function rellenar(id)
    {
        if($(id).value=='')
            $(id).value=$(id).value.pad(10,'#',0)
        else
            $(id).value=$(id).value.pad(10,'0',0)
    }

    function CalculaDias(id)
    {
        toAjax(4,getUrlModulo()+'ajax',$(id).value,'','&fecdes='+$('viasolviatra_fecdes').value+'&fechas='+$('viasolviatra_fechas').value);
    }

    function bloquearcaja(id)
    {
        if($(id).value!='')
            $(id).readOnly=true;

    }
    $('divcodcat').hide();

</script>