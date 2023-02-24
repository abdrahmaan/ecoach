<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use  App\Models\SiteData;

class SiteStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $status = SiteData::where("Name","SiteStatus")->get()->first();

        if($status->Value == 1){

            return $next($request); 

        } else {


            switch (session()->get('user-data')->Role) {
                case 'Admin':

                    session()->flash("error","برجاء التواصل مع إدارة المنصة للتجديد");
                    return redirect("/admin");

                    break;
                default:
                session()->flush();
                session()->flash("error","صلاحية التجديد إنتهت يرجى المحاولة وقت أخر");
                return redirect("/login");
                    break;
            }

      

        }
    }
}
