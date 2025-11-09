<!-- ===== Header Start ===== -->
<header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none">
    <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
        <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
            <!-- Hamburger Toggle BTN -->
            <button class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden"
                    @click.stop="sidebarToggle = !sidebarToggle">
                <span class="relative block h-5.5 w-5.5 cursor-pointer">
                    <span class="du-block absolute right-0 h-full w-full">
                        <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white"
                              :class="{ '!w-full delay-300': !sidebarToggle }"></span>
                        <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white"
                              :class="{ 'delay-400 !w-full': !sidebarToggle }"></span>
                        <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white"
                              :class="{ '!w-full delay-500': !sidebarToggle }"></span>
                    </span>
                    <span class="absolute right-0 h-full w-full rotate-45">
                        <span class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white"
                              :class="{ '!h-0 !delay-[0]': !sidebarToggle }"></span>
                        <span class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-white"
                              :class="{ '!h-0 !delay-200': !sidebarToggle }"></span>
                    </span>
                </span>
            </button>
            <!-- Hamburger Toggle BTN -->

            <a class="block flex-shrink-0 lg:hidden" href="{{ route('admin.dashboard') }}">
                <div class="flex items-center gap-3">
                    <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                    </svg>
                    <span class="text-xl font-bold text-black dark:text-white">E-Commerce</span>
                </div>
            </a>
        </div>

        <div class="hidden sm:block">
            <form action="#" method="POST">
                <div class="relative">
                    <button class="absolute left-0 top-1/2 -translate-y-1/2">
                        <svg class="fill-body hover:fill-primary dark:fill-bodydark dark:hover:fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.16666 3.33332C5.945 3.33332 3.33332 5.945 3.33332 9.16666C3.33332 12.3883 5.945 15 9.16666 15C12.3883 15 15 12.3883 15 9.16666C15 5.945 12.3883 3.33332 9.16666 3.33332ZM1.66666 9.16666C1.66666 5.02452 5.02452 1.66666 9.16666 1.66666C13.3088 1.66666 16.6667 5.02452 16.6667 9.16666C16.6667 13.3088 13.3088 16.6667 9.16666 16.6667C5.02452 16.6667 1.66666 13.3088 1.66666 9.16666Z" fill=""/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2857 13.2857C13.6112 12.9603 14.1388 12.9603 14.4642 13.2857L18.0892 16.9107C18.4147 17.2362 18.4147 17.7638 18.0892 18.0892C17.7638 18.4147 17.2362 18.4147 16.9107 18.0892L13.2857 14.4642C12.9603 14.1388 12.9603 13.6112 13.2857 13.2857Z" fill=""/>
                        </svg>
                    </button>
                    <input type="text" placeholder="Type to search..." class="w-full bg-transparent pl-9 pr-4 text-black focus:outline-none dark:text-white xl:w-125" />
                </div>
            </form>
        </div>

        <div class="flex items-center gap-3 2xsm:gap-7">
            <ul class="flex items-center gap-2 2xsm:gap-4">
                <!-- Dark Mode Toggler -->
                <li>
                    <label :class="darkMode ? 'bg-primary' : 'bg-stroke'" class="relative m-0 block h-7.5 w-14 rounded-full">
                        <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode" class="dur absolute top-0 z-50 m-0 h-full w-full cursor-pointer opacity-0" />
                        <span :class="darkMode && '!right-1 !translate-x-full'" class="absolute left-1 top-1/2 flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear">
                            <span class="dark:hidden">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.99992 12.6666C10.9455 12.6666 13.3333 10.2789 13.3333 7.33329C13.3333 4.38772 10.9455 1.99996 7.99992 1.99996C5.05435 1.99996 2.66659 4.38772 2.66659 7.33329C2.66659 10.2789 5.05435 12.6666 7.99992 12.6666Z" fill="#969AA1"/>
                                </svg>
                            </span>
                            <span class="hidden dark:inline-block">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.3533 10.62C14.2395 10.6613 14.1209 10.6828 14.0009 10.6828C11.1776 10.6828 8.8828 8.39799 8.8828 5.58465C8.8828 4.31798 9.324 3.11464 10.088 2.17197C10.2542 1.93464 10.2542 1.6333 10.088 1.39597C9.92174 1.15864 9.6304 1.04531 9.36107 1.12264C5.89374 2.05864 3.6004 5.32531 4.13707 8.93464C4.6004 12.0693 7.2004 14.6693 10.3351 15.1326C10.8351 15.2033 11.3362 15.2033 11.8373 15.1326C13.9351 14.8213 15.8204 13.632 16.8537 11.8986C17.0204 11.6613 16.9497 11.3599 16.7484 11.1226C16.5471 10.8853 16.2458 10.8146 16.0084 10.9813C15.4730 11.3599 14.9206 11.632 14.3533 10.62Z" fill="#969AA1"/>
                                </svg>
                            </span>
                        </span>
                    </label>
                </li>
                <!-- Dark Mode Toggler -->

                <!-- Notification Menu Area -->
                <li class="relative" x-data="{ dropdownOpen: false, notifying: true }">
                    <a class="relative flex h-8.5 w-8.5 items-center justify-center rounded-full border-[0.5px] border-stroke bg-gray hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
                       href="#" @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false">
                        <span :class="!notifying && 'hidden'" class="absolute -top-0.5 right-0 z-1 h-2 w-2 rounded-full bg-meta-1">
                            <span class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-meta-1 opacity-75"></span>
                        </span>
                        <svg class="fill-current duration-300 ease-in-out" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.1999 14.9343L15.6374 14.0624C15.5249 13.8937 15.4687 13.7249 15.4687 13.528V10.3218C15.4687 6.47803 12.8562 3.25928 9.01245 2.6968V2.05303C9.01245 1.51553 8.58745 1.06228 8.04995 1.06228C7.51245 1.06228 7.08745 1.48728 7.08745 2.05303V2.6968C3.24995 3.25928 0.637451 6.47803 0.637451 10.3218V13.528C0.637451 13.7249 0.581201 13.8937 0.468701 14.0624L-0.0687988 14.9343C-0.2062988 15.1593 -0.0687988 15.4405 0.2062012 15.4405H5.29995C5.29995 16.6562 6.24995 17.6062 7.49995 17.6062C8.74995 17.6062 9.69995 16.6562 9.69995 15.4405H14.7937C15.0687 15.4405 15.2062 15.1593 16.1999 14.9343ZM8.7562 15.4405C8.7562 15.9405 8.39995 16.2968 7.89995 16.2968C7.39995 16.2968 7.0437 15.9405 7.0437 15.4405H8.7562Z" fill=""/>
                        </svg>
                    </a>

                    <!-- Dropdown Start -->
                    <div x-show="dropdownOpen" @click.outside="dropdownOpen = false" x-transition
                         class="absolute -right-27 mt-2.5 flex h-90 w-75 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark sm:right-0 sm:w-80">
                        <div class="px-4.5 py-3">
                            <h5 class="text-sm font-medium text-bodydark2">Notification</h5>
                        </div>

                        <ul class="flex h-auto flex-col overflow-y-auto">
                            <li>
                                <a class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4" href="#">
                                    <p class="text-sm">
                                        <span class="text-black dark:text-white">Edit your information in a swipe</span>
                                        Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                    </p>
                                    <p class="text-xs">12 May, 2025</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Dropdown End -->
                </li>
                <!-- Notification Menu Area -->

                <!-- User Area -->
                <li class="relative" x-data="{ dropdownOpen: false }">
                    <a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
                        <span class="hidden text-right lg:block">
                            <span class="block text-sm font-medium text-black dark:text-white">{{ auth()->user()->name ?? 'Admin User' }}</span>
                            <span class="block text-xs">{{ ucfirst(auth()->user()->role ?? 'admin') }}</span>
                        </span>

                        <span class="h-12 w-12 rounded-full">
                            <img src="{{ asset('images/user/user-01.png') }}" alt="User" class="h-full w-full rounded-full object-cover" />
                        </span>

                        <svg class="hidden fill-current sm:block" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z" fill=""/>
                        </svg>
                    </a>

                    <!-- Dropdown Start -->
                    <div x-show="dropdownOpen" @click.outside="dropdownOpen = false" x-transition
                         class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <ul class="flex flex-col gap-5 border-b border-stroke px-6 py-7.5 dark:border-strokedark">
                            <li>
                                <a href="#" class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                    <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 9.62499C8.42188 9.62499 6.35938 7.59687 6.35938 5.12187C6.35938 2.64687 8.42188 0.618744 11 0.618744C13.5781 0.618744 15.6406 2.64687 15.6406 5.12187C15.6406 7.59687 13.5781 9.62499 11 9.62499ZM11 2.16562C9.28125 2.16562 7.90625 3.50624 7.90625 5.12187C7.90625 6.73749 9.28125 8.07812 11 8.07812C12.7188 8.07812 14.0938 6.73749 14.0938 5.12187C14.0938 3.50624 12.7188 2.16562 11 2.16562Z" fill=""/>
                                        <path d="M17.7719 21.4156H4.2281C3.5406 21.4156 2.9906 20.8656 2.9906 20.1781V17.0844C2.9906 13.7156 5.7406 10.9656 9.10935 10.9656H12.925C16.2937 10.9656 19.0437 13.7156 19.0437 17.0844V20.1781C19.0437 20.8312 18.4594 21.4156 17.7719 21.4156ZM4.53748 19.8687H17.4969V17.0844C17.4969 14.575 15.4344 12.5125 12.925 12.5125H9.07498C6.5656 12.5125 4.5031 14.575 4.5031 17.0844V19.8687H4.53748Z" fill=""/>
                                    </svg>
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                    <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.6687 1.44374C17.1187 0.893744 16.4312 0.618744 15.675 0.618744H7.42498C6.25623 0.618744 5.25935 1.58124 5.25935 2.78437V4.12499H4.29685C3.88435 4.12499 3.50623 4.46874 3.50623 4.91562C3.50623 5.36249 3.84998 5.70624 4.29685 5.70624H5.25935V10.2781H4.29685C3.88435 10.2781 3.50623 10.6219 3.50623 11.0687C3.50623 11.4812 3.84998 11.8594 4.29685 11.8594H5.25935V16.4312H4.29685C3.88435 16.4312 3.50623 16.775 3.50623 17.2219C3.50623 17.6687 3.84998 18.0125 4.29685 18.0125H5.25935V19.25C5.25935 20.4531 6.22185 21.4156 7.42498 21.4156H15.675C17.2218 21.4156 18.4937 20.1437 18.4937 18.5969V3.47187C18.4937 2.68124 18.2187 1.95937 17.6687 1.44374ZM16.9469 18.5969C16.9469 19.2844 16.3625 19.8344 15.675 19.8344H7.42498C7.04685 19.8344 6.80623 19.5937 6.80623 19.25V2.78437C6.80623 2.40624 7.04685 2.16562 7.42498 2.16562H15.675C16.0531 2.16562 16.4312 2.37187 16.6718 2.64687C16.9125 2.92187 16.9469 3.23437 16.9469 3.47187V18.5969Z" fill=""/>
                                        <path d="M14.3656 7.98126C13.9875 7.98126 13.6094 8.32501 13.6094 8.77189V10.2469C13.6094 10.6594 13.9531 11.0375 14.3656 11.0375C14.8125 11.0375 15.1563 10.6937 15.1563 10.2469V8.77189C15.1563 8.32501 14.8125 7.98126 14.3656 7.98126Z" fill=""/>
                                    </svg>
                                    My Contacts
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                    <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.8656 8.86874C20.5219 8.49062 20.0406 8.28437 19.525 8.28437H19.4219C19.25 8.28437 19.1125 8.18124 19.0781 8.04374C19.0437 7.90624 18.975 7.80312 18.9406 7.66562C18.8719 7.52812 18.9406 7.39062 19.0437 7.28749L19.1125 7.21874C19.4906 6.84062 19.6969 6.35937 19.6969 5.84374C19.6969 5.32812 19.525 4.84687 19.1125 4.46874L17.5656 2.92187C16.7656 2.12187 15.4781 2.12187 14.6781 2.92187L14.6094 2.99062C14.5062 3.09374 14.3687 3.16249 14.2312 3.09374C14.0937 3.05937 13.9906 2.99062 13.8531 2.95624C13.7156 2.92187 13.6125 2.78437 13.6125 2.61249V2.50937C13.6125 1.47812 12.7781 0.643744 11.7469 0.643744H9.65935C8.62809 0.643744 7.79372 1.47812 7.79372 2.50937V2.61249C7.79372 2.78437 7.69059 2.92187 7.55309 2.95624C7.41559 2.99062 7.31247 3.05937 7.17497 3.09374C7.03747 3.16249 6.89997 3.09374 6.79685 2.99062L6.72809 2.92187C5.92809 2.12187 4.64059 2.12187 3.84059 2.92187L2.29372 4.46874C1.8781 4.84687 1.70622 5.32812 1.70622 5.84374C1.70622 6.35937 1.8781 6.84062 2.29372 7.21874L2.36247 7.28749C2.46559 7.39062 2.53434 7.52812 2.46559 7.66562C2.43122 7.80312 2.36247 7.90624 2.32809 8.04374C2.29372 8.18124 2.15622 8.28437 1.98434 8.28437H1.8781C1.36247 8.28437 0.881224 8.49062 0.503099 8.86874C0.124974 9.24687 -0.0812756 9.72812 -0.0812756 10.2437V12.3312C-0.0812756 13.3625 0.752974 14.1969 1.78434 14.1969H1.8781C2.04997 14.1969 2.18747 14.3 2.22184 14.4375C2.25622 14.575 2.32497 14.6781 2.35934 14.8156C2.42809 14.9531 2.35934 15.0906 2.25622 15.1937L2.1781 15.2625C1.79997 15.6406 1.59372 16.1219 1.59372 16.6375C1.59372 17.1531 1.76559 17.6344 2.1781 18.0125L3.72497 19.5594C4.52497 20.3594 5.81247 20.3594 6.61247 19.5594L6.6781 19.4906C6.78122 19.3875 6.91872 19.3187 7.05622 19.3875C7.19372 19.4219 7.29685 19.4906 7.43434 19.525C7.57184 19.5594 7.67497 19.6969 7.67497 19.8687V19.9719C7.67497 21.0031 8.50934 21.8375 9.54059 21.8375H11.628C12.6594 21.8375 13.4937 21.0031 13.4937 19.9719V19.8687C13.4937 19.6969 13.5969 19.5594 13.7344 19.525C13.8719 19.4906 13.975 19.4219 14.1125 19.3875C14.25 19.3187 14.3875 19.3875 14.4906 19.4906L14.5594 19.5594C14.9594 19.9594 15.4719 20.1656 16.0187 20.1656C16.5656 20.1656 17.0781 19.9594 17.4781 19.5594L19.025 18.0125C19.4406 17.6344 19.6125 17.1531 19.6125 16.6375C19.6125 16.1219 19.4406 15.6406 19.025 15.2625L18.9562 15.1937C18.8531 15.0906 18.7844 14.9531 18.8531 14.8156C18.8875 14.6781 18.9562 14.575 18.9906 14.4375C19.025 14.3 19.1625 14.1969 19.3344 14.1969H19.4375C20.4687 14.1969 21.3031 13.3625 21.3031 12.3312V10.2437C21.3031 9.72812 21.0969 9.24687 20.8656 8.86874ZM19.7562 12.3312C19.7562 12.5031 19.6187 12.6406 19.4469 12.6406H19.3437C18.5437 12.6406 17.8156 13.1219 17.6437 13.8844C17.5406 14.3656 17.6437 14.8469 17.9187 15.2594C18.0562 15.4656 18.0562 15.7406 17.8844 15.9469L16.3375 17.4937C16.2344 17.5969 16.0625 17.5969 15.9594 17.4937L15.8906 17.425C15.4781 17.15 14.9969 17.0469 14.5156 17.15C13.7531 17.3219 13.2719 18.05 13.2719 18.85V18.9531C13.2719 19.125 13.1344 19.2625 12.9625 19.2625H10.875C10.7031 19.2625 10.5656 19.125 10.5656 18.9531V18.85C10.5656 18.05 10.0844 17.3219 9.32184 17.15C8.84059 17.0469 8.35934 17.15 7.94684 17.425L7.87809 17.4937C7.77497 17.5969 7.60309 17.5969 7.49997 17.4937L5.95309 15.9469C5.84997 15.8437 5.84997 15.6719 5.95309 15.5687L6.02184 15.5C6.29684 15.0875 6.39997 14.6062 6.29684 14.125C6.12497 13.3625 5.39684 12.8812 4.59684 12.8812H4.49372C4.32184 12.8812 4.18434 12.7437 4.18434 12.5719V10.4844C4.18434 10.3125 4.32184 10.175 4.49372 10.175H4.59684C5.39684 10.175 6.12497 9.69374 6.29684 8.93124C6.39997 8.44999 6.29684 7.96874 6.02184 7.55624C5.88434 7.34999 5.88434 7.07499 6.05622 6.86874L7.60309 5.32187C7.70622 5.21874 7.87809 5.21874 7.98122 5.32187L8.04997 5.39062C8.46247 5.66562 8.94372 5.76874 9.42497 5.66562C10.1875 5.49374 10.6687 4.76562 10.6687 3.96562V3.86249C10.6687 3.69062 10.8062 3.55312 10.9781 3.55312H13.0656C13.2375 3.55312 13.375 3.69062 13.375 3.86249V3.96562C13.375 4.76562 13.8562 5.49374 14.6187 5.66562C15.1 5.76874 15.5812 5.66562 15.9937 5.39062L16.0625 5.32187C16.1656 5.21874 16.3375 5.21874 16.4406 5.32187L17.9875 6.86874C18.0906 6.97187 18.0906 7.14374 17.9875 7.24687L17.9187 7.31562C17.6437 7.72812 17.5406 8.20937 17.6437 8.69062C17.8156 9.45312 18.5437 9.93437 19.3437 9.93437H19.4469C19.6187 9.93437 19.7562 10.0719 19.7562 10.2437V12.3312Z" fill=""/>
                                        <path d="M11 6.32812C8.28125 6.32812 6.0625 8.54687 6.0625 11.2656C6.0625 13.9844 8.28125 16.2031 11 16.2031C13.7188 16.2031 15.9375 13.9844 15.9375 11.2656C15.9375 8.54687 13.7188 6.32812 11 6.32812ZM11 14.6562C9.14062 14.6562 7.60937 13.125 7.60937 11.2656C7.60937 9.40625 9.14062 7.875 11 7.875C12.8594 7.875 14.3906 9.40625 14.3906 11.2656C14.3906 13.125 12.8594 14.6562 11 14.6562Z" fill=""/>
                                    </svg>
                                    Account Settings
                                </a>
                            </li>
                        </ul>
                        <button class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.5156 5.05312 11.5156 4.64062V2.23437C11.5156 2.16562 11.5844 2.09687 11.6531 2.09687H15.5375C16.3625 2.09687 17.0156 2.75 17.0156 3.575V18.425C17.0156 19.25 16.3625 19.9031 15.5375 19.9031H11.6531C11.5844 19.9031 11.5156 19.8344 11.5156 19.7656V17.3594C11.5156 16.9469 11.1719 16.6031 10.7594 16.6031C10.3469 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5844 20.0187 18.5844 18.3344V3.66562C18.5844 1.98124 17.2219 0.618744 15.5375 0.618744Z" fill=""/>
                                <path d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4156C3.36876 10.725 3.36876 11.2063 3.67814 11.5156L7.11564 14.9531C7.27001 15.1075 7.49376 15.1844 7.71751 15.1844C7.94126 15.1844 8.16501 15.1075 8.31939 14.9531C8.62876 14.6438 8.62876 14.1625 8.31939 13.8531L6.05001 11.7563Z" fill=""/>
                            </svg>
                            Log Out
                        </button>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                    <!-- Dropdown End -->
                </li>
                <!-- User Area -->
            </ul>
        </div>
    </div>
</header>
<!-- ===== Header End ===== -->