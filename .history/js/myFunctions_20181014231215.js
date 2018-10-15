function offreValues($idOffre)
{
    $.ajax(
    {
        type:"post",
        url:"getOffreByIdOffre",
        data:"idOffre="+$idOffre,
        success:function(data)
        {
            window.location.href="setOffre_view".append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
