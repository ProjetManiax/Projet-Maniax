function offreValues($cheminImage)
{
    $.ajax(
    {
        type:"post",
        url:"<?php echo base_url('user/setDemande_view') ;?>",
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
