function offreValues()
{
    $.ajax(
    {
        type:"post",
        url:"getOffreByIdOffre",
        data:"idOffre="+$(".offre").val(),
        success:function(data)
        {
            
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
