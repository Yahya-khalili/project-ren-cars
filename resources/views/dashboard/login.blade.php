
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In | TailAdmin - Tailwind CSS Admin Dashboard Template</title>
  <link rel="icon" href="favicon.ico"><link href="style.css" rel="stylesheet"><script nonce="c1a24454-8d84-4cd4-a768-9c3bc357c26e">try{(function(w,d){!function(du,dv,dw,dx){du[dw]=du[dw]||{};du[dw].executed=[];du.zaraz={deferred:[],listeners:[]};du.zaraz.q=[];du.zaraz._f=function(dy){return async function(){var dz=Array.prototype.slice.call(arguments);du.zaraz.q.push({m:dy,a:dz})}};for(const dA of["track","set","debug"])du.zaraz[dA]=du.zaraz._f(dA);du.zaraz.init=()=>{var dB=dv.getElementsByTagName(dx)[0],dC=dv.createElement(dx),dD=dv.getElementsByTagName("title")[0];dD&&(du[dw].t=dv.getElementsByTagName("title")[0].text);du[dw].x=Math.random();du[dw].w=du.screen.width;du[dw].h=du.screen.height;du[dw].j=du.innerHeight;du[dw].e=du.innerWidth;du[dw].l=du.location.href;du[dw].r=dv.referrer;du[dw].k=du.screen.colorDepth;du[dw].n=dv.characterSet;du[dw].o=(new Date).getTimezoneOffset();if(du.dataLayer)for(const dH of Object.entries(Object.entries(dataLayer).reduce(((dI,dJ)=>({...dI[1],...dJ[1]})),{})))zaraz.set(dH[0],dH[1],{scope:"page"});du[dw].q=[];for(;du.zaraz.q.length;){const dK=du.zaraz.q.shift();du[dw].q.push(dK)}dC.defer=!0;for(const dL of[localStorage,sessionStorage])Object.keys(dL||{}).filter((dN=>dN.startsWith("_zaraz_"))).forEach((dM=>{try{du[dw]["z_"+dM.slice(7)]=JSON.parse(dL.getItem(dM))}catch{du[dw]["z_"+dM.slice(7)]=dL.getItem(dM)}}));dC.referrerPolicy="origin";dC.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(du[dw])));dB.parentNode.insertBefore(dC,dB)};["complete","interactive"].includes(dv.readyState)?zaraz.init():du.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>

  <body
    x-data="{ page: 'signin', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
          darkMode = JSON.parse(localStorage.getItem('darkMode'));
          $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
  >
    <!-- ===== Preloader Start ===== -->
    <div
  x-show="loaded"
  x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
  class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black"
>
  <div
    class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent"
  ></div>
</div>

    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
      <!-- ===== Sidebar Start ===== -->
      <aside
  :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
  class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
  @click.outside="sidebarToggle = false"
>
  <!-- SIDEBAR HEADER -->
  <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
    <a href="index.html">
      <img src="src/images/logo/logo.svg" alt="Logo" />
    </a>

    <button
      class="block lg:hidden"
      @click.stop="sidebarToggle = !sidebarToggle"
    >
      <svg
        class="fill-current"
        width="20"
        height="18"
        viewBox="0 0 20 18"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
          fill=""
        />
      </svg>
    </button>
  </div>
  <!-- SIDEBAR HEADER -->

  <div
    class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear"
  >
    <!-- Sidebar Menu -->
    <nav
      class="mt-5 px-4 py-4 lg:mt-9 lg:px-6"
      x-data="{selected: $persist('Dashboard')}"
    >
      <!-- Menu Group -->
      <div>
        <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

        <ul class="mb-6 flex flex-col gap-1.5">
          <!-- Menu Item Dashboard -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#"
              @click.prevent="selected = (selected === 'Dashboard' ? '':'Dashboard')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Dashboard') || (page === 'ecommerce' || page === 'analytics' || page === 'stocks') }"
            >
              <svg
                class="fill-current"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                  fill=""
                />
                <path
                  d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                  fill=""
                />
                <path
                  d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                  fill=""
                />
                <path
                  d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                  fill=""
                />
              </svg>

              Dashboard

              <svg
                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Dashboard') }"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="translate transform overflow-hidden"
              :class="(selected === 'Dashboard') ? 'block' :'hidden'"
            >
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="index.html"
                    :class="page === 'ecommerce' && '!text-white'"
                    >eCommerce
                  </a>
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="analytics.html"
                    :class="page === 'analytics' && '!text-white'"
                    >Analytics
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="marketing.html"
                    :class="page === 'marketing' && '!text-white'"
                    >Marketing
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="crm.html"
                    :class="page === 'crm' && '!text-white'"
                    >CRM
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="stocks.html"
                    :class="page === 'stocks' && '!text-white'"
                    >Stocks
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item Dashboard -->

          <!-- Menu Item Calendar -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="calendar.html"
              @click="selected = (selected === 'Calendar' ? '':'Calendar')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Calendar') && (page === 'calendar') }"
            >
              <svg
                class="fill-current"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15.7499 2.9812H14.2874V2.36245C14.2874 2.02495 14.0062 1.71558 13.6405 1.71558C13.2749 1.71558 12.9937 1.99683 12.9937 2.36245V2.9812H4.97803V2.36245C4.97803 2.02495 4.69678 1.71558 4.33115 1.71558C3.96553 1.71558 3.68428 1.99683 3.68428 2.36245V2.9812H2.2499C1.29365 2.9812 0.478027 3.7687 0.478027 4.75308V14.5406C0.478027 15.4968 1.26553 16.3125 2.2499 16.3125H15.7499C16.7062 16.3125 17.5218 15.525 17.5218 14.5406V4.72495C17.5218 3.7687 16.7062 2.9812 15.7499 2.9812ZM1.77178 8.21245H4.1624V10.9968H1.77178V8.21245ZM5.42803 8.21245H8.38115V10.9968H5.42803V8.21245ZM8.38115 12.2625V15.0187H5.42803V12.2625H8.38115ZM9.64678 12.2625H12.5999V15.0187H9.64678V12.2625ZM9.64678 10.9968V8.21245H12.5999V10.9968H9.64678ZM13.8374 8.21245H16.228V10.9968H13.8374V8.21245ZM2.2499 4.24683H3.7124V4.83745C3.7124 5.17495 3.99365 5.48433 4.35928 5.48433C4.7249 5.48433 5.00615 5.20308 5.00615 4.83745V4.24683H13.0499V4.83745C13.0499 5.17495 13.3312 5.48433 13.6968 5.48433C14.0624 5.48433 14.3437 5.20308 14.3437 4.83745V4.24683H15.7499C16.0312 4.24683 16.2562 4.47183 16.2562 4.75308V6.94683H1.77178V4.75308C1.77178 4.47183 1.96865 4.24683 2.2499 4.24683ZM1.77178 14.5125V12.2343H4.1624V14.9906H2.2499C1.96865 15.0187 1.77178 14.7937 1.77178 14.5125ZM15.7499 15.0187H13.8374V12.2625H16.228V14.5406C16.2562 14.7937 16.0312 15.0187 15.7499 15.0187Z"
                  fill=""
                />
              </svg>

              Calendar
            </a>
          </li>
          <!-- Menu Item Calendar -->

          <!-- Menu Item Profile -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="profile.html"
              @click="selected = (selected === 'Profile' ? '':'Profile')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Profile') && (page === 'profile') }"
              :class="page === 'profile' && 'bg-graydark'"
            >
              <svg
                class="fill-current"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z"
                  fill=""
                />
                <path
                  d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5313 1.71582 14.5406V16.875C1.71582 17.2125 1.99707 17.5219 2.3627 17.5219C2.72832 17.5219 3.00957 17.2407 3.00957 16.875V14.5406C3.00957 12.2344 4.89394 10.3219 7.22832 10.3219H10.8564C13.1627 10.3219 15.0752 12.2063 15.0752 14.5406V16.875C15.0752 17.2125 15.3564 17.5219 15.7221 17.5219C16.0877 17.5219 16.3689 17.2407 16.3689 16.875V14.5406C16.2846 11.5313 13.8377 9.05627 10.8283 9.05627Z"
                  fill=""
                />
              </svg>

              Profile
            </a>
          </li>
          <!-- Menu Item Profile -->

          <!-- Menu Item Task -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#"
              @click.prevent="selected = (selected === 'Task' ? '':'Task')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Task') || (page === 'list' || page === 'kanban') }"
            >
              <svg
                class="fill-current"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_130_9728)">
                  <path
                    d="M3.45928 0.984375H1.6874C1.04053 0.984375 0.478027 1.51875 0.478027 2.19375V3.96563C0.478027 4.6125 1.0124 5.175 1.6874 5.175H3.45928C4.10615 5.175 4.66865 4.64063 4.66865 3.96563V2.16562C4.64053 1.51875 4.10615 0.984375 3.45928 0.984375ZM3.3749 3.88125H1.77178V2.25H3.3749V3.88125Z"
                    fill=""
                  />
                  <path
                    d="M7.22793 3.71245H16.8748C17.2123 3.71245 17.5217 3.4312 17.5217 3.06558C17.5217 2.69995 17.2404 2.4187 16.8748 2.4187H7.22793C6.89043 2.4187 6.58105 2.69995 6.58105 3.06558C6.58105 3.4312 6.89043 3.71245 7.22793 3.71245Z"
                    fill=""
                  />
                  <path
                    d="M3.45928 6.75H1.6874C1.04053 6.75 0.478027 7.28437 0.478027 7.95937V9.73125C0.478027 10.3781 1.0124 10.9406 1.6874 10.9406H3.45928C4.10615 10.9406 4.66865 10.4062 4.66865 9.73125V7.95937C4.64053 7.28437 4.10615 6.75 3.45928 6.75ZM3.3749 9.64687H1.77178V8.01562H3.3749V9.64687Z"
                    fill=""
                  />
                  <path
                    d="M16.8748 8.21252H7.22793C6.89043 8.21252 6.58105 8.49377 6.58105 8.8594C6.58105 9.22502 6.86231 9.47815 7.22793 9.47815H16.8748C17.2123 9.47815 17.5217 9.1969 17.5217 8.8594C17.5217 8.5219 17.2123 8.21252 16.8748 8.21252Z"
                    fill=""
                  />
                  <path
                    d="M3.45928 12.8531H1.6874C1.04053 12.8531 0.478027 13.3875 0.478027 14.0625V15.8344C0.478027 16.4813 1.0124 17.0438 1.6874 17.0438H3.45928C4.10615 17.0438 4.66865 16.5094 4.66865 15.8344V14.0625C4.64053 13.3875 4.10615 12.8531 3.45928 12.8531ZM3.3749 15.75H1.77178V14.1188H3.3749V15.75Z"
                    fill=""
                  />
                  <path
                    d="M16.8748 14.2875H7.22793C6.89043 14.2875 6.58105 14.5687 6.58105 14.9344C6.58105 15.3 6.86231 15.5812 7.22793 15.5812H16.8748C17.2123 15.5812 17.5217 15.3 17.5217 14.9344C17.5217 14.5687 17.2123 14.2875 16.8748 14.2875Z"
                    fill=""
                  />
                </g>
                <defs>
                  <clipPath id="clip0_130_9728">
                    <rect width="18" height="18" fill="white" />
                  </clipPath>
                </defs>
              </svg>

              Task

              <svg
                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Task') }"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="translate transform overflow-hidden"
              :class="(selected === 'Task') ? 'block' :'hidden'"
            >
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="task-list.html"
                    :class="page === 'list' && '!text-white'"
                    >List
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="task-kanban.html"
                    :class="page === 'kanban' && '!text-white'"
                    >Kanban
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item Task -->

          <!-- Menu Item Forms -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#"
              @click.prevent="selected = (selected === 'Forms' ? '':'Forms')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Forms') || (page === 'formElements' || page === 'formLayout' || page === 'proFormElements' || page === 'proFormLayout') }"
            >
              <svg
                class="fill-current"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M1.43425 7.5093H2.278C2.44675 7.5093 2.55925 7.3968 2.58737 7.31243L2.98112 6.32805H5.90612L6.27175 7.31243C6.328 7.48118 6.46862 7.5093 6.58112 7.5093H7.453C7.76237 7.48118 7.87487 7.25618 7.76237 7.03118L5.428 1.4343C5.37175 1.26555 5.3155 1.23743 5.14675 1.23743H3.88112C3.76862 1.23743 3.59987 1.29368 3.57175 1.4343L1.153 7.08743C1.0405 7.2843 1.20925 7.5093 1.43425 7.5093ZM4.47175 2.98118L5.3155 5.17493H3.59987L4.47175 2.98118Z"
                  fill=""
                />
                <path
                  d="M10.1249 2.5031H16.8749C17.2124 2.5031 17.5218 2.22185 17.5218 1.85623C17.5218 1.4906 17.2405 1.20935 16.8749 1.20935H10.1249C9.7874 1.20935 9.47803 1.4906 9.47803 1.85623C9.47803 2.22185 9.75928 2.5031 10.1249 2.5031Z"
                  fill=""
                />
                <path
                  d="M16.8749 6.21558H10.1249C9.7874 6.21558 9.47803 6.49683 9.47803 6.86245C9.47803 7.22808 9.75928 7.50933 10.1249 7.50933H16.8749C17.2124 7.50933 17.5218 7.22808 17.5218 6.86245C17.5218 6.49683 17.2124 6.21558 16.8749 6.21558Z"
                  fill=""
                />
                <path
                  d="M16.875 11.1656H1.77187C1.43438 11.1656 1.125 11.4469 1.125 11.8125C1.125 12.1781 1.40625 12.4594 1.77187 12.4594H16.875C17.2125 12.4594 17.5219 12.1781 17.5219 11.8125C17.5219 11.4469 17.2125 11.1656 16.875 11.1656Z"
                  fill=""
                />
                <path
                  d="M16.875 16.1156H1.77187C1.43438 16.1156 1.125 16.3969 1.125 16.7625C1.125 17.1281 1.40625 17.4094 1.77187 17.4094H16.875C17.2125 17.4094 17.5219 17.1281 17.5219 16.7625C17.5219 16.3969 17.2125 16.1156 16.875 16.1156Z"
                  fill="white"
                />
              </svg>

              Forms

              <svg
                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Forms') }"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="translate transform overflow-hidden"
              :class="(selected === 'Forms') ? 'block' :'hidden'"
            >
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="form-elements.html"
                    :class="page === 'formElements' && '!text-white'"
                    >Form Elements</a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="pro-form-elements.html"
                    :class="page === 'proFormElements' && '!text-white'"
                    >Pro Form Elements
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="form-layout.html"
                    :class="page === 'formLayout' && '!text-white'"
                    >Form Layout</a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="pro-form-layout.html"
                    :class="page === 'proFormLayout' && '!text-white'"
                    >Pro Form Layout
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item Forms -->

          <!-- Menu Item Tables -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#"
              @click.prevent="selected = (selected === 'Tables' ? '':'Tables')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Tables') || (page === 'tables' || page === 'proTables') }"
            >
              <svg
                class="fill-current"
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_130_9756)">
                  <path
                    d="M15.7501 0.55835H2.2501C1.29385 0.55835 0.506348 1.34585 0.506348 2.3021V15.8021C0.506348 16.7584 1.29385 17.574 2.27822 17.574H15.7782C16.7345 17.574 17.5501 16.7865 17.5501 15.8021V2.3021C17.522 1.34585 16.7063 0.55835 15.7501 0.55835ZM6.69385 10.599V6.4646H11.3063V10.5709H6.69385V10.599ZM11.3063 11.8646V16.3083H6.69385V11.8646H11.3063ZM1.77197 6.4646H5.45635V10.5709H1.77197V6.4646ZM12.572 6.4646H16.2563V10.5709H12.572V6.4646ZM2.2501 1.82397H15.7501C16.0313 1.82397 16.2563 2.04897 16.2563 2.33022V5.2271H1.77197V2.3021C1.77197 2.02085 1.96885 1.82397 2.2501 1.82397ZM1.77197 15.8021V11.8646H5.45635V16.3083H2.2501C1.96885 16.3083 1.77197 16.0834 1.77197 15.8021ZM15.7501 16.3083H12.572V11.8646H16.2563V15.8021C16.2563 16.0834 16.0313 16.3083 15.7501 16.3083Z"
                    fill=""
                  />
                </g>
                <defs>
                  <clipPath id="clip0_130_9756">
                    <rect
                      width="18"
                      height="18"
                      fill="white"
                      transform="translate(0 0.052124)"
                    />
                  </clipPath>
                </defs>
              </svg>

              Tables

              <svg
                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Tables') }"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="translate transform overflow-hidden"
              :class="(selected === 'Tables') ? 'block' :'hidden'"
            >
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="tables.html"
                    :class="page === 'tables' && '!text-white'"
                    >Tables</a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="pro-tables.html"
                    :class="page === 'proTables' && '!text-white'"
                    >Pro Tables
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item Tables -->

          <!-- Menu Item Pages -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#"
              @click.prevent="selected = (selected === 'Pages' ? '':'Pages')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Pages') || (page === 'settings' || page === 'fileManager' || page === 'dataTables' || page === 'pricingTables' || page === 'errorPage' || page === 'mailSuccess' || page === 'faq' || page === 'team' || page === 'termsCondition') }"
            >
              <svg
                class="fill-current"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14.2875 0.506226H3.7125C2.75625 0.506226 1.96875 1.29373 1.96875 2.24998V15.75C1.96875 16.7062 2.75625 17.5219 3.74063 17.5219H14.3156C15.2719 17.5219 16.0875 16.7344 16.0875 15.75V2.24998C16.0313 1.29373 15.2438 0.506226 14.2875 0.506226ZM14.7656 15.75C14.7656 16.0312 14.5406 16.2562 14.2594 16.2562H3.7125C3.43125 16.2562 3.20625 16.0312 3.20625 15.75V2.24998C3.20625 1.96873 3.43125 1.74373 3.7125 1.74373H14.2875C14.5688 1.74373 14.7938 1.96873 14.7938 2.24998V15.75H14.7656Z"
                  fill=""
                />
                <path
                  d="M12.7965 2.6156H9.73086C9.22461 2.6156 8.80273 3.03748 8.80273 3.54373V7.25623C8.80273 7.76248 9.22461 8.18435 9.73086 8.18435H12.7965C13.3027 8.18435 13.7246 7.76248 13.7246 7.25623V3.5156C13.6965 3.03748 13.3027 2.6156 12.7965 2.6156ZM12.4309 6.8906H10.0684V3.88123H12.4309V6.8906Z"
                  fill=""
                />
                <path
                  d="M4.97773 4.35938H7.03086C7.36836 4.35938 7.67773 4.07812 7.67773 3.7125C7.67773 3.34687 7.39648 3.09375 7.03086 3.09375H4.94961C4.61211 3.09375 4.30273 3.375 4.30273 3.74063C4.30273 4.10625 4.61211 4.35938 4.97773 4.35938Z"
                  fill=""
                />
                <path
                  d="M4.97773 7.9312H7.03086C7.36836 7.9312 7.67773 7.64995 7.67773 7.28433C7.67773 6.9187 7.39648 6.63745 7.03086 6.63745H4.94961C4.61211 6.63745 4.30273 6.9187 4.30273 7.28433C4.30273 7.64995 4.61211 7.9312 4.97773 7.9312Z"
                  fill=""
                />
                <path
                  d="M13.0789 10.2374H4.97891C4.64141 10.2374 4.33203 10.5187 4.33203 10.8843C4.33203 11.2499 4.61328 11.5312 4.97891 11.5312H13.0789C13.4164 11.5312 13.7258 11.2499 13.7258 10.8843C13.7258 10.5187 13.4164 10.2374 13.0789 10.2374Z"
                  fill=""
                />
                <path
                  d="M13.0789 13.8093H4.97891C4.64141 13.8093 4.33203 14.0906 4.33203 14.4562C4.33203 14.8218 4.61328 15.1031 4.97891 15.1031H13.0789C13.4164 15.1031 13.7258 14.8218 13.7258 14.4562C13.7258 14.0906 13.4164 13.8093 13.0789 13.8093Z"
                  fill=""
                />
              </svg>

              Pages

              <svg
                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Task') }"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="translate transform overflow-hidden"
              :class="(selected === 'Pages') ? 'block' :'hidden'"
            >
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="settings.html"
                    :class="page === 'settings' && '!text-white'"
                  >
                    Settings
                  </a>
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="file-manager.html"
                    :class="page === 'fileManager' && '!text-white'"
                    >File Manager
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="data-tables.html"
                    :class="page === 'dataTables' && '!text-white'"
                    >Data Tables
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="pricing-tables.html"
                    :class="page === 'pricingTables' && '!text-white'"
                    >Pricing Tables
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="error-page.html"
                    :class="page === 'errorPage' && '!text-white'"
                    >Error Page
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="faq.html"
                    :class="page === 'faq' && '!text-white'"
                    >Faq's
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="team.html"
                    :class="page === 'team' && '!text-white'"
                    >Teams
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="terms-conditions.html"
                    :class="page === 'termsCondition' && '!text-white'"
                    >Terms & Conditions
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="mail-success.html"
                    :class="page === 'mailSuccess' && '!text-white'"
                    >Mail Success
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item Pages -->
        </ul>
      </div>

      <!-- Support Group -->
      <div>
        <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">SUPPORT</h3>

        <ul class="mb-6 flex flex-col gap-1.5">
          <!-- Menu Item Messages -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="messages.html"
              @click="selected = (selected === 'Messages' ? '':'Messages')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Messages') && (page === 'Messages') }"
            >
              <svg
                class="fill-current"
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15.7499 2.75208H2.2499C1.29365 2.75208 0.478027 3.53957 0.478027 4.52395V13.6364C0.478027 14.5927 1.26553 15.4083 2.2499 15.4083H15.7499C16.7062 15.4083 17.5218 14.6208 17.5218 13.6364V4.49583C17.5218 3.53958 16.7062 2.75208 15.7499 2.75208ZM15.7499 4.0177C15.778 4.0177 15.8062 4.0177 15.8343 4.0177L8.9999 8.4052L2.16553 4.0177C2.19365 4.0177 2.22178 4.0177 2.2499 4.0177H15.7499ZM15.7499 14.0865H2.2499C1.96865 14.0865 1.74365 13.8615 1.74365 13.5802V5.2552L8.3249 9.47395C8.52178 9.61457 8.74678 9.67083 8.97178 9.67083C9.19678 9.67083 9.42178 9.61457 9.61865 9.47395L16.1999 5.2552V13.6083C16.2562 13.8896 16.0312 14.0865 15.7499 14.0865Z"
                  fill=""
                />
              </svg>

              Messages

              <span
                class="absolute right-14 top-1/2 -translate-y-1/2 rounded bg-primary px-2.5 py-1 text-xs font-medium text-white"
                >5</span
              >
              <span
                class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                >Pro</span
              >
            </a>
          </li>
          <!-- Menu Item Messages -->

          <!-- Menu Item Inbox -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="inbox.html"
              @click="selected = (selected === 'Inbox' ? '':'Inbox')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Inbox') && (page === 'inbox') }"
            >
              <svg
                class="fill-current"
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M16.8749 7.44902C16.5374 7.44902 16.228 7.73027 16.228 8.0959V13.3834C16.228 14.4803 15.4124 15.3521 14.3999 15.3521H3.5999C2.55928 15.3521 1.77178 14.4803 1.77178 13.3834V8.06777C1.77178 7.73027 1.49053 7.4209 1.1249 7.4209C0.759277 7.4209 0.478027 7.70215 0.478027 8.06777V13.3553C0.478027 15.1271 1.85615 16.5896 3.57178 16.5896H14.3999C16.1155 16.5896 17.4937 15.1553 17.4937 13.3553V8.06777C17.5218 7.73027 17.2124 7.44902 16.8749 7.44902Z"
                  fill=""
                />
                <path
                  d="M8.5498 11.6396C8.6623 11.7521 8.83105 11.8365 8.9998 11.8365C9.16855 11.8365 9.30918 11.7803 9.4498 11.6396L12.8811 8.23652C13.1342 7.9834 13.1342 7.58965 12.8811 7.33652C12.6279 7.0834 12.2342 7.0834 11.9811 7.33652L9.64668 9.64277V2.16152C9.64668 1.82402 9.36543 1.51465 8.9998 1.51465C8.6623 1.51465 8.35293 1.7959 8.35293 2.16152V9.69902L6.01855 7.36465C5.76543 7.11152 5.37168 7.11152 5.11855 7.36465C4.86543 7.61777 4.86543 8.01152 5.11855 8.26465L8.5498 11.6396Z"
                  fill=""
                />
              </svg>

              Inbox
              <span
                class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                >Pro</span
              >
            </a>
          </li>
          <!-- Menu Item Inbox -->

          <!-- Menu Item Invoice -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="invoice.html"
              @click="selected = (selected === 'Invoice' ? '':'Invoice')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Invoice') && (page === 'Invoice') }"
              :class="page === 'Invoice' && 'bg-graydark'"
            >
              <svg
                class="fill-current"
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_130_9787)">
                  <path
                    d="M15.8343 2.49902C15.8343 1.43027 14.9624 0.530273 13.8655 0.530273H4.13428C3.06553 0.530273 2.16553 1.40215 2.16553 2.49902V16.6178C2.16553 16.8428 2.30615 17.0678 2.50303 17.1803C2.6999 17.2928 2.95303 17.2646 3.1499 17.1521L4.55615 16.224L6.44053 17.4615C6.66553 17.6021 6.91865 17.6021 7.14365 17.4615L8.9999 16.224L10.8562 17.4615C10.9687 17.5459 11.0812 17.574 11.1937 17.574C11.3062 17.574 11.4468 17.5459 11.5312 17.4615L13.3874 16.224L14.7937 17.1803C14.9905 17.3209 15.2437 17.3209 15.4405 17.2084C15.6374 17.0959 15.778 16.8709 15.778 16.6459L15.8343 2.49902ZM14.0343 15.099C13.6687 14.8459 13.1905 14.8459 12.8249 15.099L11.2218 16.1678L9.61865 15.099C9.42178 14.9865 9.2249 14.9021 8.9999 14.9021C8.80303 14.9021 8.57803 14.9584 8.40928 15.099L6.80615 16.1678L5.20303 15.099C4.8374 14.8459 4.35928 14.8459 3.99365 15.099L3.45928 15.4365V2.49902C3.45928 2.10527 3.76865 1.7959 4.1624 1.7959H13.9218C14.3155 1.7959 14.6249 2.10527 14.6249 2.49902V15.4365L14.0343 15.099Z"
                    fill=""
                  />
                  <path
                    d="M7.93106 3.79272H5.5123C5.1748 3.79272 4.89355 4.07397 4.89355 4.41147C4.89355 4.74897 5.1748 5.03022 5.5123 5.03022H7.93106C8.26856 5.03022 8.54981 4.74897 8.54981 4.41147C8.54981 4.07397 8.26856 3.79272 7.93106 3.79272Z"
                    fill=""
                  />
                  <path
                    d="M12.347 3.79272H11.672C11.3345 3.79272 11.0532 4.07397 11.0532 4.41147C11.0532 4.74897 11.3345 5.03022 11.672 5.03022H12.347C12.6845 5.03022 12.9657 4.74897 12.9657 4.41147C12.9657 4.07397 12.6845 3.79272 12.347 3.79272Z"
                    fill=""
                  />
                  <path
                    d="M5.5123 8.74275H7.05918C7.39668 8.74275 7.67793 8.4615 7.67793 8.124C7.67793 7.7865 7.39668 7.50525 7.05918 7.50525H5.5123C5.1748 7.50525 4.89355 7.7865 4.89355 8.124C4.89355 8.4615 5.14668 8.74275 5.5123 8.74275Z"
                    fill=""
                  />
                  <path
                    d="M12.347 7.47717H11.672C11.3345 7.47717 11.0532 7.75842 11.0532 8.09592C11.0532 8.43342 11.3345 8.71467 11.672 8.71467H12.347C12.6845 8.71467 12.9657 8.43342 12.9657 8.09592C12.9657 7.75842 12.6845 7.47717 12.347 7.47717Z"
                    fill=""
                  />
                  <path
                    d="M7.93106 11.1334H5.5123C5.1748 11.1334 4.89355 11.4147 4.89355 11.7522C4.89355 12.0897 5.1748 12.3709 5.5123 12.3709H7.93106C8.26856 12.3709 8.54981 12.0897 8.54981 11.7522C8.54981 11.4147 8.26856 11.1334 7.93106 11.1334Z"
                    fill=""
                  />
                  <path
                    d="M12.347 11.1334H11.672C11.3345 11.1334 11.0532 11.4147 11.0532 11.7522C11.0532 12.0897 11.3345 12.3709 11.672 12.3709H12.347C12.6845 12.3709 12.9657 12.0897 12.9657 11.7522C12.9657 11.4147 12.6845 11.1334 12.347 11.1334Z"
                    fill=""
                  />
                </g>
                <defs>
                  <clipPath id="clip0_130_9787">
                    <rect
                      width="18"
                      height="18"
                      fill="white"
                      transform="translate(0 0.052124)"
                    />
                  </clipPath>
                </defs>
              </svg>

              Invoice
              <span
                class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                >Pro</span
              >
            </a>
          </li>
          <!-- Menu Item Invoice -->
        </ul>
      </div>

      <!-- Others Group -->
      <div>
        <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">OTHERS</h3>

        <ul class="mb-6 flex flex-col gap-1.5">
          <!-- Menu Item Chart -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#"
              @click.prevent="selected = (selected === 'Charts' ? '':'Charts')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Charts') || (page === 'basicChart' || page === 'advancedChart') }"
            >
              <svg
                class="fill-current"
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_130_9801)">
                  <path
                    d="M10.8563 0.55835C10.5188 0.55835 10.2095 0.8396 10.2095 1.20522V6.83022C10.2095 7.16773 10.4907 7.4771 10.8563 7.4771H16.8751C17.0438 7.4771 17.2126 7.39272 17.3251 7.28022C17.4376 7.1396 17.4938 6.97085 17.4938 6.8021C17.2688 3.28647 14.3438 0.55835 10.8563 0.55835ZM11.4751 6.15522V1.8521C13.8095 2.13335 15.6938 3.8771 16.1438 6.18335H11.4751V6.15522Z"
                    fill=""
                  />
                  <path
                    d="M15.3845 8.7427H9.1126V2.69582C9.1126 2.35832 8.83135 2.07707 8.49385 2.07707C8.40947 2.07707 8.3251 2.07707 8.24072 2.07707C3.96572 2.04895 0.506348 5.53645 0.506348 9.81145C0.506348 14.0864 3.99385 17.5739 8.26885 17.5739C12.5438 17.5739 16.0313 14.0864 16.0313 9.81145C16.0313 9.6427 16.0313 9.47395 16.0032 9.33332C16.0032 8.99582 15.722 8.7427 15.3845 8.7427ZM8.26885 16.3083C4.66885 16.3083 1.77197 13.4114 1.77197 9.81145C1.77197 6.3802 4.47197 3.53957 7.8751 3.3427V9.36145C7.8751 9.69895 8.15635 10.0083 8.52197 10.0083H14.7938C14.6813 13.4958 11.7845 16.3083 8.26885 16.3083Z"
                    fill=""
                  />
                </g>
                <defs>
                  <clipPath id="clip0_130_9801">
                    <rect
                      width="18"
                      height="18"
                      fill="white"
                      transform="translate(0 0.052124)"
                    />
                  </clipPath>
                </defs>
              </svg>

              Charts

              <svg
                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Charts') }"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="translate transform overflow-hidden"
              :class="(selected === 'Charts') ? 'block' :'hidden'"
            >
              <ul class="mb-3 mt-4 flex flex-col gap-2 pl-6">
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="basic-chart.html"
                    :class="page === 'basicChart' && '!text-white'"
                    >Basic Chart</a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="advanced-chart.html"
                    :class="page === 'advancedChart' && '!text-white'"
                    >Advanced Chart
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item Chart -->

          <!-- Menu Item Ui Elements -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#"
              @click.prevent="selected = (selected === 'UiElements' ? '':'UiElements')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'UiElements') || (page === 'alerts' || page === 'buttons' || page === 'buttonsGroup' || page === 'badge' || page === 'breadcrumb' || page === 'card'|| page === 'dropdowns' || page === 'Modals' || page === 'tabs' || page === 'tooltips' || page === 'popovers' || page === 'accordion' || page === 'notifications' || page === 'pagination' || page === 'progress' || page === 'carousel' || page === 'images' || page === 'videos' || page === 'spinners' || page === 'uiList' || page === 'avatars') }"
            >
              <svg
                class="fill-current"
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_130_9807)">
                  <path
                    d="M15.7501 0.55835H2.2501C1.29385 0.55835 0.506348 1.34585 0.506348 2.3021V7.53335C0.506348 8.4896 1.29385 9.2771 2.2501 9.2771H15.7501C16.7063 9.2771 17.4938 8.4896 17.4938 7.53335V2.3021C17.4938 1.34585 16.7063 0.55835 15.7501 0.55835ZM16.2563 7.53335C16.2563 7.8146 16.0313 8.0396 15.7501 8.0396H2.2501C1.96885 8.0396 1.74385 7.8146 1.74385 7.53335V2.3021C1.74385 2.02085 1.96885 1.79585 2.2501 1.79585H15.7501C16.0313 1.79585 16.2563 2.02085 16.2563 2.3021V7.53335Z"
                    fill=""
                  />
                  <path
                    d="M6.13135 10.9646H2.2501C1.29385 10.9646 0.506348 11.7521 0.506348 12.7083V15.8021C0.506348 16.7583 1.29385 17.5458 2.2501 17.5458H6.13135C7.0876 17.5458 7.8751 16.7583 7.8751 15.8021V12.7083C7.90322 11.7521 7.11572 10.9646 6.13135 10.9646ZM6.6376 15.8021C6.6376 16.0833 6.4126 16.3083 6.13135 16.3083H2.2501C1.96885 16.3083 1.74385 16.0833 1.74385 15.8021V12.7083C1.74385 12.4271 1.96885 12.2021 2.2501 12.2021H6.13135C6.4126 12.2021 6.6376 12.4271 6.6376 12.7083V15.8021Z"
                    fill=""
                  />
                  <path
                    d="M15.75 10.9646H11.8688C10.9125 10.9646 10.125 11.7521 10.125 12.7083V15.8021C10.125 16.7583 10.9125 17.5458 11.8688 17.5458H15.75C16.7063 17.5458 17.4938 16.7583 17.4938 15.8021V12.7083C17.4938 11.7521 16.7063 10.9646 15.75 10.9646ZM16.2562 15.8021C16.2562 16.0833 16.0312 16.3083 15.75 16.3083H11.8688C11.5875 16.3083 11.3625 16.0833 11.3625 15.8021V12.7083C11.3625 12.4271 11.5875 12.2021 11.8688 12.2021H15.75C16.0312 12.2021 16.2562 12.4271 16.2562 12.7083V15.8021Z"
                    fill=""
                  />
                </g>
                <defs>
                  <clipPath id="clip0_130_9807">
                    <rect
                      width="18"
                      height="18"
                      fill="white"
                      transform="translate(0 0.052124)"
                    />
                  </clipPath>
                </defs>
              </svg>

              UI Elements

              <svg
                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'UiElements') }"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="translate transform overflow-hidden"
              :class="(selected === 'UiElements') ? 'block' :'hidden'"
            >
              <ul class="mb-3 mt-4 flex flex-col gap-2 pl-6">
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="accordion.html"
                    :class="page === 'accordion' && '!text-white'"
                    >Accordion
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="alerts.html"
                    :class="page === 'alerts' && '!text-white'"
                    >Alerts</a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="avatars.html"
                    :class="page === 'avatars' && '!text-white'"
                    >Avatars
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="badge.html"
                    :class="page === 'badge' && '!text-white'"
                    >Badge
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="breadcrumb.html"
                    :class="page === 'breadcrumb' && '!text-white'"
                    >Breadcrumb
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="buttons.html"
                    :class="page === 'buttons' && '!text-white'"
                    >Buttons</a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="buttons-group.html"
                    :class="page === 'buttonsGroup' && '!text-white'"
                    >Buttons Group
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="cards.html"
                    :class="page === 'card' && '!text-white'"
                    >Cards
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="carousel.html"
                    :class="page === 'carousel' && '!text-white'"
                    >Carousel
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="dropdowns.html"
                    :class="page === 'dropdowns' && '!text-white'"
                    >Dropdowns
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="images.html"
                    :class="page === 'images' && '!text-white'"
                    >Images
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="list.html"
                    :class="page === 'uiList' && '!text-white'"
                    >List
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="modals.html"
                    :class="page === 'Modals' && '!text-white'"
                    >Modals
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="notifications.html"
                    :class="page === 'notifications' && '!text-white'"
                    >Notifications
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="pagination.html"
                    :class="page === 'pagination' && '!text-white'"
                    >Pagination
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="popovers.html"
                    :class="page === 'popovers' && '!text-white'"
                    >Popovers
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="progress.html"
                    :class="page === 'progress' && '!text-white'"
                    >Progress
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="spinners.html"
                    :class="page === 'spinners' && '!text-white'"
                    >Spinners
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="tabs.html"
                    :class="page === 'tabs' && '!text-white'"
                    >Tabs
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="tooltips.html"
                    :class="page === 'tooltips' && '!text-white'"
                    >Tooltips
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>

                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="videos.html"
                    :class="page === 'videos' && '!text-white'"
                    >Videos
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item Ui Elements -->

          <!-- Menu Item Auth Pages -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#"
              @click.prevent="selected = (selected === 'AuthPages' ? '':'AuthPages')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'AuthPages') || (page === 'register' || page === 'login' || page === 'forgetPassword' || page === 'comingSoon' || page === 'twoStepVerification' || page === 'underMaintenance') }"
            >
              <svg
                class="fill-current"
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_130_9814)">
                  <path
                    d="M12.7127 0.55835H9.53457C8.80332 0.55835 8.18457 1.1771 8.18457 1.90835V3.84897C8.18457 4.18647 8.46582 4.46772 8.80332 4.46772C9.14082 4.46772 9.45019 4.18647 9.45019 3.84897V1.88022C9.45019 1.82397 9.47832 1.79585 9.53457 1.79585H12.7127C13.3877 1.79585 13.9221 2.33022 13.9221 3.00522V15.0709C13.9221 15.7459 13.3877 16.2802 12.7127 16.2802H9.53457C9.47832 16.2802 9.45019 16.2521 9.45019 16.1959V14.2552C9.45019 13.9177 9.16894 13.6365 8.80332 13.6365C8.43769 13.6365 8.18457 13.9177 8.18457 14.2552V16.1959C8.18457 16.9271 8.80332 17.5459 9.53457 17.5459H12.7127C14.0908 17.5459 15.1877 16.4209 15.1877 15.0709V3.03335C15.1877 1.65522 14.0627 0.55835 12.7127 0.55835Z"
                    fill=""
                  />
                  <path
                    d="M10.4346 8.60205L7.62207 5.7333C7.36895 5.48018 6.97519 5.48018 6.72207 5.7333C6.46895 5.98643 6.46895 6.38018 6.72207 6.6333L8.46582 8.40518H3.45957C3.12207 8.40518 2.84082 8.68643 2.84082 9.02393C2.84082 9.36143 3.12207 9.64268 3.45957 9.64268H8.49395L6.72207 11.4427C6.46895 11.6958 6.46895 12.0896 6.72207 12.3427C6.83457 12.4552 7.00332 12.5114 7.17207 12.5114C7.34082 12.5114 7.50957 12.4552 7.62207 12.3145L10.4346 9.4458C10.6877 9.24893 10.6877 8.85518 10.4346 8.60205Z"
                    fill=""
                  />
                </g>
                <defs>
                  <clipPath id="clip0_130_9814">
                    <rect
                      width="18"
                      height="18"
                      fill="white"
                      transform="translate(0 0.052124)"
                    />
                  </clipPath>
                </defs>
              </svg>

              Authentication

              <svg
                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'AuthPages') }"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="translate transform overflow-hidden"
              :class="(selected === 'AuthPages') ? 'block' :'hidden'"
            >
              <ul class="mb-3 mt-4 flex flex-col gap-2 pl-6">
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="signin.html"
                    :class="page === 'signin' && '!text-white'"
                    >Sign In</a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="signup.html"
                    :class="page === 'signup' && '!text-white'"
                    >Sign Up</a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="reset-password.html"
                    :class="page === 'resetPassword' && '!text-white'"
                    >Reset Password
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="coming-soon.html"
                    :class="page === 'comingSoon' && '!text-white'"
                    >Coming Soon
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="two-step-verification.html"
                    :class="page === 'twoStepVerification' && '!text-white'"
                    >2 Step Verification
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                    href="under-maintenance.html"
                    :class="page === 'underMaintenance' && '!text-white'"
                    >Under Maintenance
                    <span
                      class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white"
                      >Pro</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item Auth Pages -->
        </ul>
      </div>
    </nav>
    <!-- Sidebar Menu -->

    <!-- Promo Box -->
    <div
      class="mx-auto mb-10 w-full max-w-60 rounded-sm border border-strokedark bg-boxdark px-4 py-6 text-center shadow-default"
    >
      <h3 class="mb-1 font-semibold text-white">TailAdmin Pro</h3>
      <p class="mb-4 text-xs">Get All Dashboards and 300+ UI Elements</p>
      <a
        href="https://tailadmin.com/pricing"
        target="_blank"
        rel="nofollow"
        class="flex items-center justify-center rounded-md bg-primary p-2 text-white hover:bg-opacity-95"
      >
        Purchase Now
      </a>
    </div>
    <!-- Promo Box -->
  </div>
