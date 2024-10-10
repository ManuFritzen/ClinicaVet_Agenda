<?php
    $erro = $_GET['error'] ?? '';
    $errorMessage = '';

    if ($erro === 'excluir_dados') {
        $errorMessage = '<span style="color:#FF3F3A;text-align:center;">Erro ao excluir a consulta! Tente novamente.</span>';
    }
    usort($listaAgendamentos, function($a, $b) {
        $dataHoraA = strtotime($a['data'] . ' ' . $a['hora']);
        $dataHoraB = strtotime($b['data'] . ' ' . $b['hora']);
        return $dataHoraA - $dataHoraB;
    });

    // Depois de ordenar, continue o processo de renderização dos cards
    $consultaContent = '';
    if (count($listaAgendamentos) === 0) {
        $consultaContent = '<h1 class="title">Não existem consultas cadastradas</h1>';
    } else {
        $consultaItems = [];
        foreach ($listaAgendamentos as $consulta) {
            // Buscar o nome do usuário
            $sth = $connection->prepare("SELECT nome FROM usuario WHERE id = :id_usuario");
            $sth->bindParam(':id_usuario', $consulta['id_usuario']);
            $sth->execute();
            $usuario = $sth->fetch(PDO::FETCH_ASSOC);
            $nome_usuario = $usuario['nome'];

            // Formatando data e hora
            $dataFormatada = date("d-m-Y", strtotime($consulta['data']));
            $horaFormatada = date("H:i", strtotime($consulta['hora']));

            // Criar conteúdo da consulta
            $consultaItem = '<div class="consulta">';
            $consultaItem .= "<table class=\"agendamentosDetalhes\">
                                <tr><td>Nome:</td><td>{$nome_usuario}</td></tr>
                                <tr><td>Idade:</td><td>{$consulta['idade']}</td></tr>
                                <tr><td>Data:</td><td>{$dataFormatada}</td></tr>
                                <tr><td>Hora:</td><td>{$horaFormatada}</td></tr>
                                <tr><td>Motivo:</td><td>{$consulta['motivo']}</td></tr>
                              </table>";

                              if ($id_usuario == $consulta['id_usuario']) {
                                $consultaItem .= "<div class=\"icons\">
                                                    <ion-icon class=\"icon_editar\" name=\"create\"
                                                    onclick=\"window.location.href='editar.php?id={$consulta['id']}'\"></ion-icon>
                                                    <ion-icon class=\"icon_excluir\" name=\"trash\"
                                                    onclick=\"window.location.href='../controllers/excluirAgendamento.php?id={$consulta['id']}'\"></ion-icon>
                                                  </div>";
            }
            $consultaItem .= '</div>';
            $consultaItems[] = $consultaItem;
        }
        $consultaContent = '<div class="agendamentos">' . implode('', $consultaItems) . '</div>';
    }
?>
