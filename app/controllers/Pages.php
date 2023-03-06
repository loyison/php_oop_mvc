<?php
    class Pages extends Controller {
        public function __construct() {
        }

        public function index(){
            $data = [
                    'title' => 'LoyisoMVC - Shareposts',
                    'description' => 'Simple social network, built on PHP MVC - udemy'
            ];

            $this->view('pages/index', $data);
        }
    
        public function about(){
            $data = [
                    'title' => 'About Loyiso',
                    'description' => 'App to share posts and music with other users'
            ];
            $this->view('pages/about', $data);
        }
    }
