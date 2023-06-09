<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cookie;

class SetThemeMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next){
    if ($request->query('theme')) {
        // Mengambil nilai query parameter 'theme'
        $theme = $request->query('theme');
    
        // Mengecek apakah nilai theme adalah 'dark' atau 'light'
        if ($theme === 'dark' || $theme === 'light') {
            // Menyimpan nilai theme ke dalam cookie selama 30 hari
            cookie()->queue(cookie('theme', $theme, 30 * 24 * 60));
        }
    }
    
    // Mengecek apakah cookie 'theme' telah diatur sebelumnya
    if ($request->cookie('theme')) {
        // Mengambil nilai cookie 'theme'
        $theme = $request->cookie('theme');
    
        // Mengecek apakah nilai theme adalah 'dark' atau 'light'
        if ($theme === 'dark' || $theme === 'light') {
            // Mengatur tema aplikasi sesuai dengan nilai theme
            app('theme')->setTheme($theme);
        }
}
    }
}