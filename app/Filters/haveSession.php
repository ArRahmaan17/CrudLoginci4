<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class haveSession implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    if (session()->get('email') && session()->get('role') == 'Admin') {
      return redirect()->to('/admindashboard');
      die();
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // Do something here
  }
}
