function offreValues()
{
    $.ajax(
    {
        type:"post",
        url:"user/setDemande_view",
        data:"offre="+$("#offre").val(),
        success:function(data)
        {
            alert('Mise à jour Ok');
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
