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
        <div class="container">
            <h1 class="mt-5">Garantia</h1>


            <div class="row justify-content-center">
                <div class="col-12 col-md-7">
                    <table class="table table-striped">
                        <thead class="text-start">
                            <tr>
                                <th scope="col">Tempo De Garantia</th>
                                <th scope="col">Linha</th>
                            </tr>
                        </thead>
                        <tbody class="text-start">
                            <tr>
                                <th>12 Meses</th>
                                <td class="">Ferramentas elétricas; <br>
                                    Ferramentas de bancada;<br>
                                    Ferramentas a bateria de lítio;<br>
                                    Pistolas de pintura;<br>
                                    Bombas de água;<br>
                                    Máquinas de solda;
                                </td>
                            </tr>

                            <tr>
                                <th>6 Meses</th>
                                <td>Roçadeiras;<br>
                                    Motosserras;<br>
                                    Geradores;<br>
                                    Hobby;<br>
                                    Pneumáticas;<br>
                                    Compressores de ar.
                                </td>
                            </tr>

                            <tr>
                                <th>3 Meses</th>
                                <td>Acessórios<br>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="row justify-content-center mt-4 mt-md-4">
                        <button type="button" class="btn btn-primary fw-medium col-12 col-md-6 mb-1 mb-md-0 me-0 me-md-1">Solicitar garantia</button>
                    </div>
                </div>
                <div class="col-12 col-md-7 mt-4 mt-md-4">
                    <div class="row text-start ">
                        <h3>Como manter sua garantia Herz</h3>
                    </div>


                    <ul class="text-start" style="list-style: none;">
                        <li>- Faca revisões periódicas;</li>
                        <li>- Cuide para que o equipamento seja submetido cargas definidas no manual de instruções;</li>
                        <li>- Quedas, impactos fora do proposito de uso;</li>
                        <li>- Verifique a voltagem do produto e da rede elétrica onde será ligada.</li>
                        <li>- Utilize o equipamento for utilizado para fins ou instalado de outro modo que não o especificado no manual;</li>
                        <li>- Não repare sua ferramenta fora da Rede Autorizada;</li>
                        <li>- Os componentes originais não podem ser alterados, modificados ou substituídos;</li>
                        <li>- A estrutura técnica ou mecânica não deve ser modificada sem prévia autorização da HERZ.;</li>
                        <li>- Após o prazo de validade;</li>
                        <li>- O equipamento for utilizado para fins profissionais, comerciais, de aluguel ou de uso intensivo.</li>
                        <li>- Acessórios ou componentes do equipamento, tais como cabos de solda, conectores, porta-eletrodo e garra obra, não são cobertos pela garantia quando ocorrer desgaste por uso, apenas com garantia legal de 90 dias contra defeitos de fabricação.</li>
                    </ul>

                    <div class="row">
                        <p class="text-start">
                            <strong>Observações gerais:</strong> A garantia não cobre despesas de frete ou transporte do produto até a Assistência Técnica Autorizada HERZ, sendo os custos de responsabilidade do consumidor.
                        </p>
                        <p class="text-start">
                            Outros acessórios que são vendidos separadamente, terão política de garantia conforme descrito em sua embalagem. A garantia do equipamento não engloba tais acessórios.
                        </p>



                        <p class="fst-italic text-start mt-4">* Garantia válida para consumidores e indústria, exceto para locadoras.</p>
                    </div>
                </div>
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