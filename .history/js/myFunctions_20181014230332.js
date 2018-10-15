function offreValues($idOffre)
{
    $.ajax(
    {
        type:"post",
        url:"getOffreByIdOffre",
        data:"idOffre="+$idOffre,
        success:function(data)
        {
            alert(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
