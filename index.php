<?php include "header.php";

include "dataBase.php";

$albums=$db->query("SELECT * FROM albums");


?>

?>

<div class="container">


<div class="row mt-3 d-flex justify-content-center">
    <div class="col-8">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/slider/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Amir Azimi</h5>
                        <p>man Ba Hame Badam Joz To</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/slider/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Roozbeh Bemani</h5>
                        <p>Basse Bargard</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/slider/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Shadmehr Aghili</h5>
                        <p>Batel</p>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>







    </div>
</div>


    <hr class="text-light">
    <h4 class="text-light">New Albums</h4>
    <div class="row mt-3">
        <?php foreach ($albums as $album):?>
        <?php if ($album["id"]>=(($albums->num_rows)-5)):?>
        <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center mt-3 objectAnimation">
            <a href="musics.php?artist=<?php echo $album["artists_id"]?>&album=<?php echo $album["id"];  ?>">
                <img src="<?php echo $album["image"]; ?>" style="width:200px" class="rounded-4">
                <h6 class="text-light mt-1 subname"><?php echo $album["name"];?></h6>
            </a>

        </div>
            <?php endif;?>
        <?php endforeach; ?>

    </div>



</div>


<?php include "footer.php"; ?>