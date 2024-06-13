<?php


$dsn = 'mysql:dbname=football;host=localhost';
$user = 'bafode';
$password = '04082023';
$dbh = new PDO($dsn, $user, $password);

$name = $_POST['clubname'];
$description = $_POST['description'];
$Creation = $_POST['Creation'];
$Championnat_Actuel = $_POST['Championnat_Actuel'];
$Coupe_Européenne = $_POST['Coupe_Européenne'];
$Capitaine = $_POST['Capitaine'];
// function contains($checked){
//     if(str_contains($checked,"'")){
//         return true;
//     }else{
//         return false;
//     }
// }
// function pos($checked){
//     $pos = strpos($checked,"'");
// }
// function replace($checked,$pos){
//     $checked = substr_replace($checked,'\\',$pos -1,0);
//     return $checked;
// }
// function AddClub($name,$description,$Creation,$Championnat_Actuel,$Coupe_Européenne,$Capitaine){
    if(str_contains($description,"'")){
        $pos = $pos = strpos($description,"'");
        echo "Position :" . $pos . "\n";
        $new_description = str_replace("'","\'",$description);
        echo "Description :" . $description . "\n";
    }
    echo "Description :" . $new_description . "\n";
    $sth = $dbh->prepare("INSERT INTO teams(clubname,description,Creation,Championnat_Actuel,Coupe_Européenne,Capitaine) VALUES ('$name','$new_description','$Creation','$Championnat_Actuel','$Coupe_Européenne','$Capitaine')");
    $sth->execute();
// }
// AddClub($name,$description,$Creation,$Championnat_Actuel,$Coupe_Européenne,$Capitaine);

