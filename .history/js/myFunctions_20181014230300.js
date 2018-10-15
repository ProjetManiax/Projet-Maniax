function offreValues($idOffre)
{
    $.ajax(
    {
        type:"post",
        url:"getOffreByIdOffre",
        data:"idOffre="+$idOffre,
        success:function(data)
        {
            window.location.href="setOffre_view?data=",data;
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
