function offreValues($idOffre)
{
    $.ajax(
    {
        type:"post",
        url:"getOffreByIdOffre",
        data:"idOffre="+$idOffre,
        success:function(data)
        {
            window.location.href="setOffre_view";
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}

function demandeValues($idDemande)
{
    $.ajax(
    {
        type:"post",
        url:"getDemandeByIdDemande",
        data:"idDemande="+$idDemande,
        success:function(data)
        {
            window.location.href="setDemande_view";
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}

function rechercheUserForService($valueInput)
{
    $.ajax(
    {
        type:"post",
        url:"getUserForThisService",
        data:"valueInput="+$valueInput,
        success:function(data)
        {
            $("#lesUsers").empty();
            $("#lesUsers").append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}

function getOffres($id)
{
     $.ajax(
        {
            async: true,
            type:"post",
            url:"allOffresByIdUser",
            data:"id="+$id,
            success:function(data)
            {
                $("#sesOffres").empty();
                $("#sesOffres").append(data);
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
        );
}



