<?php
    declare(strict_types = 1);

    class VueRapport extends Vue {
        protected $title = "NormandyRP Tools | Rapport";

        protected function showBody() {
            $this->getSmarty()->display("../templates/bodyRapport.tpl");
        }
    }
?>