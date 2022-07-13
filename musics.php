<?php include "header.php";
include "dataBase.php";

$album_id=$_GET["album"];
$artist_id=$_GET["artist"];
$musics=$db->query("SELECT * FROM musics WHERE album_id=$album_id");

$album_name=$db->query("SELECT name FROM albums WHERE id=$album_id");
$album_name=$album_name->fetch_assoc();

$artist_name=$db->query("SELECT name FROM artists WHERE id=$artist_id");
$artist_name=$artist_name->fetch_assoc();
?>


    <div class="container">
        <h2 class="text-light mt-3" >Musics of <?php echo $album_name["name"];  ?> Album</h2>
        <hr class="text-light">
        </div>



<?php if($musics->num_rows==0):?>
    <div class="alert alert-dark " role="alert" style="text-align: center">
        <b>There are currently no music from this album</b>
    </div>
<?php else:?>

    <?php foreach ($musics as $music):?>


        <div class="row " dir="rtl">
            <div class="col-12 col-sm-5 col-lg-4 " dir="ltr">
                <ul class="list-group musicList">
                    <li class="list-group-item d-flex  align-items-center musicList">
                        <a style="display:flex" href="#">
                            <div  class="image-parent">
                                <img class="rounded-2" src="<?php echo $music["image"]?>" style="width: 55px">
                            </div>

                            <div class="text-light musicListName"  >
                                <h5 class="text-light" ><?php echo $artist_name["name"];?></h5>
                                <h6 class="text-light"><?php echo $music["name"];?></h6>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


    <?php endforeach; ?>
<?php endif;?>


<?php include "footer.php"; ?>

