<?php

function user_scope() {
  /**
   * Este metodo debe ser reimplementado para indicar el private scope
   * return [
   *   "user1" => [
   *     "password"=>"password", 
   *     "scope"=>[
   *       "read" => ["entity1", "entity2", "..."],
   *       "write" => ["entity1", "entity2", "..."]
   *      ]
   *   ],
   *   "user2" => ["..."]
   * ]
   */
  return [];
}
