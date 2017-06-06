<?php

class UserAdmin extends REST_Controller
{
  public function index_get()
  {
    // Display all books
    $this->response($this->db->get('user')->result(), 200);
  }

  public function index_post()
  {
    // Create a new book
  }
}

?>