<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../bot/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../bot/css/main.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="../bot/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../bot/css/chatBot.css" rel="stylesheet" type="text/css" />
    <link href="../bot/css/timeline.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- ajax -->
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="257be86a981729866f2fa61c-|49" defer=""></script>


</head>
<body>
    
    <div class="container">
        <input type="text" name="input_angka" id="input_angka" placeholder="Input Angka">
        <div class="row">
            <div class="col">
                <button type="button" id="btn_generate_segitiga">Generate Segitiga</button>
            </div>
            <div class="col">
                <button type="button" id="btn-ganjil">Generate Bilangan Ganjil</button>
            </div>
            <div class="col">
                <button type="button" id="btn-prima">Generate Bilangan Prima</button>
            </div>
        </div>
        <div class="row">
            <h2><Strong>Result:</Strong></h2>
            <div class="col">
                <h5 id="hasil"></h5>
            </div>
        </div>
    </div>
</body>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="257be86a981729866f2fa61c-|49" defer=""></script>
    <!-- Time line Html Ends -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../bot/js/jquery-3.1.1.min.js"></script>
    <script src="../bot/js/popper.min.js"></script>
    <script src="../bot/js/bootstrap.min.js"></script>
    <script src="../bot/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#btn_generate_segitiga').click(function() {
            var input_angka = $('#input_angka').val();
            console.log(1);

            $.ajax({
                url: "<?= site_url('Testing/generate_segitiga') ?>",
                type: "POST",
                data: "input_angka=" + input_angka,
                success: function(result) {
                    document.getElementById('hasil').innerHTML = result;
                    console.log(result);
                },
                error: function(result) {
                    $errormsg = "Error" + result;
                    alert($errormsg);
                    console.log(result);
                }
            })
        }); 

        $('#btn-ganjil').click(function() {
            var input_angka = $('#input_angka').val();
            console.log(input_angka);

            $.ajax({
                url: "<?= site_url('Testing/generate_ganjil') ?>",
                type: "POST",
                data: "input_angka=" + input_angka,
                success: function(result) {
                    document.getElementById('hasil').innerHTML = result;
                    console.log(result);
                },
                error: function(result) {
                    $errormsg = "Error" + result;
                    alert($errormsg);
                    console.log(result);
                }
            })
        }); 

        $('#btn-prima').click(function() {
            var input_angka = $('#input_angka').val();
            console.log(input_angka);

            $.ajax({
                url: "<?= site_url('Testing/generate_prima') ?>",
                type: "POST",
                data: "input_angka=" + input_angka,
                success: function(result) {
                    document.getElementById('hasil').innerHTML = result;
                    console.log(result);
                },
                error: function(result) {
                    $errormsg = "Error" + result;
                    alert($errormsg);
                    console.log(result);
                }
            })
        }); 
    });
</script>
</html>