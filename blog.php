<?php
$welcome=false;
session_start();
if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin']) {
        $welcome=true;
    } 
} 

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>index page</title>
</head>

<body>

    
    <?php require 'nav.php'?>
    

    <div class="arrival">
        <h3 class="heading">BLOG</h3>
        
    </div>
   <div class="blog" >
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore pariatur ratione illo, quos eos rerum ipsa ab tempora corrupti cum quasi debitis rem velit sit aut eius quod explicabo sapiente facilis modi a dolor eveniet, similique veniam! Deserunt dolores excepturi, ea repellendus voluptates dignissimos corporis deleniti minima omnis natus fugiat sunt dolorum tempore enim eveniet rerum, reprehenderit eos asperiores molestias? Recusandae laboriosam quidem possimus corrupti eveniet labore minus, dignissimos quos. Repellendus officiis facere incidunt maxime temporibus natus voluptate, laborum mollitia veniam nesciunt architecto quia quisquam laboriosam asperiores voluptatibus tenetur nemo blanditiis autem libero perferendis rerum! Consequuntur ex blanditiis architecto repellendus obcaecati nam commodi earum. Doloremque repudiandae voluptas officiis aliquid expedita. Facere cum fugiat a earum. Molestiae fugit aperiam suscipit voluptatibus laudantium inventore facere est repellat sapiente eaque ipsum dolorem maxime esse eius, veniam, consectetur ab quas doloremque. Facere ipsa quo voluptatum nemo corrupti velit ipsum repudiandae labore consequatur deleniti vero illo a, distinctio qui magnam est incidunt odio amet commodi dolores sint ab expedita unde iure? Ad, nisi nemo. Temporibus laudantium architecto perferendis mollitia assumenda! Inventore quam voluptate recusandae officiis eum tenetur temporibus corrupti. Culpa incidunt voluptatem minima, sapiente fugit at. Ea at beatae unde laboriosam dicta dolore quas consequuntur quasi provident vel aut quaerat, quos natus reprehenderit nisi asperiores omnis, ullam ab ipsam ratione deleniti totam est placeat illum? Autem, dolore quasi adipisci, nam sequi reiciendis voluptatum aspernatur cum nesciunt quibusdam doloremque aliquam fugiat repudiandae, nobis eius odio rerum! Voluptates provident praesentium maiores sunt eum voluptas dolores, omnis repellat enim error quisquam optio ipsa consequuntur quidem impedit officia odit! Quia maiores ab obcaecati sed, cumque dolore minima, odio quae pariatur nesciunt molestias illum a omnis incidunt itaque, nulla quasi rem. Iusto voluptatum facilis incidunt, quibusdam maiores vitae? Dolor consequuntur perspiciatis, obcaecati deleniti earum excepturi harum minima voluptas? Ad quaerat illo perferendis nulla consequatur eum doloremque aperiam. Ratione incidunt sint accusantium eaque dicta repellendus, molestias ad odio laudantium tenetur blanditiis, officia atque sapiente quo amet, laboriosam dolore placeat. Quidem, delectus quo! Placeat itaque recusandae, quae fuga ducimus, repellat fugit suscipit ex esse, culpa sequi ratione consectetur maiores pariatur possimus dicta.</p>
   </div>


   <div class="arrival">
        <h3 class="heading">About</h3>
        
    </div>
   <div class="blog" >
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore pariatur ratione illo, quos eos rerum ipsa ab tempora corrupti cum quasi debitis rem velit sit aut eius quod explicabo sapiente facilis modi a dolor eveniet, similique veniam! Deserunt dolores excepturi, ea repellendus voluptates dignissimos corporis deleniti minima omnis natus fugiat sunt dolorum tempore enim eveniet rerum, reprehenderit eos asperiores molestias? Recusandae laboriosam quidem possimus corrupti eveniet labore minus, dignissimos quos. Repellendus officiis facere incidunt maxime temporibus natus voluptate, laborum mollitia veniam nesciunt architecto quia quisquam laboriosam asperiores voluptatibus tenetur nemo blanditiis autem libero perferendis rerum! Consequuntur ex blanditiis architecto repellendus obcaecati nam commodi earum. Doloremque repudiandae voluptas officiis aliquid expedita. Facere cum fugiat a earum. Molestiae fugit aperiam suscipit voluptatibus laudantium inventore facere est repellat sapiente eaque ipsum dolorem maxime esse eius, veniam, consectetur ab quas doloremque. Facere ipsa quo voluptatum nemo corrupti velit ipsum repudiandae labore consequatur deleniti vero illo a, distinctio qui magnam est incidunt odio amet commodi dolores sint ab expedita unde iure? Ad, nisi nemo. Temporibus laudantium architecto perferendis mollitia assumenda! Inventore quam voluptate recusandae officiis eum tenetur temporibus corrupti. Culpa incidunt voluptatem minima, sapiente fugit at. Ea at beatae unde laboriosam dicta dolore quas consequuntur quasi provident vel aut quaerat, quos natus reprehenderit nisi asperiores omnis, ullam ab ipsam ratione deleniti totam est placeat illum? Autem, dolore quasi adipisci, nam sequi reiciendis voluptatum aspernatur cum nesciunt quibusdam doloremque aliquam fugiat repudiandae, nobis eius odio rerum! Voluptates provident praesentium maiores sunt eum voluptas dolores, omnis repellat enim error quisquam optio ipsa consequuntur quidem impedit officia odit! Quia maiores ab obcaecati sed, cumque dolore minima, odio quae pariatur nesciunt molestias illum a omnis incidunt itaque, nulla quasi rem. Iusto voluptatum facilis incidunt, quibusdam maiores vitae? Dolor consequuntur perspiciatis, obcaecati deleniti earum excepturi harum minima voluptas? Ad quaerat illo perferendis nulla consequatur eum doloremque aperiam. Ratione incidunt sint accusantium eaque dicta repellendus, molestias ad odio laudantium tenetur blanditiis, officia atque sapiente quo amet, laboriosam dolore placeat. Quidem, delectus quo! Placeat itaque recusandae, quae fuga ducimus, repellat fugit suscipit ex esse, culpa sequi ratione consectetur maiores pariatur possimus dicta.</p>
   </div>
    

    <!-- Footer Section -->
    <?php require 'footer.php'?>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>