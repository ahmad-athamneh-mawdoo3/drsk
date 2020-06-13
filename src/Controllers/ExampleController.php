<?php

namespace Mawdoo3\Drsk\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mawdoo3\Drsk\Models\SavedResult;
use Mawdoo3\Drsk\Connector;
class ExampleController extends Controller
{
    /**
     * redirect the specified function depend on action.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return redirect to another function
     */
    public function testRoute(Request $request)
    {
        dump( Connector::to('core\Auth')->isAuthed('asd','asdwe',['a'=>'b']));
        return ; 
    }
}
