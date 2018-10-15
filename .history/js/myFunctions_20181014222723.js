function offreValues()
{
    $.ajax(
    {
        type:"post",
        url:"user/getOffreByIdOffre",
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
