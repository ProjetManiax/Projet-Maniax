function offreValues($idOffre)
{
    $.ajax(
    {
        type:"post",
        url:"getOffreByIdOffre",
        data:"idOffre="+$idOffre,
        success:function(data)
        {
            window.location.href='setOffre.php',data;
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
