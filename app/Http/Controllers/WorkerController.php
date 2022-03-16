<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkerController extends Controller
{

    public function getEmployee() {
 
        $employee = DB::table( "dolgozok" )->get();
     
        echo "<pre>";
        print_r( $employee );
    }
    public function listEmployee() {
 
        $employee = DB::table( "dolgozok" )->where( "id", 2 )->select( "name", "salary as fizetes","city","born" )->first();
     
        echo "<pre>";
        print_r( $employee );
    }


    public function insertEmployee() {

 
        DB::insert( "INSERT INTO dolgozok( name, city, born,salary ) VALUES (?,?,?,?)", [
         
                    "Démon Kíra",
                    "Klárapátfalva",
                    "1966-06-06",
                    "6666666"
                ]);
        } 


        public function deleteEmployee() {
 
            $employee = DB::delete( "DELETE FROM dolgozok WHERE id = :id", [ "id" => 5 ]);
         
            print_r( $employee );
        }


        public function updateEmployee() {
 
            $employee = DB::update( "UPDATE dolgozok SET salary = ? WHERE id = ?",
                                   [ "25454555", 2]);
         
            print_r( $employee );
        }

}
