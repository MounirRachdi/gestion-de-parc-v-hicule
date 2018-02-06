<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>

 <!--<link rel="stylesheet" type="text/css" href="css/styles.css"/>-->
 <!-- <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="css/main.js" type="text/javascript"></script>._css3m{display:none} -->
<style type="text/css">

body
{

background-color:#e4dfd2;}

* {
    margin: 0;
    padding: 0;
    outline: none;
    
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

/*body {
    background: #eee;
    color: #444;
    -webkit-font-smoothing: antialiased;
    font-family: 'Helvetica Neue', sans-serif;
    font-size: 20px;
    font-weight: 400;
    height: auto !important;
    height: 100%;
    min-height: 100%;
    text-rendering: optimizeLegibility
}
*/
div.wrapper {
	width: 280px;
	margin-top: 20px;
	margin-right: auto;
	margin-bottom: 20px;
	margin-left: auto;
}

p {
  font-family: georgia;
  font-size: 1rem;
  line-height: 25px;
  margin: 24px 0;
  text-align: center;
}

nav.vertical {
  border-radius: 4px;
 /* box-shadow: 0 0 10px rgba(0,0,0,.15);*/
  overflow: hidden;
  text-align: center;
  background:#e4dfd2;
 
}

  nav.vertical > ul {
    list-style-type: none;
  }

    nav.vertical > ul > li {
      display: block;
    }

      nav.vertical > ul > li > label,
      nav.vertical > ul > li > a {
       /* background-color: rgb(157, 34, 60);
        background-image: -webkit-linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));
        background-image: -moz-linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));
        background-image: -o-linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));
        background-image: linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));
        border-bottom: 1px solid rgba(255,255,255,.1);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.1), 0 1px 1px rgba(0,0,0,.1);
        color: rgb(255,255,255);*/
		background-color:#e4dfd2;
        display: block;
        
		font-size:20px;
        font-weight: 500;
        height: 50px;
		text-transform:uppercase;
		color:#663300;
		
        /*letter-spacing: .5rem;font-size: .85rem;
		font-family:Arial, Helvetica, sans-serif;*/
		font-family: "Arial Rounded MT Bold";
        line-height: 50px;
        text-shadow: 0 1px 1px rgba(0,0,0,.1);
        
        transition: all .1s ease;
      }

        nav.vertical > ul > li > label:hover,
        nav.vertical > ul > li > a:hover {
       /*  background-color: rgb(114, 51, 98);
         background-image: -webkit-linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98));
         background-image: -moz-linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98));
         background-image: -o-linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98));
         background-image: linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98)); */
		 background-color:#0099CC;
         cursor: pointer;
        }

        nav.vertical > ul > li > label + input {
          display: none;
          visability: hidden;
        }
        
          nav.vertical > ul > li > div {
            background-color: #e4dfd2;;
            max-height: 0;
            overflow: hidden;
            transition: all .5s linear;
          }

            nav.vertical > ul > li > label + input:checked + div {
              max-height: 500px;
            }
 
          nav.vertical > ul > li > div > ul {
            list-style-type: none;
          }

            nav.vertical > ul > li > div > ul > li > a {
             background-color:#FFFFFF;
            /*border-bottom: 1px solid rgba(0,0,0,.05);#e4dfd2;;*
			*/
             color:#333333;
             display: block;
             font-size: 15px;
             padding: 10px 0;
             text-decoration: none;
			 font-family:Arial, Helvetica, sans-serif;
             transition: all 0.15s linear;
            }

              nav.vertical > ul > li > div > ul > li:hover > a {
                background-color: lightBlue;
                color: rgb(255,255,255);
                padding: 10px 0 10px 0px;
              }
.lien {
	font-family: "Arial Rounded MT Bold";
	font-size: 20px;
	font-style: normal;
	color:#663300;/*#000066 ;*/
	text-decoration: none;
}

.Style1 {color: #006600}
</style>

</head>
<body>
<img src="image/logo-CPG-GAFSA.png" width="208" height="170" /><br />
<br />
<div class="wrapper">
  <nav class="vertical">
    <ul>
      <li>
        <label for=""><a href="accueil.html" target="_parent"  class="lien Style1">Accueil</a></label>
		<label for="vehicule">Gérer vehicule</label>
        <input type="radio" name="verticalMenu" id="vehicule" />
        <div>
          <ul>
            <li><a href="vehicule/gest_vehicule.php" target="gestion">Gérer véhicule</a></li>
            <li><a href="vehicule/gerer_depence.php" target="gestion">Gérer dépenses</a></li>
            <li><a href="vehicule/consommation.php" target="gestion">Suivi consommation</a></li>
            
          </ul>
        </div>
      </li>
      <li>
        <label for="conducteur">Gérer conducteur</label>
        <input type="radio" name="verticalMenu" id="conducteur" />
        <div>
          <ul>
            <li><a href="Conducteur/gere_conducteur.php" target="gestion">Gérer information conducteur</a></li>
            <li><a href="Conducteur/gerer_dossier_conducteur.php" target="gestion">Gérer Dossier conducteur </a></li>
            
          </ul>
        </div>
      </li>
      <li>
	   <label for="mission">Gérer Mission</label>
	   <input type="radio" name="verticalMenu" id="mission" />
        <div>
          <ul>
            <li><a href="Mission/gerer_mission.php" target="gestion">Suivi mission</a></li>
           
          </ul>
        </div>
      </li>
	<li>   <label for=""><a href="statistique.php" target="gestion" class="lien">Consulter statistique</a></label></li>
      <li>
        <label for=""><a href="session_fin.php" target="_parent" class="lien">Deconnexion</a></label>
        <!--<input type="radio" name="verticalMenu" id="work" />
        <div>
          <ul>
            <li><a href="#">Client Login</a></li>
            <li><a href="#">Get Quote</a></li>
            <li><a href="#">Portfolio</a></li>
          </ul>
        </div>-->
      </li>
    </ul>
  </nav>
 
</div>

</body>
</html>
