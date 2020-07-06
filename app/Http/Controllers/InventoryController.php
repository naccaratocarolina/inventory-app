<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Inventory;
use \App\Http\Requests\StoreInventory;

class InventoryController extends Controller {
  public $inventory; //propriedade

  public function __construct(Inventory $inventory) {
    $this->inventory = $inventory;
  }

  //cria um inventario novo
  public function createInventory() {
    return view('new-inventory');
  }

  //armazena um inventario
  public function storeInventory(StoreInventory $storeInventory) {
    //validade & store in database
    $data = $storeInventory->only('item, quantity');
    auth()->user()->inventory()->create($data);
    $msg='New Inventory successfully added!';

    return redirect()->route('inventory.all')->with('message', $msg);
  }

  //lista inventarios do usuario
  public function viewInventories() {
    //retrieve & list
    return view('view-inventories');
  }

  //deleta um inventario
  public function drop(Inventory $inventory) {
    $inventory->delete();

    return redirect()->route('inventory.all')->with('message', 'New inventory successfully added!');
  }
}
