<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="default-sidebar" class="fixed bottom-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-700 dark:bg-gray-900">
        <ul class="space-y-2 font-medium">
            <li class="mb-4">
                <a href="" class="flex items-center p-2 text-gray-200 rounded-lg dark:text-white hover:bg-gray-600 dark:hover:bg-gray-800 group">
                    <svg class="h-12 w-12 text-blue-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="13" r="2" />  <line x1="13.45" y1="11.55" x2="15.5" y2="9.5" />  <path d="M6.4 20a9 9 0 1 1 11.2 0Z" /></svg>
                    <span class="ms-3 text-lg font-bold text-gray-200 dark:text-gray-300">Dashboard</span>
                </a>
            </li><br>
            <li>
                <a href="{{route('user.index')}}" class="flex items-center p-2 text-gray-200 rounded-lg dark:text-white hover:bg-gray-600 dark:hover:bg-gray-800 group">
                    <svg class="h-8 w-8 text-slate-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="9" cy="7" r="4" />  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />  <path d="M16 3.13a4 4 0 0 1 0 7.75" />  <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Clients</span>
                </a>
            </li> <br>
            <li>
                <a href="{{route('cars.index')}}" class="flex items-center p-2 text-gray-200 rounded-lg dark:text-white hover:bg-gray-600 dark:hover:bg-gray-800 group">
                    <svg class="h-8 w-8 text-slate-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="7" cy="17" r="2" />  <circle cx="17" cy="17" r="2" />  <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" /></svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Cars</span>
                </a>
            </li><br>
            <li>
                <a href="{{route('brand.index')}}" class="flex items-center p-2 text-gray-200 rounded-lg dark:text-white hover:bg-gray-600 dark:hover:bg-gray-800 group">
                    <svg class="h-8 w-8 text-slate-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="7" cy="18" r="2" />  <circle cx="7" cy="6" r="2" />  <circle cx="17" cy="6" r="2" />  <line x1="7" y1="8" x2="7" y2="16" />  <path d="M9 18h6a2 2 0 0 0 2 -2v-5" />  <polyline points="14 14 17 11 20 14" /></svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Brand</span>
                </a>
            </li><br>
            <li>
                <a href="{{route('book.index')}}" class="flex items-center p-2 text-gray-200 rounded-lg dark:text-white hover:bg-gray-600 dark:hover:bg-gray-800 group">
                    <svg class="h-8 w-8 text-slate-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />  <line x1="13" y1="8" x2="15" y2="8" />  <line x1="13" y1="12" x2="15" y2="12" /></svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Booking</span>
                </a>
            </li><br>
            <hr>
           
            <li><br>
                <a href="{{route('logout')}}" class="flex items-center p-2 text-gray-200 rounded-lg dark:text-white hover:bg-gray-600 dark:hover:bg-gray-800 group">
                    <svg class="h-8 w-8 text-red-700"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                      </svg>
                      
                    <span class="flex-1 ms-3 whitespace-nowrap">logout</span>
                </a>
            </li>
            
        </ul>
        


</aside>
