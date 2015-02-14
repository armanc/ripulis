<?php namespace App\Http\Controllers;
use DB;

class PagesController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
    
	protected function index()
	{      
             return view('pages.index');
	}   
        
	protected function admin()
	{      
             echo 'admin';
	}    
//	protected function index()
//	{
//            $items_sale_list = ['Pirmais items', 'Otrais items', 'Trešais items'];
//            $items_buy_list = ['Ceturtais items', 'Piektais items', 'Sestais items'];
//            $name = 'Aigars Cipruss';
//
//            return View::make('pages.index', ['name' => $name, 'item' => $items_sale_list, 'itemz' => $items_buy_list]);
//	}
//        
//	protected function perk()
//	{
//            return View::make('pages.perk');   
//	}
//
//	protected function pardod()
//	{
//            $items_for_sale = DB::table('items_sell')->get();
//            return View::make('pages.pardod', compact('items_for_sale'));
//	}
//        
//	protected function pardod_id($id)
//	{
//            $item_for_sale = DB::table('items_sell')->find($id);
//            return View::make('pages.pardod_id', compact('item_for_sale'));
//	}    
//          
//        
// 	protected function jauns_sludinajums()
//	{
//            return View::make('pages.jauns_sludinajums');
//	}       
//        
//	protected function admin()
//	{      
//            return View::make('pages.admin');
//	}
     

}
