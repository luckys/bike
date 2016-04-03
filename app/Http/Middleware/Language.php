<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

class Language
{

    public function __construct(Application $app, Redirector $redirector, Request $request)
    {
        $this->app = $app;
        $this->redirector = $redirector;
        $this->request = $request;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Make sure current locale exists.
        /*$locale = $request->segment(1);

        if (!array_key_exists($locale, $this->app->config->get('app.locales'))) {
            $locale_var =  $locale == 'admin' ? 'admin_locale' : 'fallback_locale';
            $segments[0] = $this->app->config->get('app.' . $locale_var);
            foreach ($request->segments() as $segment){
                $segments[] = $segment;
            }
            return $this->redirector->to(implode('/', $segments));
        }
        */
        $locale = 'es'; // Descomentar lo anterior y borrar esta línea
        $this->app->setLocale($locale);

        return $next($request);
    }

}