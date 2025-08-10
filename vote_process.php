<?php
    header('Content-Type: text/html; charset=UTF-8');
    include("conect_db/class_vote.php");
    include("conect_db/connect_vote.php");

    $code_sql=filter_input(INPUT_POST,'code_sql') ?? null;

        if(($code_sql=="into")){

            $party_id=filter_input(INPUT_POST,'party_id') ?? null;
            $party_year=filter_input(INPUT_POST,'party_year') ?? null;
            $uesr_id=filter_input(INPUT_POST,'uesr_id') ?? null;

            $into_vote=new manage_vote("add",$uesr_id,$party_year,$party_id,"-");

            echo $into_vote->call_order_error();

        }else{

        }

?>

