<?php
	//Sa menk de respé
	#oki
	/* oki */
        //part 1************************************************************************************


                echo "Echo Cette phrase est ecrite en ''PHP<br>";
		        print "Print OKI ?''<br>";
		        echo 75;
		        $text = "oki";
		        $br = "<br>";
		        $oki = 42;
		        $oki = 41;
		        echo $br. $oki. $br. $text ;


        //part 2************************************************************************************


                $nb1 = 1;
	            $nb2 = 2;
	            $nb3 = 3;
                echo $nb3 ** $nb3. '<br>';
	            echo $nb1 + $nb2. '<br>';
	            echo $nb3 **= 4;


        //part 3 comparateur ...************************************************************************************


                var_dump(1==1); //bool(true)
                1>=1 // true
                Classique !


        //part 4 conditions************************************************************************************


                || ou
                && et
                XOR si un seul est vrai


        //part 5 portée des variables************************************************************************************


                comme d''hab sauf pour les "global"
                $oki = 1;
                function oki(){
                    global $oki; // il faut call la variable glo dans la fonction
                    static $toki = $oki + $oki;

                    }
                echo $toki;
                petit plus les "static" qui permettent de passer un var d''interne a global


        //part 6 Function************************************************************************************

                comme d''hab

        //part 7 constantes  ************************************************************************************


                define('oki', 'sa menk de respé');
                echo $oki; //sa menk de respé
                function oki(){
                    echo $oki;//par default les const 'define' sont globales
                    }
                oki();// =sa menk de respé


        //part 8 constante pariculieres


                $br = '<br>';
	            echo  __FILE__. $br;//C:\wamp\www\P4\index.php indique chemin et le nom du dossier
                echo __DIR__. $br;//C:\wamp\www\P4 le nom du dossier parent
                echo __LINE__. $br;// le numero de ligne utilisé
	            function oki(){
		        echo __FUNCTION__;
	            }
	            oki();//oki le nom de la function dans lequel il est contenu


        //part 9 var tableau    ************************************************************************************


                $oki = array('pierre','paul','jaques');
                $prenom[0] ='thomas';
                $prenom[1] ='lucien';
                $prenom[8] ='alexis';

                echo $oki[2].'<br>'. $prenom[8];// jaques alexis

                $tailleoki = count($oki);
                echo $tailleoki; // 3

		        for ($x = 0 ; $x < $tailleoki ; $x++){
			        echo $oki[$x];
		        }//pierrepauljaques comme d'hab !
                echo '<br>';

                foreach ($prenom as $value){
                    echo $value;
                    }// thomaslucienalexis



                //part 10 tableaux associatifs   ************************************************************************************


                $age = array('pierre' => 12 , 'alexis' => 24, 'thomas' => 22);
                echo $age['pierre'];//12

	            $sport['thomas'] = 'vélo'; echo $sport['thomas']//vélo
	            $sport['alexis'] = 'montée en charge';
	            $sport['pierre'] = 'grailler';
                echo $sport['pierre'];//grailler

                foreach ($age as $index => $oki){
		        echo $index. ' a '. $oki. 'ans ,';
	            }//pierre a 12ans ,alexis a 24ans ,thomas a 22ans ,


        //part 11 tableau multi dimentionels    ************************************************************************************


                $inscrits = array(
		                       array('pierre',22,'sto@gmail.com'),
		                       array('thomas',25,'oki@gmail.com'),
		                       array('alexis',32,'ale@gmail.com'),
		                       );
	            echo $inscrits[1][1];//25

	            for ($ligne = 0 ; $ligne < 3 ; $ligne++){
		            $n = $ligne + 1; // pour ne pas avoir de membre 0
		            echo 'Membre n°'. $n. '<ul>'; // a chaques membre on crée un unordonned list

		            for ($col = 0 ; $col < 3 ; $col++){
		    	        echo '<li>'. $inscrits[$ligne][$col]. '</li>';// on crée un ligne, on y met une valeur et on ferme la ligne
		            }
		            echo '</ul>';// on ferme l'unordonned list
	            }/* Membre n°1
                        pierre
                        22
                        sto@gmail.com

                    Membre n°2
                        thomas
                        25
                        oki@gmail.com

                    Membre n°3
                        alexis
                        32
                        ale@gmail.com*/

                echo '<br>'. '<pre>';
	            print_r($inscrits);// le 100 !!
	            echo '</pre>';
                        /*Array
                        (
                    [0] => Array
                        (
                            [0] => pierre
                            [1] => 22
                            [2] => sto@gmail.com
                        )

                    [1] => Array
                        (
                            [0] => thomas
                            [1] => 25
                            [2] => oki@gmail.com
                        )

                    [2] => Array
                        (
                            [0] => alexis
                            [1] => 32
                            [2] => ale@gmail.com
                        )

                    )*///nice pour de debug


        //part 12 timastamp   ************************************************************************************


                echo time();// 1547310259 comme en js, le temp écoulé depuis le 01/01/1970 a 0h00 en ms
                echo mktime(12,0,0,1,25,2015);//1422187200 le temps ecoulé depuis le 12h 0m 0s janvier 25e 2015 a l'anglaise ....les relous ......
                echo strtotime('2015/01/25');//1422187200 string to time

                echo strtotime('2015/01/25 12:00:00').$br;// tout sa fonctionne aussi
	            echo strtotime('25 january 2015').$br;
	            echo strtotime('now').$br;
	            echo strtotime('+ 1 day').$br;
	            echo strtotime('next sunday').$br;

                //on peut comparer des date comme au p3 via les timestamp

                //a noter que le separateur est au choix et a un impact visuel
                echo date('M.n.m');//Jan.1.01 les mois
                echo date('d');//12 le jour du mois
                echo date('Y');//2019 l'année
                echo date('l/N');//Saturday/6
                echo date('H/i.s');//16/44.51

                var_dump(checkdate(2,45,2019));//C:\wamp\www\P4\index.php:12:boolean false permet de check si une date est valide
	            var_dump(checkdate(2,28,2019));//C:\wamp\www\P4\index.php:13:boolean true




        //part 13 les fichiers   ************************************************************************************


                $fichier = fopen('text.txt','r');//case opening du fichier stocké ds une var
	            echo '<pre>';//pour garder la mise en forme
	            echo fread($fichier, filesize('text.txt'));// fread(quoi, taille/combien); on utilise filesize pr choper la taille
	            echo '</pre>';
	            fclose($fichier);// fermeture du fichier

                echo fgets($fichier, filesize('text.txt'));//ligne 1 permet de lire ligne par ligne
                echo fgets($fichier, filesize('text.txt'));//ligne 2 a chaques call il passe a la ligne suivante


                while (!feof($fichier)){//file end of file, renvoie false tant le le pointeur n'est pas au bout du fichier d'ou l'invertion !
                    echo fgets($fichier, filesize('text.txt'));
                    }

                echo fgetc($fichier, filesize('text.txt'));// f get character c'est du chara par chara
                // /!\ au chmod sur serveur

                $text = 'oki oki oki oki oki oki';
                fwrite($fichier, $text);// permet d'ecrire ds le fichier

                //deplacement du curseur
                fseek($fichier, 152);// on deplace le curseur dans tel fichier et de tant de bit

        //part 14 LA LOURDEUR WOLA   ************************************************************************************


                -creer un fichier du genre header.php et y inclure un header
                -call le header.php au besoin
                /*<php
                include('header.php');
                ?>
                */
                gerer plein de header facilement

                le require bloqueras l''execution du script en cas d''imprevu contrairement a include


        //part 15 les 9 variables superglobales   ************************************************************************************

                $GLOBALS ;$_SERVER ;$_REQUEST ;$_GET ;$_POST ;$_FILES ;$_ENV ;$_COOKIE ;$_SESSION.

                $GLOBALS ; // elle permet de call une var glo dans une exec locale genre ds une fonction
                $oki = 0;
                function toki(){
                    $GLOBALS['oki'];
                    }

                $_SERVER;//permet de call des données relative au server
                echo $_SERVER['PHP_SELF'].'<br>';///p4/index.php
	            echo $_SERVER['SERVER_ADDR'].'<br>';//::1
	            echo $_SERVER['SERVER_NAME'].'<br>';//localhost
	            echo $_SERVER['REQUEST_TIME'].'<br>';//1547365174
	            echo $_SERVER['REMOTE_ADDR'].'<br>';//::1
	            echo $_SERVER['SCRIPT_NAME'].'<br>';///p4/index.php

                $_REQUEST;// pour recolter les données d'un formulaire

                $_GET; $_POST; // aussi pr les formulaires

                $_ENV;// a revoir ...

                $_FILES;// permet d'avoir des infos sur un fichier telechargé

                $_COOKIE; $_SESSION;// pour manipuler les donées locales


        //part 16 Les cookies   ************************************************************************************

                $nom; $valeur;
                $timestamp = time()+3600;
                $access = '/';//les dossier du serv qui peuvent acceder au cookie
                $domaine = 'tres-oklm.com';// Le domaine pour lequel le cookie est accessible
                $secured = 'true';//definit si le client doit passer par une co https secure ou non
                $onlyhttp= 'true';//empeche les languages de script(js) d'acceder au cookie

                //doit etre ecrit au dessus du <html> !!!
                setcookie($nom,$valeur,$timestamp);//cookie normal
                setcookie($nom,$valeur,$timestamp,$access,$domaine,$secured,$onlyhttp); // cookie secure


                //on peut les call nimporte ou
                if (isset($_COOKIE[$nom])){//is set pr check si le cookie est crée
                    echo $_COOKIE[$nom];//on s'en sert comme on le souhaite
                    }

                //pour changer un cookie il suffit de l'overwrite
                setcookie($nom,$valeur,$timestamp);// il peut etre réecrit partout

                setcookie($nom,$valeur,($timestamp-1000));//pour suppr un cookie on l'overwrite en y appliquant une date passée


        //part 17 les sessions   ************************************************************************************

                // /!\ ecrire avant le <HTML> session_start();
                //permet de stocker des info tant que l'utilisateur est sur le site, ces info disparaissent une fois la session terminée
                //pour pouvoir midifier la session on fera appel a $_SESSION

                <?php sessionstart(); ? >
                <html>
                    <head></head>
                    <body>
                          <?php
                            //pour set des infos
                            $_SESSION['prenom']= 'thomas';
                            $_SESSION['age']= 22;
                            //pour call des infos
                            echo $_SESSION['prenom'];//thomas
                            // pour modif il suffit d'overwrite
                            $_SESSION['prenom']= 'pierre';

                            //pour stopper la session il faut la vider puis l'arreter
                            session_unset();

                            session_destroy();
                          ? >
                    </body>
                </html>;


        //part 18 Les REGEX regular expression   ************************************************************************************

                //au mieu le placer dans une variable, entouré de //
                $nom = '/pierre/i';// le i sert pour insensitive, pour dire qu'il ne feras pas attention a la casse
                preg_filter();//Recherche et remplace
                preg_grep();//Recherche et retourne un tableau avec les résultats
                preg_last_error();//Retourne le code d’erreur de la dernière regex exécutée
                preg_match();//Compare une regex à une chaine de caractères
                preg_math_all();//Compare une regex à une chaine de caractères et renvoie tous les résultats
                preg_quote();//Echappe les caractères spéciaux dans une chaine
                preg_replace();//Recherche et remplace
                Preg_replace_callback();//Recherche et remplace en utilisant une fonction de rappel
                preg_split();//Découpe une chaine

                $r = '/r/';
	            $txt = 'salut r je suis un r';

                //preg_match() permet de compter s'il y'a des match
	            if (preg_match($r,$txt)){
		            echo 'il y a '.preg_match_all($r,$txt).' "r" dans "'.$txt.'"';
	            }//il y a 2 "r" dans "salut r je suis un r"


                //preg_filter() renvoie null s'il ne trouve pas
                $r = '/jour/';
                $txt = 'Bonjour sa menk de respé';
                echo preg_filter($r, 'soir',$txt);//Bonsoir sa menk de respé

                //preg_replace() fonctionne comme preg_filter() mais renvoie la chaine de base en cas de not found

                //preg_grep() permet de rechercher un shema ds un tableau et le retourne dans un tableau
                $r = '/oki/';
                $tab = array('oki','thomas','oki');
                print_r(preg_grep($r,$tab));//Array ( [0] => oki [2] => oki )

                //preg_split() a chaques fois qu'il trouve le shema, il split le string ds un tableau
                $r = '/,/';
                $txt = 'pierre,thomas,alexis,roland,erwann';
                print_r(preg_split($r,$txt));//Array ( [0] => pierre [1] => thomas [2] => alexis [3] => roland [4] => erwann )

                //preg_quote() permet d'echapper les characteres speciaux

                //preg_last_error() permet de retourner le dernier code d'erreur des regex

        //part 19 quantifieurs regex   ************************************************************************************


                a ?	//On veut 0 ou 1 « a »
                a+	//On veut au moins un « a »
                n*	//On veut 0, 1 ou plusieurs « a »
                ^a	//On veut un « a » en début de chaîne
                a$	//On veut un « a » en fin de chaîne
                a{X}	//On veut une séquence de X « a »
                a{X,Y}	//On veut une séquence de X à Y fois « a »
                a{X,}	//On veut une séquence d’au moins X fois « a »
                a(?=b)	//On veut un « a » suivi d’un « b »
                a(?!b)	//On veut un « a » non suivi d’un « b »

                $r1 = '/e/';
                $r2 = '/ou?/';
                $r3 = '/^b/i';
                $r4 = '/p(?=elle)/';
                $r5 = '/p{3}/';
                $txt = 'Bonjour je m\'appelle Pierre';

                var_dump(preg_match($r1,$txt));//1
                echo '<br>';
                preg_match_all($r2,$txt,$resultat);
                print_r($resultat);//var_dump(preg_match($r4,$txt));
                echo '<br>';
                var_dump(preg_match($r3,$txt));//1
                echo '<br>';
                var_dump(preg_match($r4,$txt));//1
                echo '<br>';
                var_dump(preg_match($r5,$txt));//0


        //part 20 Options regex   ************************************************************************************


                /*
                 * i insensitive , ne tient pas compte de la casse
                 * g global permet d'effectuer des recherches globales, ??? peut utile
                 * m multiline */

                $r1 = '/^d/';
                $r2 = '/^d/m';
                $r3 = '/^b/i';
                $txt = "Bonjour je suis sur \ndeux lignes";
                var_dump(preg_match($r1,$txt));//1
                var_dump(preg_match($r2,$txt));//1
                var_dump(preg_match($r3,$txt));//0


        //part 21 métacharactere regex    ************************************************************************************


                [abcde]	//Trouve tous les caractères à l’intérieur des crochets
                [^abcde] //Trouve tout caractère ne se situant pas entre les crochets
                [a-z] //Trouve n’importe quelle lettre entre a et z
                [^a-z] //Trouve n’importe quel caractère qui n’est pas une lettre minuscule de l’alphabet
                [0-9] //Trouve n’importe quel chiffre entre 0 et 9
                [^0-9] //Trouve n’importe quel caractère qui n’est pas un chiffre compris entre 0 et 9
                (jour|soir) //Trouve jour et soir




                $r1 = '/[aeyuio]/';//voyelles
                $r2 = '/^[aeyuio]/';//voyelles en debut de chaine
                $txt = 'Bonjour, je suis sur deux lignes en PHP';
                var_dump(preg_match($r1,$txt));//1
                var_dump(preg_match($r2,$txt));//0

                $r1 = '/[a-f]/';// de A a F
                $txt = 'abcdefg';
                $txt2 = 'hijklmop';
                $txt3 = 'abczzzzzz';
                var_dump(preg_match($r1,$txt));//1
                var_dump(preg_match($r1,$txt2));//0
                var_dump(preg_match($r1,$txt3));//1

                $r1 = '/[A-F0-9:,]/';// recherche de A a F en maj, de 0 a 9 et : et ,
                $r1 = '/^[a-f]/';//commence par autre chose que A => F
                $r1 = '/[^a-f]/';// commence par A => F


                .	//Seul méta-caractère ne possédant pas d’antislash. Trouve tout caractère, sauf un retour à la ligne
                \w	//Trouve toute lettre. Equivalent à [a-zA-Z]
                \W	//Trouve tout ce qui n’est pas une lettre. Equivalent à [^a-zA-Z]
                \d	//Trouve n’importe quel chiffre. Equivalent à [0-9]
                \D	//Trouve tout sauf un chiffre. Equivalent à [^0-9]
                \s	//Trouve un espace
                \S	//Trouve tout sauf un espace
                \ba	//Trouve tout « a » situé en début ou en fin d’un mot
                \Ba	//Trouve tout « a » non situé en début ou en fin de mot
                \n	//Trouve un retour à la ligne (le « \n » en JavaScript)



        //part 22 La POO ************************************************************************************


                //il est conseillé d'ajouter un dossier classes
                <?php include('class/humain.php'); ? > //inclusion d'une classe

                $pierre = new Humain();// on declare un nouvel humain, "on l'instancie"
                //on le stock dans une variable pour le manipuler

                                                   public $nom;

                $pierre = new Humain();
                $victor = new Humain();

                $pierre->nom = 'Pierre';
                $victor->nom = 'Victor';

                //comme en C++ il vaut pieux prioriser l'utilisation de getters et de setters

                                                   public $nom;
                                                   public function setNom($nouveauNom){
                                                       $this->nom = $nouveauNom;
                                                   }
                                                   public function getNom(){
                                                       return $this->nom;
                                                   }

                $pierre->setNom('Pierre');
                echo $pierre->getNom();//Pierre



                //extention de classe
                                                   class Humain{
                                                       public $nom;
                                                   }

                                                   class Francais extends Humain{

                                                   }
                $pierre = new Humain();
                $victor = new Francais();

                $pierre->setNom('Pierre');
                $victor->setNom('Victor');

                echo $pierre->getNom();//Pierre
                echo $victor->getNom();//Victor



        //part 23 POO la surcharge   ************************************************************************************


                                                   class Humain{
                                                       protected $nom;
                                                       public function setNom($nouveauNom){
                                                           $this->nom = $nouveauNom;
                                                       }
                                                   }

                                                   class Francais extends Humain{
                                                       private $postal;
                                                       public function setNom($nouveauNom){//ici on surcharge la methode
                                                           $this->nom = strtoupper($nouveauNom);
                                                       }
                                                       public function setPostal($nouveauPostal){
                                                           $this->postal = $nouveauPostal;
                                                       }
                                                       public function getPostal(){
                                                           return $this->postal;
                                                       }
                                                   }

                $pierre = new Humain();
                $victor = new Francais();
                $pierre->setNom('Pierre');
                $victor->setNom('Victor');
                $victor->setPostal('56000');

                echo $pierre->getNom();//Pierre
                echo $victor->getNom(). $victor->getPostal();//VICTOR 56000




        //part part 24 POO constructeurs !  public function __construct()   ************************************************************************************

                                                        class Humain {
                                                            protected $nom;
                                                            protected $inscription;
                                                            public function __construct($nouveauNom){
                                                                $this->nom = $nouveauNom;
                                                                $this->inscription = date('d-m-Y H:i:s');
                                                            }
                                                        }


                $pierre = new Humain('Pierre');

                //la surcharge est possible ou non, le constructeur parent est utilisable depuis une classe fille



        //part 25 POO operateur de portée  NomDeClasse::ProprieteOuMethode  ************************************************************************************

                                                        class Humain {
                                                            protected $nom;
                                                            protected $inscription;
                                                            public function __construct($nouveauNom){
                                                                $this->nom = $nouveauNom;
                                                                $this->inscription = date('d-m-Y H:i:s');
                                                            }
                                                        }

                                                        class Francais extends Humain{
                                                            private $postal;
                                                            public function __construct($nouveauNom,$codePostal){
                                                                //ici c'est interessant !!!!!!
                                                                parent::__construct($nouveauNom);// le 100!
                                                                $this->nom = strtoupper($nouveauNom);
                                                                $this->postal = $codePostal;
                                                            }
                                                        }




        //part 26 POO Constantes    ************************************************************************************

                                                        class Humain {
                                                            const HEURE_TRAVAIL = 35;// a noter que l'on peut la mettre en public...

                                                            public function getSalaire($taux){
                                                                return $taux * self::HEURE_TRAVAIL;
                                                                //ici on met self en nom de classe
                                                            }
                                                        }




        //part 27 POO statiques    ************************************************************************************
                                                        class Humain {
                                                            public $nom;
                                                            protected static $objetCree;

                                                            public function __construct{$nouveauNom}{
                                                                $this->nom = $nouveauNom;
                                                                self::$objetCree++;// =)
                                                            }
                                                            public static function getObjet(){//besoin d'un methode statique pr call une var stat
                                                                return self::$objetCree;
                                                            }

                                                        }
                ;

                $pierre = new Humain('pierre');
                echo Humain::getObjet();//1





        //part 28 POO Abstrait   ************************************************************************************



                                                        abstract class Humain {
                                                            protected $nom;
                                                            abstract public function adresse();//une fonction abrtraite est vide, sert de modele
                                                        }

                //une classe abstraite ne peut pas etre utilisée directement, elle doit etre mere d'autres classes
                //les methodes abstraites doivent etre definies dans les enfants de la classe  mere

                                                        abstract class Humain{
                                                            protected $nom;
                                                            protected $date;
                                                            protected $adresse;

                                                            public __construct($nouveauNom){
                                                                $this->nom = $nouveauNom;
                                                                $this->date = date('d-m-Y H:i:s');
                                                            }
                                                            public function getNom(){
                                                                return $this->nom;
                                                            }
                                                            public function getDate(){
                                                                return $this->date;
                                                            }
                                                        }



        //part 29 requettes SQL   ***********************************************************************************



                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                $reponse = $bdd->query('SELECT * FROM oki ORDER BY id DESC');
                while ($donnee=$reponse->fetch()){
                echo '<strong>'.$donnee['pseudo'].'</strong>'.' : '.$donnee['message'].'<br/>';
                }

                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                $req = $bdd->prepare('INSERT INTO oki(pseudo, message) VALUES(:pseudo,:message)');
                $req->execute(array(
                    'pseudo' => htmlspecialchars($_POST['pseudo']),
                    'message' => htmlspecialchars($_POST['message'])
                    ));


        //part 30 Fonctions SCALAIRES SQL   ***********************************************************************************



                SELECT UPPER (nom) AS nom_majuscule FROM jeux_video// ne modifie pas la base, change juste le display
                SELECT UPPER (nom) AS nom_minuscule FROM jeux_video
                SELECT LENGTH (nom) AS nom_longueur FROM jeux_video//qqes functions SQL

                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                $req = $bdd->prepare('SELECT UPPER(nom) AS nom_majuscule FROM jeux_video WHERE console = ?)');
                $req->execute(array(
                    'pseudo' => htmlspecialchars($_POST['pseudo']),
                    'message' => htmlspecialchars($_POST['message'])
                    ));


        //part 31 tp creer un petit tchat   ***********************************************************************************


                <body>// page index.php
                    <form method="POST" action="index_post.php">
                        <label for="pseudo">Pseudo :</label>
                        <input type="text" name="pseudo" /><br/>

                        <label for="message">Message :</label>
                        <input type="text" name="message" /><br/>

                        <input type="submit" value="Envoyer" />
                        <br /><br/><br/><br/><br/><br/>
                    </form>
                    <?php
                        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                        $reponse = $bdd->query('SELECT * FROM oki ORDER BY id');
                        while ($donnee=$reponse->fetch()){
                            echo '<strong>'.$donnee['pseudo'].'</strong>'.' : '.$donnee['message'].'<br/>';
                        }
                    ?>
                </body>


                <?php//page index_post.php
                    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                    $req = $bdd->prepare('INSERT INTO oki(pseudo, message) VALUES(:pseudo,:message)');
                    $req->execute(array(
                        'pseudo' => htmlspecialchars($_POST['pseudo']),
                        'message' => htmlspecialchars($_POST['message'])
                        ));
                    header('Location: index.php');
                ?> 
                
                <?PHP                               
        //part    ***********************************************************************************
        //part    ***********************************************************************************
        //part    ***********************************************************************************
        //part    ***********************************************************************************
        //part    ***********************************************************************************
        //part    ***********************************************************************************
        //part    ***********************************************************************************
        //part    ***********************************************************************************
        //part    ***********************************************************************************
        //part    ***********************************************************************************
        //part    ***********************************************************************************
?>