</aside>

      <!-- ===== Sidebar End ===== -->

      <!-- ===== Content Area Start ===== -->
      <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
      >
        <!-- ===== Header Start ===== -->
        <header
  class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none"
>
  <div
    class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11"
  >
    <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
      <!-- Hamburger Toggle BTN -->
      <button
        class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden"
        @click.stop="sidebarToggle = !sidebarToggle"
      >
        <span class="relative block h-5.5 w-5.5 cursor-pointer">
          <span class="du-block absolute right-0 h-full w-full">
            <span
              class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white"
              :class="{ '!w-full delay-300': !sidebarToggle }"
            ></span>
            <span
              class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white"
              :class="{ '!w-full delay-400': !sidebarToggle }"
            ></span>
            <span
              class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white"
              :class="{ '!w-full delay-500': !sidebarToggle }"
            ></span>
          </span>
          <span class="du-block absolute right-0 h-full w-full rotate-45">
            <span
              class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white"
              :class="{ '!h-0 delay-[0]': !sidebarToggle }"
            ></span>
            <span
              class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-white"
              :class="{ '!h-0 dealy-200': !sidebarToggle }"
            ></span>
          </span>
        </span>
      </button>
      <!-- Hamburger Toggle BTN -->
      <a class="block flex-shrink-0 lg:hidden" href="index.html">
        <img src="src/images/logo/logo-icon.svg" alt="Logo" />
      </a>
    </div>
    <div class="hidden sm:block">
      <form action="https://formbold.com/s/unique_form_id" method="POST">
        <div class="relative">
          <button class="absolute left-0 top-1/2 -translate-y-1/2">
            <svg
              class="fill-body hover:fill-primary dark:fill-bodydark dark:hover:fill-primary"
              width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M9.16666 3.33332C5.945 3.33332 3.33332 5.945 3.33332 9.16666C3.33332 12.3883 5.945 15 9.16666 15C12.3883 15 15 12.3883 15 9.16666C15 5.945 12.3883 3.33332 9.16666 3.33332ZM1.66666 9.16666C1.66666 5.02452 5.02452 1.66666 9.16666 1.66666C13.3088 1.66666 16.6667 5.02452 16.6667 9.16666C16.6667 13.3088 13.3088 16.6667 9.16666 16.6667C5.02452 16.6667 1.66666 13.3088 1.66666 9.16666Z"
                fill=""
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M13.2857 13.2857C13.6112 12.9603 14.1388 12.9603 14.4642 13.2857L18.0892 16.9107C18.4147 17.2362 18.4147 17.7638 18.0892 18.0892C17.7638 18.4147 17.2362 18.4147 16.9107 18.0892L13.2857 14.4642C12.9603 14.1388 12.9603 13.6112 13.2857 13.2857Z"
                fill=""
              />
            </svg>
          </button>

          <input
            type="text"
            placeholder="Type to search..."
            class="w-full bg-transparent pl-9 pr-4 focus:outline-none xl:w-125"
          />
        </div>
      </form>
    </div>

    <div class="flex items-center gap-3 2xsm:gap-7">
      <ul class="flex items-center gap-2 2xsm:gap-4">
        <li>
          <!-- Dark Mode Toggler -->
          <label
            :class="darkMode ? 'bg-primary' : 'bg-stroke'"
            class="relative m-0 block h-7.5 w-14 rounded-full"
          >
            <input
              type="checkbox"
              :value="darkMode"
              @change="darkMode = !darkMode"
              class="absolute top-0 z-50 m-0 h-full w-full cursor-pointer opacity-0"
            />
            <span
              :class="darkMode && '!right-1 !translate-x-full'"
              class="absolute left-1 top-1/2 flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear"
            >
              <span class="dark:hidden">
                <svg
                  width="16"
                  height="16"
                  viewBox="0 0 16 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M7.99992 12.6666C10.5772 12.6666 12.6666 10.5772 12.6666 7.99992C12.6666 5.42259 10.5772 3.33325 7.99992 3.33325C5.42259 3.33325 3.33325 5.42259 3.33325 7.99992C3.33325 10.5772 5.42259 12.6666 7.99992 12.6666Z"
                    fill="#969AA1"
                  />
                  <path
                    d="M8.00008 15.3067C7.63341 15.3067 7.33342 15.0334 7.33342 14.6667V14.6134C7.33342 14.2467 7.63341 13.9467 8.00008 13.9467C8.36675 13.9467 8.66675 14.2467 8.66675 14.6134C8.66675 14.9801 8.36675 15.3067 8.00008 15.3067ZM12.7601 13.4267C12.5867 13.4267 12.4201 13.3601 12.2867 13.2334L12.2001 13.1467C11.9401 12.8867 11.9401 12.4667 12.2001 12.2067C12.4601 11.9467 12.8801 11.9467 13.1401 12.2067L13.2267 12.2934C13.4867 12.5534 13.4867 12.9734 13.2267 13.2334C13.1001 13.3601 12.9334 13.4267 12.7601 13.4267ZM3.24008 13.4267C3.06675 13.4267 2.90008 13.3601 2.76675 13.2334C2.50675 12.9734 2.50675 12.5534 2.76675 12.2934L2.85342 12.2067C3.11342 11.9467 3.53341 11.9467 3.79341 12.2067C4.05341 12.4667 4.05341 12.8867 3.79341 13.1467L3.70675 13.2334C3.58008 13.3601 3.40675 13.4267 3.24008 13.4267ZM14.6667 8.66675H14.6134C14.2467 8.66675 13.9467 8.36675 13.9467 8.00008C13.9467 7.63341 14.2467 7.33342 14.6134 7.33342C14.9801 7.33342 15.3067 7.63341 15.3067 8.00008C15.3067 8.36675 15.0334 8.66675 14.6667 8.66675ZM1.38675 8.66675H1.33341C0.966748 8.66675 0.666748 8.36675 0.666748 8.00008C0.666748 7.63341 0.966748 7.33342 1.33341 7.33342C1.70008 7.33342 2.02675 7.63341 2.02675 8.00008C2.02675 8.36675 1.75341 8.66675 1.38675 8.66675ZM12.6734 3.99341C12.5001 3.99341 12.3334 3.92675 12.2001 3.80008C11.9401 3.54008 11.9401 3.12008 12.2001 2.86008L12.2867 2.77341C12.5467 2.51341 12.9667 2.51341 13.2267 2.77341C13.4867 3.03341 13.4867 3.45341 13.2267 3.71341L13.1401 3.80008C13.0134 3.92675 12.8467 3.99341 12.6734 3.99341ZM3.32675 3.99341C3.15341 3.99341 2.98675 3.92675 2.85342 3.80008L2.76675 3.70675C2.50675 3.44675 2.50675 3.02675 2.76675 2.76675C3.02675 2.50675 3.44675 2.50675 3.70675 2.76675L3.79341 2.85342C4.05341 3.11342 4.05341 3.53341 3.79341 3.79341C3.66675 3.92675 3.49341 3.99341 3.32675 3.99341ZM8.00008 2.02675C7.63341 2.02675 7.33342 1.75341 7.33342 1.38675V1.33341C7.33342 0.966748 7.63341 0.666748 8.00008 0.666748C8.36675 0.666748 8.66675 0.966748 8.66675 1.33341C8.66675 1.70008 8.36675 2.02675 8.00008 2.02675Z"
                    fill="#969AA1"
                  />
                </svg>
              </span>
              <span class="hidden dark:inline-block">
                <svg
                  width="16"
                  height="16"
                  viewBox="0 0 16 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M14.3533 10.62C14.2466 10.44 13.9466 10.16 13.1999 10.2933C12.7866 10.3667 12.3666 10.4 11.9466 10.38C10.3933 10.3133 8.98659 9.6 8.00659 8.5C7.13993 7.53333 6.60659 6.27333 6.59993 4.91333C6.59993 4.15333 6.74659 3.42 7.04659 2.72666C7.33993 2.05333 7.13326 1.7 6.98659 1.55333C6.83326 1.4 6.47326 1.18666 5.76659 1.48C3.03993 2.62666 1.35326 5.36 1.55326 8.28666C1.75326 11.04 3.68659 13.3933 6.24659 14.28C6.85993 14.4933 7.50659 14.62 8.17326 14.6467C8.27993 14.6533 8.38659 14.66 8.49326 14.66C10.7266 14.66 12.8199 13.6067 14.1399 11.8133C14.5866 11.1933 14.4666 10.8 14.3533 10.62Z"
                    fill="#969AA1"
                  />
                </svg>
              </span>
            </span>
          </label>
          <!-- Dark Mode Toggler -->
        </li>

        <!-- Notification Menu Area -->
        <li
          class="relative"
          x-data="{ dropdownOpen: false, notifying: true }"
          @click.outside="dropdownOpen = false"
        >
          <a
            class="relative flex h-8.5 w-8.5 items-center justify-center rounded-full border-[0.5px] border-stroke bg-gray hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
            href="#"
            @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false"
          >
            <span
              :class="!notifying && 'hidden'"
              class="absolute -top-0.5 right-0 z-1 h-2 w-2 rounded-full bg-meta-1"
            >
              <span
                class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-meta-1 opacity-75"
              ></span>
            </span>

            <svg
              class="fill-current duration-300 ease-in-out"
              width="18"
              height="18"
              viewBox="0 0 18 18"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M16.1999 14.9343L15.6374 14.0624C15.5249 13.8937 15.4687 13.7249 15.4687 13.528V7.67803C15.4687 6.01865 14.7655 4.47178 13.4718 3.31865C12.4312 2.39053 11.0812 1.7999 9.64678 1.6874V1.1249C9.64678 0.787402 9.36553 0.478027 8.9999 0.478027C8.6624 0.478027 8.35303 0.759277 8.35303 1.1249V1.65928C8.29678 1.65928 8.24053 1.65928 8.18428 1.6874C4.92178 2.05303 2.4749 4.66865 2.4749 7.79053V13.528C2.44678 13.8093 2.39053 13.9499 2.33428 14.0343L1.7999 14.9343C1.63115 15.2155 1.63115 15.553 1.7999 15.8343C1.96865 16.0874 2.2499 16.2562 2.55928 16.2562H8.38115V16.8749C8.38115 17.2124 8.6624 17.5218 9.02803 17.5218C9.36553 17.5218 9.6749 17.2405 9.6749 16.8749V16.2562H15.4687C15.778 16.2562 16.0593 16.0874 16.228 15.8343C16.3968 15.553 16.3968 15.2155 16.1999 14.9343ZM3.23428 14.9905L3.43115 14.653C3.5999 14.3718 3.68428 14.0343 3.74053 13.6405V7.79053C3.74053 5.31553 5.70928 3.23428 8.3249 2.95303C9.92803 2.78428 11.503 3.2624 12.6562 4.2749C13.6687 5.1749 14.2312 6.38428 14.2312 7.67803V13.528C14.2312 13.9499 14.3437 14.3437 14.5968 14.7374L14.7655 14.9905H3.23428Z"
                fill=""
              />
            </svg>
          </a>

          <!-- Dropdown Start -->
          <div
            x-show="dropdownOpen"
            class="absolute -right-27 mt-2.5 flex h-90 w-75 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark sm:right-0 sm:w-80"
          >
            <div class="px-4.5 py-3">
              <h5 class="text-sm font-medium text-bodydark2">Notification</h5>
            </div>

            <ul class="flex h-auto flex-col overflow-y-auto">
              <li>
                <a
                  class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                  href="#"
                >
                  <p class="text-sm">
                    <span class="text-black dark:text-white"
                      >Edit your information in a swipe</span
                    >
                    Sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim.
                  </p>

                  <p class="text-xs">12 May, 2025</p>
                </a>
              </li>
              <li>
                <a
                  class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                  href="#"
                >
                  <p class="text-sm">
                    <span class="text-black dark:text-white"
                      >It is a long established fact</span
                    >
                    that a reader will be distracted by the readable.
                  </p>

                  <p class="text-xs">24 Feb, 2025</p>
                </a>
              </li>
              <li>
                <a
                  class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                  href="#"
                >
                  <p class="text-sm">
                    <span class="text-black dark:text-white"
                      >There are many variations</span
                    >
                    of passages of Lorem Ipsum available, but the majority have
                    suffered
                  </p>

                  <p class="text-xs">04 Jan, 2025</p>
                </a>
              </li>
              <li>
                <a
                  class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                  href="#"
                >
                  <p class="text-sm">
                    <span class="text-black dark:text-white"
                      >There are many variations</span
                    >
                    of passages of Lorem Ipsum available, but the majority have
                    suffered
                  </p>

                  <p class="text-xs">01 Dec, 2024</p>
                </a>
              </li>
            </ul>
          </div>
          <!-- Dropdown End -->
        </li>
        <!-- Notification Menu Area -->

        <!-- Chat Notification Area -->
        <li
          class="relative"
          x-data="{ dropdownOpen: false, notifying: true }"
          @click.outside="dropdownOpen = false"
        >
          <a
            class="relative flex h-8.5 w-8.5 items-center justify-center rounded-full border-[0.5px] border-stroke bg-gray hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
            href="#"
            @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false"
          >
            <span
              :class="!notifying && 'hidden'"
              class="absolute -right-0.5 -top-0.5 z-1 h-2 w-2 rounded-full bg-meta-1"
            >
              <span
                class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-meta-1 opacity-75"
              ></span>
            </span>

            <svg
              class="fill-current duration-300 ease-in-out"
              width="18"
              height="18"
              viewBox="0 0 18 18"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M10.9688 1.57495H7.03135C3.43135 1.57495 0.506348 4.41558 0.506348 7.90308C0.506348 11.3906 2.75635 13.8375 8.26885 16.3125C8.40947 16.3687 8.52197 16.3968 8.6626 16.3968C8.85947 16.3968 9.02822 16.3406 9.19697 16.2281C9.47822 16.0593 9.64697 15.75 9.64697 15.4125V14.2031H10.9688C14.5688 14.2031 17.522 11.3625 17.522 7.87495C17.522 4.38745 14.5688 1.57495 10.9688 1.57495ZM10.9688 12.9937H9.3376C8.80322 12.9937 8.35322 13.4437 8.35322 13.9781V15.0187C3.6001 12.825 1.74385 10.8 1.74385 7.9312C1.74385 5.14683 4.10635 2.8687 7.03135 2.8687H10.9688C13.8657 2.8687 16.2563 5.14683 16.2563 7.9312C16.2563 10.7156 13.8657 12.9937 10.9688 12.9937Z"
                fill=""
              />
              <path
                d="M5.42812 7.28442C5.0625 7.28442 4.78125 7.56567 4.78125 7.9313C4.78125 8.29692 5.0625 8.57817 5.42812 8.57817C5.79375 8.57817 6.075 8.29692 6.075 7.9313C6.075 7.56567 5.79375 7.28442 5.42812 7.28442Z"
                fill=""
              />
              <path
                d="M9.00015 7.28442C8.63452 7.28442 8.35327 7.56567 8.35327 7.9313C8.35327 8.29692 8.63452 8.57817 9.00015 8.57817C9.33765 8.57817 9.64702 8.29692 9.64702 7.9313C9.64702 7.56567 9.33765 7.28442 9.00015 7.28442Z"
                fill=""
              />
              <path
                d="M12.5719 7.28442C12.2063 7.28442 11.925 7.56567 11.925 7.9313C11.925 8.29692 12.2063 8.57817 12.5719 8.57817C12.9375 8.57817 13.2188 8.29692 13.2188 7.9313C13.2188 7.56567 12.9094 7.28442 12.5719 7.28442Z"
                fill=""
              />
            </svg>
          </a>

          <!-- Dropdown Start -->
          <div
            x-show="dropdownOpen"
            class="absolute -right-16 mt-2.5 flex h-90 w-75 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark sm:right-0 sm:w-80"
          >
            <div class="px-4.5 py-3">
              <h5 class="text-sm font-medium text-bodydark2">Messages</h5>
            </div>

            <ul class="flex h-auto flex-col overflow-y-auto">
              <li>
                <a
                  class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                  href="messages.html"
                >
                  <div class="h-12.5 w-12.5 rounded-full">
                    <img src="src/images/user/user-02.png" alt="User" />
                  </div>

                  <div>
                    <h6 class="text-sm font-medium text-black dark:text-white">
                      Mariya Desoja
                    </h6>
                    <p class="text-sm">I like your confidence 💪</p>
                    <p class="text-xs">2min ago</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                  href="messages.html"
                >
                  <div class="h-12.5 w-12.5 rounded-full">
                    <img src="src/images/user/user-01.png" alt="User" />
                  </div>

                  <div>
                    <h6 class="text-sm font-medium text-black dark:text-white">
                      Robert Jhon
                    </h6>
                    <p class="text-sm">Can you share your offer?</p>
                    <p class="text-xs">10min ago</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                  href="messages.html"
                >
                  <div class="h-12.5 w-12.5 rounded-full">
                    <img src="src/images/user/user-03.png" alt="User" />
                  </div>

                  <div>
                    <h6 class="text-sm font-medium text-black dark:text-white">
                      Henry Dholi
                    </h6>
                    <p class="text-sm">I cam across your profile and...</p>
                    <p class="text-xs">1day ago</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                  href="messages.html"
                >
                  <div class="h-12.5 w-12.5 rounded-full">
                    <img src="src/images/user/user-04.png" alt="User" />
                  </div>

                  <div>
                    <h6 class="text-sm font-medium text-black dark:text-white">
                      Cody Fisher
                    </h6>
                    <p class="text-sm">I’m waiting for you response!</p>
                    <p class="text-xs">5days ago</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                  href="messages.html"
                >
                  <div class="h-12.5 w-12.5 rounded-full">
                    <img src="src/images/user/user-02.png" alt="User" />
                  </div>

                  <div>
                    <h6 class="text-sm font-medium text-black dark:text-white">
                      Mariya Desoja
                    </h6>
                    <p class="text-sm">I like your confidence 💪</p>
                    <p class="text-xs">2min ago</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <!-- Dropdown End -->
        </li>
        <!-- Chat Notification Area -->
      </ul>

      <!-- User Area -->
      <div
        class="relative"
        x-data="{ dropdownOpen: false }"
        @click.outside="dropdownOpen = false"
      >
        <a
          class="flex items-center gap-4"
          href="#"
          @click.prevent="dropdownOpen = ! dropdownOpen"
        >
          <span class="hidden text-right lg:block">
            <span class="block text-sm font-medium text-black dark:text-white"
              >Thomas Anree</span
            >
            <span class="block text-xs font-medium">UX Designer</span>
          </span>

          <span class="h-12 w-12 rounded-full">
            <img src="src/images/user/user-01.png" alt="User" />
          </span>

          <svg
            :class="dropdownOpen && 'rotate-180'"
            class="hidden fill-current sm:block"
            width="12"
            height="8"
            viewBox="0 0 12 8"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
              fill=""
            />
          </svg>
        </a>

        <!-- Dropdown Start -->
        <div
          x-show="dropdownOpen"
          class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
        >
          <ul
            class="flex flex-col gap-5 border-b border-stroke px-6 py-7.5 dark:border-strokedark"
          >
            <li>
              <a
                href="profile.html"
                class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base"
              >
                <svg
                  class="fill-current"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11 9.62499C8.42188 9.62499 6.35938 7.59687 6.35938 5.12187C6.35938 2.64687 8.42188 0.618744 11 0.618744C13.5781 0.618744 15.6406 2.64687 15.6406 5.12187C15.6406 7.59687 13.5781 9.62499 11 9.62499ZM11 2.16562C9.28125 2.16562 7.90625 3.50624 7.90625 5.12187C7.90625 6.73749 9.28125 8.07812 11 8.07812C12.7188 8.07812 14.0938 6.73749 14.0938 5.12187C14.0938 3.50624 12.7188 2.16562 11 2.16562Z"
                    fill=""
                  />
                  <path
                    d="M17.7719 21.4156H4.2281C3.5406 21.4156 2.9906 20.8656 2.9906 20.1781V17.0844C2.9906 13.7156 5.7406 10.9656 9.10935 10.9656H12.925C16.2937 10.9656 19.0437 13.7156 19.0437 17.0844V20.1781C19.0094 20.8312 18.4594 21.4156 17.7719 21.4156ZM4.53748 19.8687H17.4969V17.0844C17.4969 14.575 15.4344 12.5125 12.925 12.5125H9.07498C6.5656 12.5125 4.5031 14.575 4.5031 17.0844V19.8687H4.53748Z"
                    fill=""
                  />
                </svg>
                My Profile
              </a>
            </li>
            <li>
              <a
                href="messages.html"
                class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base"
              >
                <svg
                  class="fill-current"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M17.6687 1.44374C17.1187 0.893744 16.4312 0.618744 15.675 0.618744H7.42498C6.25623 0.618744 5.25935 1.58124 5.25935 2.78437V4.12499H4.29685C3.88435 4.12499 3.50623 4.46874 3.50623 4.91562C3.50623 5.36249 3.84998 5.70624 4.29685 5.70624H5.25935V10.2781H4.29685C3.88435 10.2781 3.50623 10.6219 3.50623 11.0687C3.50623 11.4812 3.84998 11.8594 4.29685 11.8594H5.25935V16.4312H4.29685C3.88435 16.4312 3.50623 16.775 3.50623 17.2219C3.50623 17.6687 3.84998 18.0125 4.29685 18.0125H5.25935V19.25C5.25935 20.4187 6.22185 21.4156 7.42498 21.4156H15.675C17.2218 21.4156 18.4937 20.1437 18.5281 18.5969V3.47187C18.4937 2.68124 18.2187 1.95937 17.6687 1.44374ZM16.9469 18.5625C16.9469 19.2844 16.3625 19.8344 15.6406 19.8344H7.3906C7.04685 19.8344 6.77185 19.5594 6.77185 19.2156V17.875H8.6281C9.0406 17.875 9.41873 17.5312 9.41873 17.0844C9.41873 16.6375 9.07498 16.2937 8.6281 16.2937H6.77185V11.7906H8.6281C9.0406 11.7906 9.41873 11.4469 9.41873 11C9.41873 10.5875 9.07498 10.2094 8.6281 10.2094H6.77185V5.63749H8.6281C9.0406 5.63749 9.41873 5.29374 9.41873 4.84687C9.41873 4.39999 9.07498 4.05624 8.6281 4.05624H6.77185V2.74999C6.77185 2.40624 7.04685 2.13124 7.3906 2.13124H15.6406C15.9844 2.13124 16.2937 2.26874 16.5687 2.50937C16.8094 2.74999 16.9469 3.09374 16.9469 3.43749V18.5625Z"
                    fill=""
                  />
                </svg>
                My Contacts
              </a>
            </li>
            <li>
              <a
                href="settings.html"
                class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base"
              >
                <svg
                  class="fill-current"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M20.8656 8.86874C20.5219 8.49062 20.0406 8.28437 19.525 8.28437H19.4219C19.25 8.28437 19.1125 8.18124 19.0781 8.04374C19.0437 7.90624 18.975 7.80312 18.9406 7.66562C18.8719 7.52812 18.9406 7.39062 19.0437 7.28749L19.1125 7.21874C19.4906 6.87499 19.6969 6.39374 19.6969 5.87812C19.6969 5.36249 19.525 4.88124 19.1469 4.50312L17.8062 3.12812C17.0844 2.37187 15.8469 2.33749 15.0906 3.09374L14.9875 3.16249C14.8844 3.26562 14.7125 3.29999 14.5406 3.23124C14.4031 3.16249 14.2656 3.09374 14.0937 3.05937C13.9219 2.99062 13.8187 2.85312 13.8187 2.71562V2.54374C13.8187 1.47812 12.9594 0.618744 11.8937 0.618744H9.96875C9.45312 0.618744 8.97187 0.824994 8.62812 1.16874C8.25 1.54687 8.07812 2.02812 8.07812 2.50937V2.64687C8.07812 2.78437 7.975 2.92187 7.8375 2.99062C7.76875 3.02499 7.73437 3.02499 7.66562 3.05937C7.52812 3.12812 7.35625 3.09374 7.25312 2.99062L7.18437 2.88749C6.84062 2.50937 6.35937 2.30312 5.84375 2.30312C5.32812 2.30312 4.84687 2.47499 4.46875 2.85312L3.09375 4.19374C2.3375 4.91562 2.30312 6.15312 3.05937 6.90937L3.12812 7.01249C3.23125 7.11562 3.26562 7.28749 3.19687 7.39062C3.12812 7.52812 3.09375 7.63124 3.025 7.76874C2.95625 7.90624 2.85312 7.97499 2.68125 7.97499H2.57812C2.0625 7.97499 1.58125 8.14687 1.20312 8.52499C0.824996 8.86874 0.618746 9.34999 0.618746 9.86562L0.584371 11.7906C0.549996 12.8562 1.40937 13.7156 2.475 13.75H2.57812C2.75 13.75 2.8875 13.8531 2.92187 13.9906C2.99062 14.0937 3.05937 14.1969 3.09375 14.3344C3.12812 14.4719 3.09375 14.6094 2.99062 14.7125L2.92187 14.7812C2.54375 15.125 2.3375 15.6062 2.3375 16.1219C2.3375 16.6375 2.50937 17.1187 2.8875 17.4969L4.22812 18.8719C4.95 19.6281 6.1875 19.6625 6.94375 18.9062L7.04687 18.8375C7.15 18.7344 7.32187 18.7 7.49375 18.7687C7.63125 18.8375 7.76875 18.9062 7.94062 18.9406C8.1125 19.0094 8.21562 19.1469 8.21562 19.2844V19.4219C8.21562 20.4875 9.075 21.3469 10.1406 21.3469H12.0656C13.1312 21.3469 13.9906 20.4875 13.9906 19.4219V19.2844C13.9906 19.1469 14.0937 19.0094 14.2312 18.9406C14.3 18.9062 14.3344 18.9062 14.4031 18.8719C14.575 18.8031 14.7125 18.8375 14.8156 18.9406L14.8844 19.0437C15.2281 19.4219 15.7094 19.6281 16.225 19.6281C16.7406 19.6281 17.2219 19.4562 17.6 19.0781L18.975 17.7375C19.7312 17.0156 19.7656 15.7781 19.0094 15.0219L18.9406 14.9187C18.8375 14.8156 18.8031 14.6437 18.8719 14.5406C18.9406 14.4031 18.975 14.3 19.0437 14.1625C19.1125 14.025 19.25 13.9562 19.3875 13.9562H19.4906H19.525C20.5562 13.9562 21.4156 13.1312 21.45 12.0656L21.4844 10.1406C21.4156 9.72812 21.2094 9.21249 20.8656 8.86874ZM19.8344 12.1C19.8344 12.3062 19.6625 12.4781 19.4562 12.4781H19.3531H19.3187C18.5281 12.4781 17.8062 12.9594 17.5312 13.6469C17.4969 13.75 17.4281 13.8531 17.3937 13.9562C17.0844 14.6437 17.2219 15.5031 17.7719 16.0531L17.8406 16.1562C17.9781 16.2937 17.9781 16.5344 17.8406 16.6719L16.4656 18.0125C16.3625 18.1156 16.2594 18.1156 16.1906 18.1156C16.1219 18.1156 16.0187 18.1156 15.9156 18.0125L15.8469 17.9094C15.2969 17.325 14.4719 17.1531 13.7156 17.4969L13.5781 17.5656C12.8219 17.875 12.3406 18.5625 12.3406 19.3531V19.4906C12.3406 19.6969 12.1687 19.8687 11.9625 19.8687H10.0375C9.83125 19.8687 9.65937 19.6969 9.65937 19.4906V19.3531C9.65937 18.5625 9.17812 17.8406 8.42187 17.5656C8.31875 17.5312 8.18125 17.4625 8.07812 17.4281C7.80312 17.2906 7.52812 17.2562 7.25312 17.2562C6.77187 17.2562 6.29062 17.4281 5.9125 17.8062L5.84375 17.8406C5.70625 17.9781 5.46562 17.9781 5.32812 17.8406L3.9875 16.4656C3.88437 16.3625 3.88437 16.2594 3.88437 16.1906C3.88437 16.1219 3.88437 16.0187 3.9875 15.9156L4.05625 15.8469C4.64062 15.2969 4.8125 14.4375 4.50312 13.75C4.46875 13.6469 4.43437 13.5437 4.36562 13.4406C4.09062 12.7187 3.40312 12.2031 2.6125 12.2031H2.50937C2.30312 12.2031 2.13125 12.0312 2.13125 11.825L2.16562 9.89999C2.16562 9.76249 2.23437 9.69374 2.26875 9.62499C2.30312 9.59062 2.40625 9.52187 2.54375 9.52187H2.64687C3.4375 9.55624 4.15937 9.07499 4.46875 8.35312C4.50312 8.24999 4.57187 8.14687 4.60625 8.04374C4.91562 7.35624 4.77812 6.49687 4.22812 5.94687L4.15937 5.84374C4.02187 5.70624 4.02187 5.46562 4.15937 5.32812L5.53437 3.98749C5.6375 3.88437 5.74062 3.88437 5.80937 3.88437C5.87812 3.88437 5.98125 3.88437 6.08437 3.98749L6.15312 4.09062C6.70312 4.67499 7.52812 4.84687 8.28437 4.53749L8.42187 4.46874C9.17812 4.15937 9.65937 3.47187 9.65937 2.68124V2.54374C9.65937 2.40624 9.72812 2.33749 9.7625 2.26874C9.79687 2.19999 9.9 2.16562 10.0375 2.16562H11.9625C12.1687 2.16562 12.3406 2.33749 12.3406 2.54374V2.68124C12.3406 3.47187 12.8219 4.19374 13.5781 4.46874C13.6812 4.50312 13.8187 4.57187 13.9219 4.60624C14.6437 4.94999 15.5031 4.81249 16.0875 4.26249L16.1906 4.19374C16.3281 4.05624 16.5687 4.05624 16.7062 4.19374L18.0469 5.56874C18.15 5.67187 18.15 5.77499 18.15 5.84374C18.15 5.91249 18.1156 6.01562 18.0469 6.11874L17.9781 6.18749C17.3594 6.70312 17.1875 7.56249 17.4625 8.24999C17.4969 8.35312 17.5312 8.45624 17.6 8.55937C17.875 9.28124 18.5625 9.79687 19.3531 9.79687H19.4562C19.5937 9.79687 19.6625 9.86562 19.7312 9.89999C19.8 9.93437 19.8344 10.0375 19.8344 10.175V12.1Z"
                    fill=""
                  />
                  <path
                    d="M11 6.32498C8.42189 6.32498 6.32501 8.42186 6.32501 11C6.32501 13.5781 8.42189 15.675 11 15.675C13.5781 15.675 15.675 13.5781 15.675 11C15.675 8.42186 13.5781 6.32498 11 6.32498ZM11 14.1281C9.28126 14.1281 7.87189 12.7187 7.87189 11C7.87189 9.28123 9.28126 7.87186 11 7.87186C12.7188 7.87186 14.1281 9.28123 14.1281 11C14.1281 12.7187 12.7188 14.1281 11 14.1281Z"
                    fill=""
                  />
                </svg>
                Account Settings
              </a>
            </li>
          </ul>
          <button
            class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base"
          >
            <svg
              class="fill-current"
              width="22"
              height="22"
              viewBox="0 0 22 22"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.55 5.05312 11.55 4.64062V2.23437C11.55 2.16562 11.5844 2.13124 11.6531 2.13124H15.5375C16.3625 2.13124 17.0156 2.78437 17.0156 3.60937V18.3562C17.0156 19.1812 16.3625 19.8344 15.5375 19.8344H11.6531C11.5844 19.8344 11.55 19.8 11.55 19.7312V17.3594C11.55 16.9469 11.2062 16.6031 10.7594 16.6031C10.3125 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5625 20.0062 18.5625 18.3562V3.64374C18.5625 1.95937 17.1875 0.618744 15.5375 0.618744Z"
                fill=""
              />
              <path
                d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4844C3.36876 10.7938 3.36876 11.275 3.67814 11.5844L7.11564 15.0906C7.25314 15.2281 7.45939 15.3312 7.66564 15.3312C7.87189 15.3312 8.04376 15.2625 8.21564 15.125C8.52501 14.8156 8.52501 14.3344 8.21564 14.025L6.05001 11.7563Z"
                fill=""
              />
            </svg>
            Log Out
          </button>
        </div>
        <!-- Dropdown End -->
      </div>
      <!-- User Area -->
    </div>
  </div>
