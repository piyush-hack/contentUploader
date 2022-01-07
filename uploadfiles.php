
<html lang="en">

<head>
    <title>Blog page</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    <title>Blog</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"
        integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

    <style>
        .ta {
          background-color: white;
          position: absolute;
          margin-left: -50px;
        }
        
        #myModal {
          min-width: 80vw;
        }
        
        #uploadlink {
          width: 100%;
        }
        
        .modal-body {
          overflow-x: scroll;
        }
        select {
          border: none;
          padding: 5px;
          border-radius: 5px;
        }
        
        img,
        iframe {
          max-width: 100%;
        }
    </style>


</head>

<body style="padding:10vw">
    <h1>Create your blog</h1>
    <br><br>
    <form action="filesLogic.php" method="post" enctype="multipart/form-data" id="my_form">
        <label class="h3">Front Image :</label>
        <input type="text" id="title" name="img" class="form-control" placeholder="ex : https://www.timeoutdubai.com/cloud/timeoutdubai/2021/09/11/hfpqyV7B-IMG-Dubai-UAE-1200x800.jpg " />
        <br>
        <label class="h3">Topic :</label>
        <input type="text" id="title" name="manganame" class="form-control" placeholder="ex : Learn php " required />
        <br>
        <label class="h3">Sub Heading :</label>
        <textarea name="subheadcontentDetails" id="subheadcontentDetails" rows="40" cols="80">
        </textarea>
        <input type="text" id="subheadingdata" name="chaptername" class="form-control" placeholder="ex : php in one block " style="width:0;height:0px"
            required />
        <br>
        <label for="inputState">Type</label>
          <select id="inputState" class="form-control" name="type">
            <option selected>Choose...</option>
            <option>AllManga</option>
            <option>YouTube</option>
            <option>Plans</option>
            <option>Content</option>
          </select>
        <br>
        <label class="h3 theorytag" >Theory</label>
        <br>
        <button type="button" class="ta btn " data-toggle="modal" data-target="#myModal">
            <img src="https://img.icons8.com/ios-glyphs/30/000000/upload--v1.png" />
        </button>
        <textarea name="contentDetails" id="contentDetails" rows="40" cols="80">
        </textarea>
        <input type="text" name="mangalink" id="senddata" class="form-control" style="width:0;height:0px" required>
        <br><br>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog" style="margin-top: 100 px;">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Upload File</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p>To Upload File <br>
                            Click On Browse >> Select The File >> Click Upload >>
                            Copy Generated Link Paste It In Input Box Below Press "Insert"</p>
                        <iframe id="uploadframe"
                            src="https://script.google.com/macros/s/AKfycbwGqgLQJ5jCvgxYdAlSDekFy7X9i7iWksPE9BdL1YT3IDleH6ylLwuffw1vN2cOHaPS/exec"
                            frameborder="0" style="position: relative; height: 100%; width: 100%;"></iframe>
                        <hr>
                        <input type="text" name="" id="uploadlink" placeholder="Paste Link Here">
                        <ul id="prevUploads">

                        </ul>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="ondrive()">Insert</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <label for="inputPassword2" class="sr-only">Password</label>
        <input type="password" name="cpass" class="form-control" placeholder=" Page Password ">
        <br>
        <h3><button type="button" class="btn btn-outline-success" onclick="showsub()">ENABLE SUBMIT BTN</button></h3>
        <br>
        
        <div id="subheading"></div>
        <div id="my-theory" ></div>
        <br>
        <button id="submit" class="btn btn-primary btn-lg btn-block" type="submit" style="display: none;"
            name="save">Submit Blog</button>
    </form>
    
    <form action="changepassLogic.php" method="post">
      <div class="form-group mb-2">
        <label for="staticEmail2" class="sr-only">Email</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Create Password">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
      </div>
      <button type="submit" name="submit" class="btn btn-primary mb-2">Confirm Password</button>
    </form>

    <script src="js/blog-create.js"></script>
        <script src="js/textarea2.js"></script>

 
    <script>


    </script>




</body>

</html>