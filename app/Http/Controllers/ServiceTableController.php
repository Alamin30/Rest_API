<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceTableModel;

class ServiceTableController extends Controller
{
   function onSelect(){
       $result=ServiceTableModel::all();
       return $result;
   }
}
