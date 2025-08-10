<?php 
include("conect_db/connect_vote.php");
include("conect_db/class_vote.php");
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Results</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f3f3;
            text-align: center;
            margin: 0;
        }
        .header {
            background-color: #0057ff;
            color: red;
            font-size: 2rem;
            font-weight: bold;
            padding: 20px 0;
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 50px 0;
        }
        .card {
            width: 200px;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }
        .card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 4px solid white;
        }
        .card h2 {
            font-size: 18px;
            margin: 10px 0;
        }
        .score {
            font-size: 32px;
            font-weight: bold;
            color: white;
        }
        button {
            background-color: white;
            border: none;
            padding: 10px 15px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: rgb(255, 253, 253);
        }
        .pink { background-color: #ff66b2; }
        .yellow { background-color: #ffd700; }
        .purple { background-color: #8000ff; }
        .home-button {
            margin-top: 30px;
        }
        .home-button button {
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>!พรรคที่ได้คะแนนเสียงมากที่สุดในปีนี้!</h1>
    </div>
    <div class="container">

    <?php 
      $data_vote=new manage_vote("report_score",2025,"-","-","-");
      
 
        if($data_vote->call_order_error()=="success"){
            foreach($data_vote->call_order_text() as $key=>$data_vote_row){
                $party_id=isset($data_vote_row["party_id"]) ? $data_vote_row["party_id"] : null;
                $party_name=isset($data_vote_row["party_name"]) ? $data_vote_row["party_name"] : null; 
                $count_vote=isset($data_vote_row["count_vote"]) ? $data_vote_row["count_vote"] : null;
                ?>
                
        <div class="card pink">
            <img src="<?php echo $party_id;?>.jpg" alt="RC Chargers">
            <h2><?php echo $party_name;?></h2>
            <p class="score" id="score1"><?php echo $count_vote;?></p>
            
        </div>

    <?php   }
        }else{

        }
    ?>


    <div class="home-button">
      <a href="http://sukiskipiti.test/index.php" target="_self" ><button onclick="goHome()">HOME</button></a>
    </div>
</body>
</html>