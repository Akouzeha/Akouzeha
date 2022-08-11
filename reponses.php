<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Mini-projet</title>
    <meta charset="utf-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="KOUZEHA Ammar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style_general.css" />
    <link rel="stylesheet" type="text/css" href="agencement_flex.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header class="header">
        <h1 class="logo">GANTT project using PERT method</h1>
        <nav id="navi" class="navi">
            <div class="options">
                <span class="botton" onclick="myFunction()"><i class="fa fa-bars"></i></span>
                <div class="options2">
                    <a href="index.html">Home</a>
                    <a href="reponses.php">Diagram</a>
                    <a href="info.html">Info</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- PAGE A STRUCTURER -->


    <!-- *********************************************************** -->

    <section class="content">
        <div class="titreprincipale">
            <h1>The Diagram</h1>
            <h5>Kouzeha Ammar</h5>
        </div>

        <div class="article1">
            <article>
                <h3> prtie 1 </h3>
                <h5>mise en oeuvre du </h5>
                <p>blabblabamalala</p>
            </article>
        </div>


        <div class="files">
            <?php
   
            // Specifying directory
            $mydir = getcwd();
           
            // Scanning files in a given directory in ascending order
            $myfiles = scan_dir1($mydir);

            foreach ($myfiles as $file) {
                if (strpos($file, '.pdf') !== false) {
                    echo "<iframe src='".$file."' width='100%' height='600'>";
                }
            } 
            function scan_dir1($dir)
            {
                $files_array = scandir($dir);
                $img_array   = array();
                $img_dsort   = array();
                $final_array = array();

                foreach($files_array as $file)
                {
                    if(($file != ".") && ($file != "..") && ($file != ".svn") && ($file != ".htaccess"))
                    {
                        $img_array[] = $file;
                        $img_dsort[] = filemtime($dir . '/' . $file);   
                    }
                }

                $merge_arrays = array_combine($img_dsort, $img_array);
                krsort($merge_arrays);

                foreach($merge_arrays as $key => $value)
                {
                    $final_array[] = $value;    
                }

                return (is_array($final_array)) ? $final_array : false;
            }
             ?>
        </div>




    </section>
    <script>
        function myFunction() {
            var x = document.getElementById("navi");
            if (x.className === "navi") {
                x.className += " responsive";
            } else {
                x.className = "navi";
            }
        }
    </script>

</body>

</html>
