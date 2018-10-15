function offreValues()
{
    $.ajax(
    {
        type:"post",
        url:"/setOffre_view",
        data:"offre="+$("#offre").val(),
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
