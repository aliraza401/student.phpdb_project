<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
    <title>LMS Admin</title>


    <?php 
      
      if( isset( $_POST["author_submit"]) ){
        $con = new mysqli("localhost","root","","LMS_FURC") or die("not connected to database");
        $id = $_POST["id"];
        $name = $_POST["name"];

        if(mysqli_query($con , "INSERT INTO author VALUES ('$id','$name')")){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Author added success</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }else{
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Author added faild</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
        }
      }


      if( isset( $_POST["supplier_submit"]) ){
        $con = new mysqli("localhost","root","","LMS_FURC") or die("not connected to database");
        $id = $_POST["id"];
        $name = $_POST["name"];

        if(mysqli_query($con , "INSERT INTO supplier VALUES ('$id','$name')")){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>supplier added success</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }else{
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>supplier added faild</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
        }
      }


      if( isset( $_POST["staff_submit"]) ){
        $con = new mysqli("localhost","root","","LMS_FURC") or die("not connected to database");
        $id = $_POST["id"];
        $name = $_POST["name"];

        if(mysqli_query($con , "INSERT INTO staff VALUES ('$id','$name')")){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>staff added success</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }else{
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>staff added faild</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
        }
      }


      if( isset( $_POST["member_submit"]) ){
        $con = new mysqli("localhost","root","","LMS_FURC") or die("not connected to database");
        $id = $_POST["id"];
        $name = $_POST["name"];
        $contact = $_POST["contact"];

        if( mysqli_query($con , "INSERT INTO member VALUES ('$id' , '$name' , '$contact')  " )){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>member added success</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }else{
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>member added faild</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
        }
      }

      if( isset( $_POST["book_submit"]) ){
        $con = new mysqli("localhost","root","","LMS_FURC") or die("not connected to database");
        $id = $_POST["id"];
        $name = $_POST["name"];
        $shelf_no = $_POST["shelf_no"];
        $price = $_POST["price"];
        $staff_id = $_POST["staff_id"];
        $supplier_id = $_POST["supplier_id"];

        if( mysqli_query($con , "INSERT INTO book VALUES ('$id' , '$name' , '$price' , '$shelf_no','$staff_id','$supplier_id')  " )){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>book added success</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }else{
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>book added faild</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
        }
      }

      if( isset( $_POST["issue_book_submit"]) ){
        $con = new mysqli("localhost","root","","LMS_FURC") or die("not connected to database");
        $book_id = $_POST["book_id"];
        $m_id = $_POST["m_id"];
        $issue_date = $_POST['issue_date'];

        if( mysqli_query($con , "INSERT INTO `book_member` (`book_id`, `m_id`, `issue_date`, `return_date`) VALUES ('$book_id', '$m_id', '$issue_date', NULL);" )){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>book added success</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }else{
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>book added faild</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
        }
      }

      if( isset( $_POST["return_book_submit"]) ){
        $con = new mysqli("localhost","root","","LMS_FURC") or die("not connected to database");
        $book_id = $_POST["book_id"];
        $m_id = $_POST["m_id"];
        $return_date = $_POST['return_date'];

        if( mysqli_query($con , "UPDATE book_member SET `return_date`= '$return_date' WHERE `book_id` = '$book_id' AND `m_id` = '$m_id' " )){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>book rertun success</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }else{
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>book rertun faild</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
        }
      }

      if( isset( $_POST["author_book_submit"]) ){
        $con = new mysqli("localhost","root","","LMS_FURC") or die("not connected to database");
        $book_id = $_POST["book_id"];
        $a_id = $_POST["a_id"];

        if( mysqli_query($con , "INSERT INTO `author_book` VALUES ('$book_id' , '$a_id')" )){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>book rertun success</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }else{
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>book rertun faild</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
        }
      }
 
   ?>



  </head>
  <body class="text-white">

   <!-- issue book , return book , book,author-->

   <section class="container mt-5 ">
        <div class="row">
            <!--issue book-->
            <div class="col-4 bg-success pb-5">
                <div class="py-5 text-center">
                    <h2 class="display-5 ">Issue book</h2>
                </div>
                <form method='POST' action="#">
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label >book id</label>
                        <input type="text" placeholder="Enter book id" class="form-control" name="book_id" >
                      </div>
                      <div class="form-group col-md-6">
                        <label >member id</label>
                        <input type="text" placeholder="member id" class="form-control" name="m_id">
                      </div>
                    </div>
                    <div class="form-group ">
                        <label >issue date</label>
                        <input type="date" placeholder="yyyy-mm-dd" class="form-control" name="issue_date">
                    </div>    
                    <button type="submit" name="issue_book_submit" class="btn btn-primary mt 3 text-center mt-3 ">Issue Book</button>
                  </form>
            </div>
            <!--return book-->
            <div class="col-4 bg-warning pb-5">
                <div class="py-5 text-center">
                    <h2 class="display-5 ">return book</h2>
                </div>
                <form method='POST' action="#">
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label >book id</label>
                        <input type="text" placeholder="Enter book id" class="form-control" name="book_id" >
                      </div>
                      <div class="form-group col-md-6">
                        <label >member id</label>
                        <input type="text" placeholder="Enter Member id" class="form-control" name="m_id">
                      </div>
                    </div>
                    <div class="form-group ">
                        <label >issue date</label>
                        <input type="date" placeholder="yyyy-mm-dd" class="form-control" name="return_date">
                    </div>      
                    <button type="submit" name="return_book_submit" class="btn btn-primary mt 3 text-center mt-3 ">Ruturn Book</button>
                  </form>
            </div>
            <!--book/author book-->
            <div class="col-4 bg-secondary pb-5">
                <div class="py-5 text-center">
                    <h2 class="display-5 ">map book and Author</h2>
                </div>
                <form method='POST' action="#">
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label >book id</label>
                        <input type="text" placeholder="Enter book id" class="form-control" name="book_id" >
                      </div>
                      <div class="form-group col-md-6">
                        <label >author id</label>
                        <input type="text" placeholder="Enter author id" class="form-control" name="a_id">
                      </div>
                    </div>    
                    <button type="submit" name="author_book_submit" class="btn btn-primary mt 3 text-center mt-3 ">Map Book Author</button>
                  </form>
            </div>
        </div>
   </section>
    

     <!--add new book-->

     <section class="bg-dark text-white mt-5 container"> 
        <div class="py-5 text-center">
            <h2 class="display-5 ">Add new book</h2>
        </div>
    </section>

    <section class="container bg-dark pb-5">
        <form method='POST' action="#">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >book id</label>
                <input type="text" placeholder="Enter book id" class="form-control" name="id">
              </div>
              <div class="form-group col-md-6">
                <label >Name</label>
                <input type="text" placeholder="Enter book name" class="form-control" name="name">
              </div>
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label >shelf no</label>
                  <input type="text" placeholder="Enter shelf no" class="form-control" name="shelf_no">
                </div>
                <div class="form-group col-md-6">
                  <label >price</label>
                  <input type="text" placeholder="Enter price" class="form-control" name="price">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label >staff id</label>
                  <input type="text" placeholder="Enter staff id" class="form-control" name="staff_id">
                </div>
                <div class="form-group col-md-6">
                  <label >supplier id</label>
                  <input type="text" placeholder="Enter supplier id" class="form-control" name="supplier_id">
                </div>
            </div>
            

            <button type="submit" name="book_submit" class="btn btn-primary mt 3 text-center mt-3 btn-lg ">Enter new book</button>
          </form>

    </section>

    <!--add new member-->

    <section class="bg-success text-white mt-5 container">
        <div class="py-5 text-center">
            <h2 class="display-5 ">Add new member</h2>
        </div>
    </section>

    <section class="container bg-success pb-5">
        <form method='POST' action="#">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >Member id</label>
                <input type="text" placeholder="Enter member id" class="form-control" name="id" >
              </div>
              <div class="form-group col-md-6">
                <label >Name</label>
                <input type="text" placeholder="Enter Member name" class="form-control" name="name">
              </div>
            </div>
            <div class="form-group">
              <label >Contact Number</label>
              <input type="text" class="form-control"  placeholder="Enter member contact number" name="contact">

            <button type="submit" name="member_submit" class="btn btn-primary mt 3 text-center mt-3 btn-lg ">Enter new member details</button>
          </form>

    </section>

    <!--add new staff-->

    <section class="bg-danger text-white mt-5 container">
        <div class="py-5 text-center">
            <h2 class="display-5 ">Add new staff</h2>
        </div>
    </section>

    <section class="container pb-5 bg-danger">
        <form method='POST' action="#">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >staff id</label>
                <input type="text" placeholder="Enter staff id" class="form-control" name="id">
              </div>
              <div class="form-group col-md-6">
                <label >Name</label>
                <input type="text" placeholder="Enter staff name" class="form-control" name="name">
              </div>
            </div>

            <button type="submit" name="staff_submit" class="btn btn-primary mt 3 text-center mt-3 btn-lg">Enter new staff details</button>
          </form>

    </section>

    <!--add new supplier-->

    <section class="bg-warning text-white mt-5 container">
        <div class="py-5 text-center">
            <h2 class="display-5 ">Add new supplier</h2>
        </div>
    </section>

    <section class="container pb-5 bg-warning">
        <form method='POST' action="#">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label >supplier id</label>
                <input type="text" placeholder="Enter supplier id" class="form-control" name="id">
                </div>
                <div class="form-group col-md-6">
                <label >Name</label>
                <input type="text" placeholder="Enter supplier name" class="form-control" name="name" >
                </div>
            </div>

            <button type="submit" name="supplier_submit" class="btn btn-primary mt 3 text-center mt-3 btn-lg">Enter new supplier details</button>
            </form>

    </section>


    <!--add new author-->
    <section class="bg-primary text-white mt-5 container">
        <div class="py-5 text-center">
            <h2 class="display-5 ">Add new author</h2>
        </div>
    </section>

    <section class="container py-5 bg-primary mb-5">
        <form method='POST' action="#">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label >author id</label>
                <input type="text" placeholder="Enter author id" class="form-control" name="id">
                </div>
                <div class="form-group col-md-6">
                <label >Name</label>
                <input type="text" placeholder="Enter author name" class="form-control" name="name">
                </div>
            </div>

            <button type="submit" name="author_submit" class="btn btn-success mt 3 text-center mt-3 btn-lg">Enter new author details</button>
        </form>

    </section>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>