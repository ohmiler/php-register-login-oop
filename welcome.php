<?php 

    session_start();

    if ($_SESSION['id'] == "") {
        header("location: signin.php");
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="mt-5">Welcome, <?php echo $_SESSION['fname']; ?></h1>
        <hr>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa vel blanditiis soluta aspernatur commodi nobis eaque minima eum dolor, facere debitis consequuntur nesciunt! Ratione dolores labore aspernatur commodi, perspiciatis tempore. Officiis nam enim vitae debitis deserunt, placeat voluptates alias, voluptas explicabo ad, earum et maxime. Odit placeat inventore ratione! Accusantium autem esse unde fugit repudiandae optio voluptatibus repellat? Dolorum, magni molestiae adipisci temporibus tempore est maiores sunt nulla nihil ullam doloremque quam cumque harum aut vero delectus earum nam? Accusantium tempora, at voluptatibus reprehenderit sed, optio ducimus earum facilis harum, dicta ab dolorem! Mollitia nobis dolorum fuga illo doloribus nulla sit impedit inventore, reiciendis omnis aspernatur eligendi laborum minima dolorem fugit. Ad maiores, blanditiis nisi nobis similique, voluptas necessitatibus dolorem at esse saepe iste eligendi nam excepturi quidem suscipit repellat cumque. Corporis, dolorum eum? A distinctio libero animi placeat vel odio dolor adipisci non autem? Natus facere nesciunt ullam cum et eaque consectetur quae officia. Eaque voluptatum, amet minima minus reiciendis dolores quidem dolore vero consequatur, quibusdam neque laborum, id voluptatem temporibus! Nisi mollitia veniam, dolores minima unde error exercitationem, nam aspernatur accusantium sapiente ut fugit tempore at corrupti nesciunt, accusamus ea? At natus perferendis, molestias beatae animi nam cumque.
        </p>
        <hr>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>


<?php 

}
?>
    