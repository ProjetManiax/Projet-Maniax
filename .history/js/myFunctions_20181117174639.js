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

function getDemandes($id)
{

     $.ajax(
        {
            async: true,
            type:"post",
            url:"allDemandesByIdUser",
            data:"id="+$id,
            success:function(data)
            {
                $("#sesDemandes").empty();
                $("#sesDemandes").append(data);
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
        );
}

function getNom($id)
{

     $.ajax(
        {
            async: true,
            type:"post",
            url:"getNomUserClicked",
            data:"id="+$id,
            success:function(data)
            {
                $("p[name='nomUser']").empty();
                $("p[name='nomUser']").append(data);
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
        );
}

function verificationDeal($lesClicks)
{   
    var monOffreCliquee = $lesClicks[0];
    var maDemandeCliquee = $lesClicks[1];
    var sonOffreCliquee = $lesClicks[2];
    var saDemandeCliquee = $lesClicks[3];
    $.ajax(
        {
            async: true,
            type:"post",
            url:"getIdOffresDemandesClicked",
            data:"lesClicks="+$lesClicks,
            success:function(data)
            {
                alert("Création du deal réussi vous pouvez le visionner sur la page d'accueil !")
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
    );
    alert($monOffreCliquee);
}



