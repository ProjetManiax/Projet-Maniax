function offreValues($idOffre)
{
    $.ajax(
    {
        type:"post",
        url:"getOffreByIdOffre",
        data:"idOffre="+$idOffre,
        success:function(data)
        {
            alert("Infos de l'offre recuperes");
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
