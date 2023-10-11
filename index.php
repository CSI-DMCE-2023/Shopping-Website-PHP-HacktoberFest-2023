<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="shopping.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<style>
    .btn{
        border: 2px solid #e84118;
        font-size: 20px;
    font-style: initial;
    font-family: cursive;
    transition: all 1s ease;
    position: relative;
    }
    .btn:hover{
        color: white;
    }
    .btn::after{
        background:#e84118;
        content: "";
        transition: all 1s ease;
        width: 0%;
        height: 100%;
        left: 0;
        top: 0;
        position: absolute;
        z-index: -1;
    }
    .btn:hover::after{
        width: 100%;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-warning bg-warning sticky-top fs-5">
        <div class="container-fluid">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5pmgnxvIofhYNZtMK0t3SR9idziu8H9r1mw&usqp=CAU" alt="" srcset="" style="width: 70px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign up</button>
                    <button type="button" class="btn" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Log in</button>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mx-auto my-5 h-50">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item " data-bs-interval="3000">
                    <img src="https://media.istockphoto.com/photos/woman-holding-sale-shopping-bags-consumerism-shopping-lifestyle-picture-id1254508881?b=1&k=20&m=1254508881&s=170667a&w=0&h=e8irxc-knpSghyK9ZI19uOOHv0QDEWscs2O4BwGRcLA="
                        class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://images.unsplash.com/photo-1591085686350-798c0f9faa7f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8c2hvcHBpbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                        class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8c2hvcHBpbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                        class="d-block w-100 img-fluid" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="aboutus" id="aboutus">
            <h2 style="text-align: center;" class="fw-bolder">About Us</h2>
            <p class="lh-sm">Welcome to our website ! india's number 1 shopping website where you can find various products of your choice 
                and can have your purchase through online mode. this is india's most trusted shopping website as we provide you an assurance of successfull payment without any lag and server error. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente quos ea tempora corporis! Necessitatibus, corporis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat earum iste voluptatum excepturi, rem temporibus perspiciatis nihil a nam debitis harum quo voluptas, impedit consectetur fuga quam perferendis ipsam inventore provident ducimus. Hic deserunt non quo odit! Accusamus, unde nemo?
            </p>
        </div>
        <div class="row">
            <div class="card col-4 m-5 text-white bg-dark" style="width: 21rem;">
                <img class="card-img-top p-4"
                    src="https://media.istockphoto.com/photos/online-shopping-during-holidays-man-ordering-christmas-gift-using-picture-id1287611175?b=1&k=20&m=1287611175&s=170667a&w=0&h=uBTWJwQVoUvitH-KlIw0RcpGw8cGiyK9OOVfBbzRPaE="
                    alt="Card image cap" data-bs-toggle="modal" data-bs-target="#payment">
                <div class="card-body">
                    <h3>Payment option</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card col-4 m-5 text-white bg-success" style="width: 21rem;">
                <img class="card-img-top p-4"
                    src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c2hvcHBpbmclMjBvbmxpbmV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                    alt="Card image cap" data-bs-toggle="modal" data-bs-target="#terms">
                <div class="card-body">
                    <h3>Terms and Conditions</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card col-4 m-5 text-white bg-danger" style="width: 21rem;">
                <img class="card-img-top p-4"
                    src="https://images.unsplash.com/photo-1607083206869-4c7672e72a8a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHNob3BwaW5nJTIwb25saW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    alt="Card image cap">
                <div class="card-body">
                    <h3>Offers</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
       
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="terms" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Terms & Conditions</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Membership on the Website is free for buyers. Flipkart does not charge any fee for browsing and buying on the Website. Flipkart reserves the right to change its Fee Policy from time to time. In particular, Flipkart may at its sole discretion introduce new services and modify some or all of the existing services offered on the Website. In such an event Flipkart reserves the right to introduce fees for the new services offered or amend/introduce fees for existing services, as the case may be. Changes to the Fee Policy shall be posted on the Website and such changes shall automatically become effective immediately after they are posted on the Website. Unless otherwise stated, all fees shall be quoted in Indian Rupees. You shall be solely responsible for compliance of all applicable laws including those in India for making payments to Flipkart Internet Private Limited.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
          </div>
        </div>
      </div>
    <div class="modal fade" id="payment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Online Payment</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Card Number:</label>
                  <input type="text" class="form-control" id="recipient-nam" placeholder="enter your 16 digit card number">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Pin:</label>
                  <input type="text" class="form-control" id="recipient-name" placeholder="enter your 4 digit pin">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" style="margin: auto;">Make Payment</button>
            </div>
          </div>
        </div>
      </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="login.php" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mylogin">
                    <h2>
                        Username:
                    </h2>
                    <input type="text" placeholder="enter your username" id="username" name="username">
                    <div id="inusername" style="display: none;">
                        Please choose a username.
                      </div>
                      <div id="vausername" style="display: none;">
                        Looks good!
                      </div>
                    <h2>
                        Password:
                    </h2>
                    <input type="password" placeholder="enter your password" id="userpass" name="userpass">
                    <div id="inpass" style="display: none;">
                        Please choose a username.
                      </div>
                      <div id="vapass" style="display: none;">
                        Looks good!
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" style="margin: auto;" id="login" name="submit">Submit</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form action="signup.php" method="POST" enctype="multipart/form-data">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mylogin">
                    <h2>
                        Username:
                    </h2>
                    <input type="text" placeholder="enter your username" id="name" class="is-invaalid" name="username">
                    <div  id="innameFeedback"  style="display: none;">
                        a name must carry capital alphabet small alphabet and min 3 any number!!!
                      </div>
                      <div id="nameFeedback" style="display: none;">
                        Looks good!
                      </div>
                    <h2>
                        Email:
                    </h2>
                    <input type="email" placeholder="enter your email" id="email" class="is-invaalid" name="email">
                    <div id="inemailFeedback"  style="display: none;">
                        Enter valid email!!!
                      </div>
                      <div  id="emailFeedback" style="display: none;">
                        Looks good!
                      </div>
                    <h2>
                        Password:
                    </h2>
                    <input type="password" placeholder="enter your password" id="password" class="is-invaalid" name="password">
                    <div id="inpasswordFeedback" style="display: none;">
                        Enter strong password!!!
                      </div>
                      <div id="passwordFeedback" style="display: none;">
                        Looks good!
                      </div>

                     <div class="filname" id="filename">
                        <h2>
                        Profile photo:
                        </h2>
                     <input type="file" name="fileprofile" id="" required>
                     </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" style="margin: auto;" name="signupform" id="submit">Submit</button>
                </div>
            </div>
        </div>
       </form>
</div>
    <div class="container" >
        <div class="card" style="border-radius: 130px;">
           <h2 style="text-align: center;">Our customer Reviews</h2>
           <div class="card my-4" id="insidecard" >
             
           </div>
        </div>
    </div>
    <footer class="bg-secondary bottom-0 my-0">
        <p style="text-align: center;">copyright.ayushshukla@gmail.com</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="shopping.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>