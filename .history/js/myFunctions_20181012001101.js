function offreValues()
{
    $.ajax(
    {
        type:"post",
        url:"setOffre_view",
        data:"offre="+$("#offre").val(),
        success:function(data)
        {
            setOffre_view();
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
