<?php
    declare(strict_types = 1);

    class VueAccueil extends Vue {
        protected $title = "NormandyRP Tools";

        protected function showBody() {
            $this->getSmarty()->display("bodyAccueil.tpl");
        }
    }
?>