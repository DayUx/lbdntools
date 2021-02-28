<?php
    declare(strict_types = 1);

    include_once __DIR__ . "/../vue/vue.php";
    include_once __DIR__ . "/../vue/vueAccueil.php";
    include_once __DIR__ . "/../vue/vueMap.php";
    include_once __DIR__ . "/../vue/vueMortar.php";
    include_once __DIR__ . "/../vue/vueRapport.php";

    class Controller {
        private $vue;

        public function __construct() {
            $this->vue = new Vue();

            $this->handleData();
            $this->display();
        }

        private function handleData() {
            if ( isset($_GET["page"]) ) {

                switch(strtolower($_GET["page"])) {
                    case "accueil":
                        $this->vue = new VueAccueil();
                        break;
                    case "tacticalmap":
                        $this->vue = new VueMap();
                        break;
                    case "mortar":
                        $this->vue = new VueMortar();
                        break;
                    case "rapport":
                        $this->vue = new VueRapport();
                        break;
                    default:
                        $this->vue = new Vue404();
                }

            } else {
                $this->vue = new VueAccueil();
            }
        }

        private function display() {
            if ( isset($this->vue) ) {
                echo $this->vue->display();
            }
        }
    }

?>