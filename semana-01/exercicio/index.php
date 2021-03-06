<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="unsemantic-grid-responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="max-width color grid-100">Contato</h1>
    <form class="max-width" action="contato.php" method="post" id="frmCadastro">
        <!--ROW NAME and EMAIL-->
        <div class="grid-50 mobile-grid-100">
            <label for="txtNome">Nome</label>
            <input type="text" name="txtNome" id="txtNome" placeholder="Ana Carolina" class="frm" >
            <br>
        </div>

        <div class="grid-50 mobile-grid-100">
            <label for="txtEmail">E-mail</label>
            <input type="text" name="txtEmail" id="txtEmail" placeholder="nome@email.com" class="frm" >
            <br>
        </div>

        <!---ROW PHONE and TOPIC-->
        <div class="grid-50 mobile-grid-100">
            <label for="txtFone">Telefone</label>
            <input type="text" name="txtFone" id="txtFone" placeholder="(xx) x xxxx-xxxx" class="frm" >
            <br>
        </div>

        <div class="grid-50 mobile-grid-100">
            <label for="txtAssunto">Assunto</label>
            <select name="txtAssunto" id="txtAssunto" class="frm" >
                <option value="1">Comercial</option>
                <option value="2">Dúvidas</option>
                <option value="3">Parcerias</option>
                <option value="4">Outros</option>
            </select>
            <br>
        </div>

        <!--ROW MESSAGE-->
        <div class="grid-100 mobile-grid-100">
            <label for="txtMessage">Mensagem</label>
            <textarea class="frm" name="txtMessage" id="txtMessage" rows="5" placeholder="Texto" ></textarea>
        </div>

        <!--ROW BUTTON-->
        <div class="mobile-grid-100">
            <button onclick="validar()" type="submit" class="btn">Enviar</button>
        </div>
    </form>

    <script src="script.js"></script>
</body>
</html>