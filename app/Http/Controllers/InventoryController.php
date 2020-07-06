<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller {
  //CRUD

  //cria um inventario novo
  public function createInventory() {
    return view('new-Inventory');
  }

  //armazena um inventario
  public function storeInventory() {
    //validade & store in database
  }

  //lista inventarios do usuario
  public function viewInventories() {
    //retrieve & list
  }
}
