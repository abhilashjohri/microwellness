<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navigation</title>
      <link rel="stylesheet" type="text/css" href="Navigation.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>

<nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#">
                    <img src="<?= base_url('assets'); ?>/Images/logo (1).png" class="img-responsive">
                </a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">GUARDS</a></li>
                    <li><a href="#">SECURITY COMPANY</a></li>
                    <li><a href="#">ABOUT US</a></li>
                     <li><a href="#">CONTACT US</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav> 

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>

        $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

    </script>

</body>
</html>