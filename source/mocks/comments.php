<?php
    include './source/utils/constants.php';
    $comments = array(
        array(
            'id' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'data' => '12/05/2019',
            'comment' => 'Ótima empresa para se trabalhar',
            'felling' => $fellings['HAPPY']
        ),
        array(
            'id' => 1,
            'user_id' => 2,
            'company_id' => 2,
            'data' => '10/05/2019',
            'comment' => 'Empresa bem dinamica e divertida!',
            'felling' => $fellings['HAPPY']
        ),
        array(
            'id' => 1,
            'user_id' => 1,
            'company_id' => 2,
            'data' => '17/05/2019',
            'comment' => 'Empresa legal!',
            'felling' => $fellings['HAPPY']
        ),
        array(
            'id' => 1,
            'user_id' => 2,
            'company_id' => 3,
            'data' => '15/05/2019',
            'comment' => 'Pouco pessoal na equipe',
            'felling' => $fellings['SAD']
        ),
    )
?>