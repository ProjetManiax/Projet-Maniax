function offreValues($idOffre)
{
    $.ajax(
    {
        type:"post",
        url:"getOffreByIdOffre",
        data:"idOffre="+$idOffre,
        success:function(data)
        {
            windows.location.href='setOffre_view';
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
