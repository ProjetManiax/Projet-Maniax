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
        url:"<?php echo base_url('user/setDemande_view') ;?>",
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
