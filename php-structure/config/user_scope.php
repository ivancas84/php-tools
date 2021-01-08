<?php

function user_scope() {
  /**
   * Este metodo debe ser reimplementado para indicar el private scope
   * return [
   *   "user1" => [
   *     "password"=>"password", 
   *     "scope"=>["entity.rwx"],
   *     "view"=>["someview"]
   *   ],
   * ]
   */
  return [];
}
