function offreValues()
{
    var monOffre = Array();

    $('input[type=hidden]').each
    (
        function(){
            monOffre.push($(this).val());
        }
    )

    $.ajax(
    {
        type:"post",
        url:"index.php/user/setOffre_view",
        data:"offre="+monOffre,
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
