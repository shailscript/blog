<?php

namespace App\Http\Controllers;
/**
 *
 */
class PagesController extends Controller
{
  public function getIndex(){
    #process variable data or params
    #talk to the model
    #recieve from the model
    #compile or process data from the model (if needed)
    #pass the data (yuo have now) to the correct view
    return view('pages/welcome');
  }
  public function getAbout(){
    $first = 'Shailendra';
    $last = 'Shukla';
    $full = $first." ". $last;
    $email = "shailendrashuklapro@gmail.com";
    $data['email']=$email;
    $data['fullname']=$full;
    // return view('pages/about') -> with("fullname", $full);
    #below is the same thing
    // return view('pages/about') -> withFullname($full) -> withEmail($email);
    return view('pages/about') -> withData($data);
  }
  public function getContact(){
    return view('pages.contact');
    #using . or / is the same thing but better conventions and shows hierarchy
  }
  public function postContact(){

  }
}

 ?>
