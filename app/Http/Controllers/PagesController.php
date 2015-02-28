<?php namespace App\Http\Controllers;
use DB;

class PagesController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
/* METODES, KAS NOSTRAADAA UZ ROUTES */    
	protected function index()
	{      
             return view('pages.index');
	}   
	protected function perk()
	{      
            $sludinajumi = DB::table('ads')->where('action','=','1')->get();
            $sludinajumi_skaits = DB::table('ads')->where('action','=','1')->count();
            
             return view('pages.perk', compact('sludinajumi'), compact('sludinajumi_skaits'));
	}   
	protected function perk_id($id)
	{      
            $sludinajumi = DB::table('ads')->find($id);
             
             return view('pages.sludinajums', compact('sludinajumi'));
	}  
	protected function pardod()
	{      
//            $sludinajumi = $this->getSellItems();
            $sludinajumi = DB::table('ads')->where('action','=','0')->get();
            $sludinajumi_skaits = DB::table('ads')->where('action','=','0')->count();
            
             return view('pages.pardod', compact('sludinajumi'), compact('sludinajumi_skaits'));
	}   
 	protected function pardod_id($id)
	{      
//             $sludinajumi = $this->getSellItems()[$id];
            
            $sludinajumi = DB::table('ads')->find($id);
             
             return view('pages.sludinajums', compact('sludinajumi'));
	}          
   	protected function jauns_sludinajums()
	{      
            $actions = ['perku','pardodu'];
//             return redirect('jauns-sludinajums');
            return view('pages.jauns_sludinajums', compact('actions'));
	}   
	
/*CUSTOM METHODS*/

        
//	protected function jauns_sludinajums()
//	{      
//            // te bus jaizdala jauns PIRKSANAS un PARDOSANAS sludinajums
////             return redirect('user/login');
//            return view('pages.jauns_sludinajums');
//	} 
//        
        
                
        
                
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
