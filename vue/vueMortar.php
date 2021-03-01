<?php
    declare(strict_types = 1);

    class VueMortar extends Vue {
        protected $title = "NormandyRP Tools | Mortar Tool";

        protected function showBody() {
            $this->getSmarty()->display("../templates/bodyMortar.tpl");
        }
    }
?>