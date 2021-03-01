<?php
    declare(strict_types = 1);

    class VueMap extends Vue {
        protected $title = "NormandyRP Tools | Tactial Map";

        protected function showBody() {
            $this->getSmarty()->display("../templates/bodyMap.tpl");
        }
    }
?>