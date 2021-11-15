<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Array Task</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&amp;subset=cyrillic-ext,latin-ext,vietnamese,cyrillic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="font-family: Montserrat, sans-serif;">
    <div>
        <div class="container">
            <div class="card">
                <div class="card-header" style="text-align: center;">
                    <h3>Task -&nbsp;<span>Array</span></h3>
                </div>
                <div class="card-body">
                    <!-- Php of ARRAY starts here -->

                    <?php
                    $arr = [
                        [
                            "id"    => 500,
                            "p_id"  => 0,
                            "title" => "Bangladesh"
                        ],
                        [
                            "id"    => 510,
                            "p_id"  => 500,
                            "title" => "Dhaka"
                        ],
                        [
                            "id"    => 511,
                            "p_id"  => 510,
                            "title" => "Uttara"
                        ],
                        [
                            "id"    => 512,
                            "p_id"  => 510,
                            "title" => "Khailgaon"
                        ],
                        [
                            "id"    => 513,
                            "p_id"  => 500,
                            "title" => "NoyaKhali"
                        ],
                        [
                            "id"    => 514,
                            "p_id"  => 513,
                            "title" => "Maijdi"
                        ],
                        [
                            "id"    => 515,
                            "p_id"  => 0,
                            "title" => "Canada"
                        ],
                        [
                            "id"    => 516,
                            "p_id"  => 515,
                            "title" => "Toronto"
                        ],

                    ];

                    
                    foreach($arr as $key =>$country){
                        if($arr[$key]["p_id"] == 0){
                            echo("<ul>".$country['title']."</ul>");
                            foreach($arr as $key2 =>$city){
                                if($arr[$key2]["p_id"] == $arr[$key]['id']){
                                echo('<li style="margin-left:60px;">'.$city['title']."</li>");
                                foreach($arr as $key3 =>$sub_city){
                                    if($arr[$key3]["p_id"] == $arr[$key2]['id']){
                                    echo('<li style="margin-left:90px;">'.$sub_city['title']."</li>");
                                    }
                                }
                                }
                            }
                        }
                    }
                    ?>



                </div>
                <div class="card-footer" style="text-align: center;">
                    <p>Made with&nbsp;<i class="fa fa-heart-o"></i><span>By<a class="footer-link" href="https://www.facebook.com/azharasel1/" target="_blank">Md Rasel</a></span></p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>