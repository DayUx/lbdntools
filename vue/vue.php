<?php
    declare(strict_types = 1);

    include_once __DIR__ . "/../config/config.php";

    class Vue {
        protected $title = "NormandyRP Tools";
        protected $smarty;

        public function __construct() {
            $this->smarty = new Smarty();
        }

        protected function getTitle() {
            return $this->title;
        }

        protected function getSmarty() {
            return $this->smarty;
        }

        protected function showHead() {
            //$this->getSmarty()->assign("title", $this->getTitle());

            $this->getSmarty()->display("../templates/head.tpl");
        }

        protected function showHeader() {
            $this->getSmarty()->display("../templates/header.tpl");
        }

        protected function showBody() {

        }

        protected function showFooter() {
            $this->getSmarty()->display("../templates/footer.tpl");
        }

        protected function showJSLoading() {
            $this->getSmarty()->display("../templates/jsLoad.tpl");
        }

        protected function showEndPage() {
            $this->getSmarty()->display("../templates/endPage.tpl");
        }

        public function display() {
            $this->showHead();
            $this->showHeader();
            $this->showBody();
            $this->showFooter();
            $this->showJSLoading();
            $this->showEndPage();
        }
    }
?>