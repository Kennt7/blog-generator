<?php

//Először ellennőrizzük, h el lett-e küldve a form a post metódussal
if(isset($_POST['submit'])){
/*Ha elküldtük a form-ot, létrehozunk egy asszociatív tömböt, ahol
az értékeinket fogjuk tárolni. */
$new_blog[] = array(
    'title' => $_POST['title_input'],
    'lead' => $_POST['lead_input'],
    'image' => $_POST['image_input'],
    'content' => $_POST['content_input'],
    'keywords' => $_POST['keywords_input']
);

/*Mielőtt eltároljuk az új blog tömböt, ellenőrizni kell, h megvan e az első
rekordunk. Ezt a filesize ellenőrzésével tehetjük meg.*/
if(filesize("blogs.json") ==0){
    //ha ez az első rekord, akkor létrehozunk belül egy tömböt
    $first_blog = array($new_blog);

    /*Létrehozunk egy tömböt a json fájlnak és ebben tároljuk a blogoka
      Átadjuk a rekordunkat egy generikus változónak későbbi használatra.
    t*/
    $saving_data = $first_blog;
}
else{/*Ha ez nem az első rekord, és a blogok eltárolódnak a fájlban, mi kihúzzuk
    az összes régi blogot és hozzáadjuk az újat.
    Dekódolni kell az adatot amit elhozunk.(fetch)
     */
    $old_blogs = json_decode(file_get_contents("blogs.json"));

    //hozzáadjuk a tömbhöz az új blogunkat
    array_push($old_blogs,$new_blog);

    //hozzáadjuk az új rekordunkat a generikus változónkhoz
    $saving_data=$old_blogs;

}
if(!file_put_contents("blogs.json",json_encode($saving_data,JSON_PRETTY_PRINT),LOCK_EX)){
    $error= "Error storing blog, please try again!";
}
else{
$success="Your blog is stored correctly!";
}

}
header("Location:blogs.json ");
die()
?>
