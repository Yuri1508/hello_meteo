
<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">

    <title>Prompt</title>


</head>

<body>

    <div class="row" style="margin-top: 100px;">
        <div class="text-center">
            <h1 id="affiche"></h1>
        </div>
    </div>

    <div class="row" style="margin-top: 100px; justify-content: center;">
        <div class="col-md-2">
        <button type="button" class="btn btn-warning" id="active">Activer le Prompt</button>
        </div>

        <div class="col-md-1">
        <button type="button" class="btn btn-danger" id="del">Suprimer</button>
        </div>
    </div>



    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#active').click(function(){
                reponse = prompt('Merci de taper votre prénom');
                getPhrase(reponse);
            })

            $('#del').click(function(){
                $('#affiche').empty();
            })

        });

        function getPhrase(reponse){

            $.ajax({
                type: 'post',
                url: "ajax.php",
                data: {
                    'reponse': reponse
                },
                dataType: 'json',
                success: function(result) {
                    $('#affiche').append(result);
                }
            });

        }
    </script>
</body>

</html>