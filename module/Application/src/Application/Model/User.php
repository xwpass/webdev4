<?php

namespace Application\Model;


class User{
  private $id;

  private $firstname;
  private $middlename;
  private $lastname;

  private $email;
  /**
  *@var array
  */
  private $skills;

  private $img;
  private $desc;

  public function __construct($id,$firstname,$middlename, $lastname,$email, $skills)
  {
    $this->id = $id;
    $this->firstname = $firstname;
    $this->middlename = $middlename;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->skills = $skills;
  }

  public function addSkill($skill){

    array_push($this->skills, $skill);

  }

  public function toHTML_skillList(){
    $skills = explode(",", $this->skills);
    $list = "";
    foreach($skills as $skill){

      $list .= "<li>".trim($skill)."</li>";
    }

    return "<ul>$list</ul>";
  }

  public function toHTML_thumb()
  {
    $skills =   $this->toHTML_skillList();

    return "<a class=\" user-thumb-link \"href=\"/portfolios?id=$this->id\"><div class=\"col-md-5 user-thumb-list\">

                <div class=\"col-sm-4 user-thumb\"><img src=\"/thumbs/user-thumbs/users_img ($this->id).png\" alt=\"\"></div>
                <div class=\"col-sm-7 user-thumb\">
                  <h3>$this->firstname $this->lastname</h3>
                  $skills
                </div>

            </div></a>";

  }

  public function toHTML_portfolio()
  {
    $skills =   $this->toHTML_skillList();

    //return ""

  }

  public function getId()
  {
    return $this->id;
  }

  public function getName(){

    return "$this->firstname $this->middlename $this->lastname";

  }

  public function getEmail(){

    return $this->email;

  }

  public function getSkills()
  {
    return explode(", ", $this->skills);
  }






}


?>
