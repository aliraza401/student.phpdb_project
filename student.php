<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
    <title>LMS Student</title>

    <?php 

   ?>

  </head>
  <body class="text-white">
<!--
    select book.book_id , book.name , book.shelf_no , staff.name as staff_name, supplier.name as suppplier_name from book INNER JOIN staff ON book.staff_id = staff.staff_id
INNER JOIN supplier ON book.supplier_id = supplier.supplier_id;
select book.book_id , book.name, author.name from book INNER JOIN author_book ON book.book_id = author_book.book_id INNER JOIN author ON author.a_id = author_book.a_id

select book.book_id , book.name , book.shelf_no , staff.name as staff_name, supplier.name as suppplier_name, author.name as author_name from book INNER JOIN staff ON book.staff_id = staff.staff_id INNER JOIN supplier ON book.supplier_id = supplier.supplier_id INNER JOIN author_book ON book.book_id = author_book.book_id INNER JOIN author ON author.a_id = author_book.a_id


-->
    
    <section class="container bg-dark mt-5 py-5">
        <form method='POST' action="#">
            <div class="form-group">
              <label >Search</label>
              <input type="text" class="form-control"  placeholder="search book" name="search">

            <button type="submit" name="search_submit" class="btn btn-primary mt 3 text-center mt-3 btn-lg ">search</button>
          </form>
    </section>

    <?php
        if( isset( $_POST["search_submit"]) ){
            $con = new mysqli("localhost","root","","LMS_FURC") or die("not connected to database");
            $search = $_POST["search"];
    
            

          }

    ?>




  <!--view books table-->
    
  <div class="text-center container mt-5 text_danger text_bold">
            
            <?php
                $con = new mysqli("localhost","root","","LMS_FURC") or die("not connected to database");
                $result = mysqli_query($con , "select book.book_id , book.name , book.shelf_no , staff.name as staff_name, supplier.name as supplier_name, author.name as author_name from book INNER JOIN staff ON book.staff_id = staff.staff_id INNER JOIN supplier ON book.supplier_id = supplier.supplier_id INNER JOIN author_book ON book.book_id = author_book.book_id INNER JOIN author ON author.a_id = author_book.a_id AND book.name = '$search';");

                if(mysqli_num_rows($result) > 0 ){
                    ?>
                        <table class="table bg-white">
            
            <thead>
                <tr>
                    <th scope="col">book_id</th>
                    <th scope="col">name</th>
                    <th scope="col">shelf no</th>
                    <th scope="col">staff name</th>
                    <th scope="col">supplier name</th>
                    <th scope="col">author name</th>
                </tr>
            <tbody>
            <?php
                
                if(mysqli_num_rows($result) > 0 ){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr><td>".$row["book_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row['shelf_no'] ."</td><td>" . $row['staff_name'] ."</td><td>" . $row['supplier_name'] ."</td><td>" . $row['author_name'] ."</td><td>" ;
                    }
                    echo "</table>" ;
                }else{
                    echo "no rows found";
                }
            ?>
            <table class="table bg-white">
            
            <?php
                }
            ?>


            <h1 class="container text-center text-white display-4 bg-danger py-4">list of all Books</h1>
            <table class="table bg-danger text-white py-3">
            
                <thead>
                    <tr>
                        <th scope="col">book_id</th>
                        <th scope="col">name</th>
                        <th scope="col">shelf no</th>
                        <th scope="col">staff name</th>
                        <th scope="col">supplier name</th>
                        <th scope="col">author name</th>
                    </tr>
                <tbody>
                <?php
                    $con = new mysqli("localhost","root","","LMS_FURC") or die("not connected to database");
                    $result = mysqli_query($con , "select book.book_id , book.name , book.shelf_no , staff.name as staff_name, supplier.name as supplier_name, author.name as author_name from book INNER JOIN staff ON book.staff_id = staff.staff_id INNER JOIN supplier ON book.supplier_id = supplier.supplier_id INNER JOIN author_book ON book.book_id = author_book.book_id INNER JOIN author ON author.a_id = author_book.a_id ORDER BY book.book_id;   ");

                    if(mysqli_num_rows($result) > 0 ){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr><td>".$row["book_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row['shelf_no'] ."</td><td>" . $row['staff_name'] ."</td><td>" . $row['supplier_name'] ."</td><td>" . $row['author_name'] ."</td><td>" ;
                        }
                        echo "</table>" ;
                    }else{
                        echo "no rows found";
                    }
                ?>
        </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>