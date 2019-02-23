# codeigniter

## Nginx remove index.php

```shell
    location / {
            # Check if a file or directory index file exists, else route it to index.php.
            try_files $uri $uri/ /index.php;
    }

    location ~* \.php$ {
            fastcgi_pass localhost:9000;
            include fastcgi.conf;
    }
```

## Controllers

```php
<?php
    defined('BASEPATH') OR exit('No direct script access allowed'); // security check
    class User extends CI_Controller // implement CI_Controller to build a new controller
    {
        function index() { // default reouter
            $this->load->model('user_model', 'um');
            $data['userArray'] = $this->um->select_users();
            $data['user'] = $this->um->get_user();
            // print_r($this->um->get_user());
            $this->load->view('user/user_view', $data); // load view content and inject data
        }
    }
?>
```

## Models

```php
<?php

    class User_model extends CI_Model { // implement CI_Model to build a new Model class
        function select_users() { // method
            $this->load->database(); // load database
            $query = $this->db->query('SELECT * FROM user'); // use original sql synatx
            return $query->result_array(); // return data array
        }

        function get_user() {
            $this->load->database();
            // $query = $this->db->query('SELECT * FROM user WHERE id=1'); // use original sql syntax
            // $query = $this->db->where('id', 1)->get('user', 1); // codeigniter builder classes from: https://www.codeigniter.com/user_guide/database/query_builder.html
            $query = $this->db->get_where('user', array('id'=>1),1); // codeigniter builder classes from: https://www.codeigniter.com/user_guide/database/query_builder.html
            return $query->row(); // return data row
        }

    }

?>
```

## Libraries && Helper

libraries is classes, helper is a set of functions.
libraries used in object oriented context, helper is more suitable to be used within the views also you could them in Models, Views..

```php
// for libraries
$this->load->library('xxxx');
$this->xxxx->qweqeq();
// for helper
$this->load->helper('xxxx');
aaaa();
```

> [codeigniter libraries](https://www.codeigniter.com/user_guide/libraries/index.html?highlight=library)

## Autoload

autoload some libraries / database / helpers

file: application/config/autoload.php