<?php
function anti_injection($sql) {
    // remove palavras que contenham sintaxe sql
    $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $sql);
    $sql = trim($sql); //limpa espaços vazio
    $sql = strip_tags($sql); //tira tags html e php
    $sql = addslashes($sql); //Adiciona barras invertidas a uma string
    return $sql;
}
if ($_POST) {
    $nome = strip_tags(trim($_POST['nome']));
    $email = strip_tags(trim($_POST['email']));
    $telefone = strip_tags(trim($_POST['telefone']));
    $assunto = "Formulário Newsletter. Site Portal Cd-Easy";

    if (empty($nome)) {
        echo "<script>alert('O campo Nome não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if (empty($email)) {
        echo "<script>alert('O campo E-mail não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if (empty($telefone)) {
        echo "<script>alert('O campo Telefone não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else {
        /* Envio de mensagem para o pora o CD-EASY CURSOS E TREINAMENTOS */
        $mensagem = "Contato enviado a partir da newsletter do site Portal Cd-Easy. Nome do participante: ".$nome.", <br /> Email para contato: ".$email.", Telefone: ".$telefone."";
        $headers = "MIME-Version: 1.1" . $quebra_linha;
        $headers .= "Content-type: text/html; charset=iso-8859-1" . $quebra_linha;
        $headers .= "From: contato@portalcdeasy.com.br" . $email . $quebra_linha;
        $headers .= "Reply-To: " . $emailremetente . $quebra_linha;
        if (!mail($email, $assunto, $mensagem, $headers, "-r" . $email)) { // Se for Postfix
            $headers .= "Return-Path: felipe_michael_fonseca@hotmail.com" . $emailsender . $quebra_linha; // Se "não for Postfix REturn path enviado para: jorgeyabu@gmail.com"
            mail($email, $assunto, $mensagem, $headers);
        }
        /* ENVIO DA MENSAGEM PARA O PARTICIPANTE */
        $mensagem2  .= "<p>Olá <strong>" . $nome . "</strong>. O seu cadastro na Promoção no site PortalCdEasy foi efetuado com sucesso.</p>";
		$mensagem2  .= "<p>Observação - Não é necessário responder este email.</p><br>";
		$mensagem2  .= "<p>_______________</p>";
		$mensagem2  .= "<p>Atenciosamente</p>";
		$mensagem2  .= "<p>Organização (Cd-Easy. Cursos e Treinamentos)</p>";
                $envia =  mail($email,"Sua mensagem foi recebida com sucesso!",$mensagem2,$headers);       
        print "<script>alert('Cadastro efetuado com sucesso. Uma mensagem de confirmação foi enviada para o seu email')</script>";
    }
}