function offreValues()
{
    $.ajax(
    {
        type:"post",
        url:"getOffreByIdOffre",
        data:"idOffre="+$("img[name='offre']").val(),
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
