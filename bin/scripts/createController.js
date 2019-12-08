var func = require("./functions");

const className = process.argv[2];

const content = `<?php

  class ${func.capitalize(className)} extends Controller {
  
      public function __construct() {}
  
      public function index() {
          
      }
  }

  ?>`;

func.createFile("./app/Controllers", content, className);