</header>

        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div
              class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
            >
              <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Sign In
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.html">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Sign In</li>
                </ol>
              </nav>
            </div>
            <!-- Breadcrumb End -->

            <!-- ====== Forms Section Start -->
            <div
              class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
            >
              <div class="flex flex-wrap items-center">
                <div class="hidden w-full xl:block xl:w-1/2">
                  <div class="px-26 py-17.5 text-center">
                    <a class="mb-5.5 inline-block" href="index.html">
                      <img
                        class="hidden dark:block"
                        src="src/images/logo/logo.svg"
                        alt="Logo"
                      />
                      <img
                        class="dark:hidden"
                        src="src/images/logo/logo-dark.svg"
                        alt="Logo"
                      />
                    </a>

                    <p class="font-medium 2xl:px-20">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      suspendisse.
                    </p>

                    <span class="mt-15 inline-block">
                      <img
                        src="src/images/illustration/illustration-03.svg"
                        alt="illustration"
                      />
                    </span>
                  </div>
                </div>
                <div
                  class="w-full border-stroke dark:border-strokedark xl:w-1/2 xl:border-l-2"
                >
                  <div class="w-full p-4 sm:p-12.5 xl:p-17.5">
                    <span class="mb-1.5 block font-medium">Start for free</span>
                    <h2
                      class="mb-9 text-2xl font-bold text-black dark:text-white sm:text-title-xl2"
                    >
                      Sign In to TailAdmin
                    </h2>

                    <form>
                      <div class="mb-4">
                        <label
                          class="mb-2.5 block font-medium text-black dark:text-white"
                          >Email</label
                        >
                        <div class="relative">
                          <input
                            type="email"
                            placeholder="Enter your email"
                            class="w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                          />

                          <span class="absolute right-4 top-4">
                            <svg
                              class="fill-current"
                              width="22"
                              height="22"
                              viewBox="0 0 22 22"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <g opacity="0.5">
                                <path
                                  d="M19.2516 3.30005H2.75156C1.58281 3.30005 0.585938 4.26255 0.585938 5.46567V16.6032C0.585938 17.7719 1.54844 18.7688 2.75156 18.7688H19.2516C20.4203 18.7688 21.4172 17.8063 21.4172 16.6032V5.4313C21.4172 4.26255 20.4203 3.30005 19.2516 3.30005ZM19.2516 4.84692C19.2859 4.84692 19.3203 4.84692 19.3547 4.84692L11.0016 10.2094L2.64844 4.84692C2.68281 4.84692 2.71719 4.84692 2.75156 4.84692H19.2516ZM19.2516 17.1532H2.75156C2.40781 17.1532 2.13281 16.8782 2.13281 16.5344V6.35942L10.1766 11.5157C10.4172 11.6875 10.6922 11.7563 10.9672 11.7563C11.2422 11.7563 11.5172 11.6875 11.7578 11.5157L19.8016 6.35942V16.5688C19.8703 16.9125 19.5953 17.1532 19.2516 17.1532Z"
                                  fill=""
                                />
                              </g>
                            </svg>
                          </span>
                        </div>
                      </div>

                      <div class="mb-6">
                        <label
                          class="mb-2.5 block font-medium text-black dark:text-white"
                          >Re-type Password</label
                        >
                        <div class="relative">
                          <input
                            type="password"
                            placeholder="6+ Characters, 1 Capital letter"
                            class="w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                          />

                          <span class="absolute right-4 top-4">
                            <svg
                              class="fill-current"
                              width="22"
                              height="22"
                              viewBox="0 0 22 22"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <g opacity="0.5">
                                <path
                                  d="M16.1547 6.80626V5.91251C16.1547 3.16251 14.0922 0.825009 11.4797 0.618759C10.0359 0.481259 8.59219 0.996884 7.52656 1.95938C6.46094 2.92188 5.84219 4.29688 5.84219 5.70626V6.80626C3.84844 7.18438 2.33594 8.93751 2.33594 11.0688V17.2906C2.33594 19.5594 4.19219 21.3813 6.42656 21.3813H15.5016C17.7703 21.3813 19.6266 19.525 19.6266 17.2563V11C19.6609 8.93751 18.1484 7.21876 16.1547 6.80626ZM8.55781 3.09376C9.31406 2.40626 10.3109 2.06251 11.3422 2.16563C13.1641 2.33751 14.6078 3.98751 14.6078 5.91251V6.70313H7.38906V5.67188C7.38906 4.70938 7.80156 3.78126 8.55781 3.09376ZM18.1141 17.2906C18.1141 18.7 16.9453 19.8688 15.5359 19.8688H6.46094C5.05156 19.8688 3.91719 18.7344 3.91719 17.325V11.0688C3.91719 9.52189 5.15469 8.28438 6.70156 8.28438H15.2953C16.8422 8.28438 18.1141 9.52188 18.1141 11V17.2906Z"
                                  fill=""
                                />
                                <path
                                  d="M10.9977 11.8594C10.5852 11.8594 10.207 12.2031 10.207 12.65V16.2594C10.207 16.6719 10.5508 17.05 10.9977 17.05C11.4102 17.05 11.7883 16.7063 11.7883 16.2594V12.6156C11.7883 12.2031 11.4102 11.8594 10.9977 11.8594Z"
                                  fill=""
                                />
                              </g>
                            </svg>
                          </span>
                        </div>
                      </div>

                      <div class="mb-5">
                        <input
                          type="submit"
                          value="Sign In"
                          class="w-full cursor-pointer rounded-lg border border-primary bg-primary p-4 font-medium text-white transition hover:bg-opacity-90"
                        />
                      </div>

                      <button
                        class="flex w-full items-center justify-center gap-3.5 rounded-lg border border-stroke bg-gray p-4 font-medium hover:bg-opacity-70 dark:border-strokedark dark:bg-meta-4 dark:hover:bg-opacity-70"
                      >
                        <span>
                          <svg
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <g clip-path="url(#clip0_191_13499)">
                              <path
                                d="M19.999 10.2217C20.0111 9.53428 19.9387 8.84788 19.7834 8.17737H10.2031V11.8884H15.8266C15.7201 12.5391 15.4804 13.162 15.1219 13.7195C14.7634 14.2771 14.2935 14.7578 13.7405 15.1328L13.7209 15.2571L16.7502 17.5568L16.96 17.5774C18.8873 15.8329 19.9986 13.2661 19.9986 10.2217"
                                fill="#4285F4"
                              />
                              <path
                                d="M10.2055 19.9999C12.9605 19.9999 15.2734 19.111 16.9629 17.5777L13.7429 15.1331C12.8813 15.7221 11.7248 16.1333 10.2055 16.1333C8.91513 16.1259 7.65991 15.7205 6.61791 14.9745C5.57592 14.2286 4.80007 13.1801 4.40044 11.9777L4.28085 11.9877L1.13101 14.3765L1.08984 14.4887C1.93817 16.1456 3.24007 17.5386 4.84997 18.5118C6.45987 19.4851 8.31429 20.0004 10.2059 19.9999"
                                fill="#34A853"
                              />
                              <path
                                d="M4.39899 11.9777C4.1758 11.3411 4.06063 10.673 4.05807 9.99996C4.06218 9.32799 4.1731 8.66075 4.38684 8.02225L4.38115 7.88968L1.19269 5.4624L1.0884 5.51101C0.372763 6.90343 0 8.4408 0 9.99987C0 11.5589 0.372763 13.0963 1.0884 14.4887L4.39899 11.9777Z"
                                fill="#FBBC05"
                              />
                              <path
                                d="M10.2059 3.86663C11.668 3.84438 13.0822 4.37803 14.1515 5.35558L17.0313 2.59996C15.1843 0.901848 12.7383 -0.0298855 10.2059 -3.6784e-05C8.31431 -0.000477834 6.4599 0.514732 4.85001 1.48798C3.24011 2.46124 1.9382 3.85416 1.08984 5.51101L4.38946 8.02225C4.79303 6.82005 5.57145 5.77231 6.61498 5.02675C7.65851 4.28118 8.9145 3.87541 10.2059 3.86663Z"
                                fill="#EB4335"
                              />
                            </g>
                            <defs>
                              <clipPath id="clip0_191_13499">
                                <rect width="20" height="20" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        Sign in with Google
                      </button>

                      <div class="mt-6 text-center">
                        <p class="font-medium">
                          Don’t have any account?
                          <a href="signup.html" class="text-primary">Sign Up</a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- ====== Forms Section End -->
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
  <script defer src="bundle.js"></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8625fbd339d75fa0","r":1,"version":"2024.2.4","token":"67f7a278e3374824ae6dd92295d38f77"}' crossorigin="anonymous"></script>
</body>
</html>
