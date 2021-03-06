<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'O método de validação de e-mail deve ser passado uma matriz.';
$lang['email_invalid_address'] = 'Endereço de e-mail invalido: %s';
$lang['email_attachment_missing'] = 'Não é possível localizar o seguinte anexo de e-mail: %s';
$lang['email_attachment_unreadable'] = 'Não é possível abrir este anexo: %s';
$lang['email_no_from'] = 'Não é possível enviar mensagens sem cabeçalho "De".';
$lang['email_no_recipients'] = 'Você deve incluir destinatários: para, Cc ou Bcc';
$lang['email_send_failure_phpmail'] = 'Não é possível enviar e-mails usando o PHP mail(). Seu servidor pode não estar configurado para enviar correio usando este método.';
$lang['email_send_failure_sendmail'] = 'Não é possível enviar e-mails usando o PHP Sendmail. Seu servidor pode não estar configurado para enviar correio usando este método.';
$lang['email_send_failure_smtp'] = 'Não é possível enviar e-mails usando o PHP SMTP. Seu servidor pode não estar configurado para enviar correio usando este método.';
$lang['email_sent'] = 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: %s';
$lang['email_no_socket'] = 'Não é possível abrir um socket para o Sendmail. Verifique as configurações.';
$lang['email_no_hostname'] = 'Você não especificou um nome de host SMTP.';
$lang['email_smtp_error'] = 'O erro de SMTP a seguir foi encontrado: %s';
$lang['email_no_smtp_unpw'] = 'Erro: você deve atribuir um nome de usuário e senha SMTP.';
$lang['email_failed_smtp_login'] = 'Falha ao enviar o comando AUTH LOGIN. Erro: %s';
$lang['email_smtp_auth_un'] = 'Falha ao autenticar o nome de usuário. Erro: %s';
$lang['email_smtp_auth_pw'] = 'Falha ao autenticar a senha. Erro: %s';
$lang['email_smtp_data_failure'] = 'Não é possível enviar dados: %s';
$lang['email_exit_status'] = 'Sair do código de status: %s';
