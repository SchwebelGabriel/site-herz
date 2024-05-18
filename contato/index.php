<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ferramenta Herz</title>
</head>

<body>
    <?php
    //Cabeçalho do Site
    include '../common/header.php';
    ?>

    <div class="container-fluid text-center">

        <h1 class="mt-5">Contato</h1>
        <p style="margin-top: -8px;" class="fw-normal fs-6">Fale com a gente</p>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <ul class="list-group">
                    <li class="list-group-item align-items-center">
                    <a class="text-black link-offset-2 link-underline link-underline-opacity-0" href="tel:+554133590300"><i class="fi fi-sr-phone-flip me-1"></i><span>Telefone Fixo: </span> <span class="fw-bold">(41) 3359-0300</span><i style="font-size:10px;" class="fi fi-bs-link ms-1 text-primary"></i></a>
                    </li>
                    <li class="list-group-item align-items-center">
                    <a class="text-black link-offset-2 link-underline link-underline-opacity-0" target="blank_" href="https://wa.me/5541987439612"><span><i class="fi fi-brands-whatsapp me-1"></i></span> <span>Celular/WhatsApp </span> <span class="fw-bold">(41) 9 8743-9612</span><i style="font-size:10px;" class="fi fi-bs-link ms-1 text-primary"></i></a>
                    </li>
                    <li class="list-group-item align-items-center ">
                    <a class="text-black link-offset-2 link-underline link-underline-opacity-0" href="mailto:atendimento@herz.net.br"><span><i class="fi fi-sr-envelopes me-1"></i></span> <span>E-mail</span> <span class="fw-bold">atendimento@herz.net.br</span><i style="font-size:10px;" class="fi fi-bs-link ms-1 text-primary"></i></a>
                    </li>
                </ul>
            </div>
        </div>



    </div>


    <?php
    //rodapé do site
    include '../common/footer.php'
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>