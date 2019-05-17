<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Pages extends Controller {

      public function __construct() {
        $this->_FOO = $this->model('_BAR'); //name your model
        //$this->people = $this->model('People');
      }

      public function index() {

        // variables for data or model functions go here
        $title = $this->_FOO->title();
        $paragraph = $this->_FOO->paragraph();
        $image = "http://placekitten.com/200/200";

        // add data or variables to the array using key-value pairs
        $data = [
          'title' => $title,
          'paragraph' => $paragraph,
          'img' => $image
        ];

        //$data['title2'];

        // call your view 
        // $this->view('folder/file', $data); //file extension not needed - if a file is not in a folder, don't point one
        $this->view('template_one', $data);
      }


      public function about() {

        // variables for data or model functions go here
        $title = $this->_FOO->title2();
        $paragraph = $this->_FOO->paragraph2();
        $image = "http://placekitten.com/300/300";

        // add data or variables to the array using key-value pairs
        $data = [
          'title' => $title,
          'paragraph' => $paragraph,
          'img' => $image
        ];

        //$data['title2'];

        // call your view 
        // $this->view('folder/file', $data); //file extension not needed - if a file is not in a folder, don't point one
        $this->view('template_one', $data); // Point to templates here
      }

    }
