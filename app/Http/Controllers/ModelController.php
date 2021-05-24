<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_model');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);

        $path_type = $request->type;
        if ($path_type == 'frontend') {
            $views_path = resource_path('views\frontend\\');
            $controller_path = app_path('Http\Controllers\frontend\\');
            $route_resource_path = "\App\Http\Controllers\\frontend\\";
            $model_path = 'frontend/';
        } else {
            $views_path = resource_path('views\admin\\');
            $controller_path = app_path('Http\Controllers\admin\\');
            $route_resource_path = "\App\Http\Controllers\admin\\";
            $model_path = 'admin/';
        }

        $name = strtolower($request->name);
        $Name = ucfirst($request->name);

        /* php artisan cache:clear */
        \Artisan::call('cache:clear');
        /* php artisan migration controller and resource create */
        \Artisan::call('make:model '.$model_path.$Name.' -m');

        // Read the demoController.txt
        $demo_controller_contents = file_get_contents(base_path('demoController.txt'));
        // Change the demo Contents from the demoController text
        $php_block = "<?php \n\n";
        $first_demo_content_change = $php_block . str_replace( 'demo', $name , $demo_controller_contents );
        $second_demo_content_change = str_replace( 'Demo' , $Name , $first_demo_content_change );
        $third_demo_content_change = str_replace( 'demos' , $name . 's' , $second_demo_content_change );

        // Create Controller
         $create_controller = fopen($controller_path.$Name.'Controller.php', 'w');
        
        // Put the contents in the created controller
        fwrite($create_controller,$third_demo_content_change);
        fclose($create_controller);
        // dd($third_demo_content_change);
        // Successfully controller created and added resources

        // Create folder on views
        $create_views_folder = mkdir($views_path.$name);

        //create index, create, edit, show blade files
        $create_index_file = fopen($views_path.$name.'\index.blade.php','w');
        $create_create_file = fopen($views_path.$name.'\create.blade.php','w');
        $create_show_file = fopen($views_path.$name.'\show.blade.php','w');
        $create_edit_file = fopen($views_path.$name.'\edit.blade.php','w');

        // Resource for web.php
        //$web_resource_route = 'Route::resource(" '.$name.' ", '.$route_resource_path.$Name.'Controller::class );';

        // Create routes  
        $route_1 = 'Route::get(" '.$name.' ", ['.$route_resource_path.$Name.'Controller::class , \'index\'] );';
        $route_2 = 'Route::get(" '.$name.'/create ", ['.$route_resource_path.$Name.'Controller::class , \'create\'] );';
        $route_3 = 'Route::post(" '.$name.'/store ", ['.$route_resource_path.$Name.'Controller::class , \'store\'] );';
        $route_4 = 'Route::get(" '.$name.'/show/{id} ", ['.$route_resource_path.$Name.'Controller::class , \'show\'] );';
        $route_5 = 'Route::put(" '.$name.'/update/{id} ", ['.$route_resource_path.$Name.'Controller::class , \'update\'] );';
        $route_6 = 'Route::delete(" '.$name.'/destroy/{id} ", ['.$route_resource_path.$Name.'Controller::class , \'destroy\'] );';
        
        // Read web.php and add the routes
        $web_route_file = fopen(base_path('routes\web.php'),'a');
        fwrite($web_route_file,"// ".$name." Routes"."\n");
        fwrite($web_route_file,$route_1."\n");
        fwrite($web_route_file,$route_2."\n");
        fwrite($web_route_file,$route_3."\n");
        fwrite($web_route_file,$route_4."\n");
        fwrite($web_route_file,$route_5."\n");
        fwrite($web_route_file,$route_6."\n");

        fclose($web_route_file);

        //dd($web_resource_route);
        return view('successfull');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
