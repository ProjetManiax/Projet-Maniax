function offreValues($idOffre)
{
    $.ajax(
    {
        type:"post",
        url:"getOffreByIdOffre",
        data:"idOffre="+$idOffre,
        success:function(data)
        {
            window.location.href='getOffreByIdOffre';
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
