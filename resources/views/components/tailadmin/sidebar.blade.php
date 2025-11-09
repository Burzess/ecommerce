<!-- ===== Sidebar Start ===== -->
<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'" 
       class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0" 
       @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->
    <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
        <a href="{{ route('admin.dashboard') }}">
            <div class="flex items-center gap-3">
                <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                </svg>
                <span class="text-xl font-bold text-white">E-Commerce</span>
            </div>
        </a>

        <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z" fill=""/>
            </svg>
        </button>
    </div>
    <!-- SIDEBAR HEADER -->

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <!-- Sidebar Menu -->
        <nav class="mt-5 py-4 px-4 lg:mt-9 lg:px-6" x-data="{selected: $persist('Dashboard')}">
            <!-- Menu Group -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-semibold text-bodydark2">MENU</h3>

                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Menu Item Dashboard -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                           href="{{ route('admin.dashboard') }}"
                           :class="page === 'admin.dashboard' && 'bg-graydark dark:bg-meta-4'">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299Z" fill=""/>
                                <path d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299Z" fill=""/>
                                <path d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822Z" fill=""/>
                                <path d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822Z" fill=""/>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <!-- Menu Item Dashboard -->

                    <!-- Menu Item Products -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                           href="{{ route('admin.products.index') }}"
                           :class="page.includes('products') && 'bg-graydark dark:bg-meta-4'">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.7499 2.9812H14.2874V2.36245C14.2874 2.02495 14.0062 1.71869 13.6687 1.71869C13.3312 1.71869 13.0499 1.99995 13.0499 2.36245V2.9812H4.72803V2.36245C4.72803 2.02495 4.44678 1.71869 4.10928 1.71869C3.77178 1.71869 3.49053 1.99995 3.49053 2.36245V2.9812H1.94678C1.0781 2.9812 0.361816 3.6687 0.361816 4.56245V14.625C0.361816 15.5187 1.04928 16.2062 1.94678 16.2062H15.7499C16.6437 16.2062 17.3312 15.5187 17.3312 14.625V4.56245C17.3312 3.6687 16.6437 2.9812 15.7499 2.9812ZM1.59928 5.81245C1.59928 5.47495 1.8343 5.2687 2.1718 5.2687H15.5562C15.8937 5.2687 16.1562 5.47495 16.1562 5.81245V7.08745H1.59928V5.81245ZM1.59928 14.625V8.32495H16.1562V14.625C16.1562 14.9625 15.8937 15.2 15.5562 15.2H2.1718C1.8343 15.2 1.59928 14.9625 1.59928 14.625Z" fill=""/>
                                <path d="M3.21553 9.64062H4.40928C4.7468 9.64062 5.00928 9.37812 5.00928 9.04062C5.00928 8.70312 4.7468 8.44062 4.40928 8.44062H3.21553C2.87803 8.44062 2.61553 8.70312 2.61553 9.04062C2.61553 9.37812 2.87803 9.64062 3.21553 9.64062Z" fill=""/>
                                <path d="M3.21553 11.5781H6.1593C6.49678 11.5781 6.7593 11.3156 6.7593 10.9781C6.7593 10.6406 6.49678 10.3781 6.1593 10.3781H3.21553C2.87803 10.3781 2.61553 10.6406 2.61553 10.9781C2.61553 11.3156 2.87803 11.5781 3.21553 11.5781Z" fill=""/>
                            </svg>
                            Products
                        </a>
                    </li>
                    <!-- Menu Item Products -->

                    <!-- Menu Item Orders -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                           href="#"
                           :class="page.includes('orders') && 'bg-graydark dark:bg-meta-4'">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.43425 7.5093H2.278C2.44675 7.5093 2.55925 7.3968 2.58737 7.31243L2.98112 6.32805H5.90612L6.27175 7.31243C6.328 7.48118 6.46862 7.5093 6.58112 7.5093H7.453C7.59362 7.5093 7.67812 7.42493 7.67812 7.28431C7.67812 7.25618 7.67812 7.22805 7.65 7.1999L6.46862 3.94681C6.44050 3.85055 6.35612 3.78243 6.25925 3.78243H2.508C2.41175 3.78243 2.32737 3.85055 2.299 3.94681L1.11762 7.1999C1.08949 7.22805 1.08949 7.25618 1.08949 7.28431C1.08949 7.42493 1.17387 7.5093 1.43425 7.5093ZM2.83237 5.06555H5.90612L6.10425 5.59055H2.6624L2.83237 5.06555Z" fill=""/>
                                <path d="M16.3999 2.93743H10.3124C9.8624 2.93743 9.49678 3.3031 9.49678 3.75306C9.49678 4.20306 9.8624 4.56868 10.3124 4.56868H15.7687L15.0281 10.1437C14.9718 10.5656 14.6343 10.8468 14.2124 10.8468H7.95306C7.50306 10.8468 7.13744 11.2125 7.13744 11.6625C7.13744 12.1125 7.50306 12.4781 7.95306 12.4781H14.2124C15.3374 12.4781 16.3437 11.6343 16.5124 10.5375L17.2812 4.79056C17.3374 4.45306 17.2249 4.11556 16.9999 3.89056C16.7749 3.69243 16.4937 3.59618 16.1562 3.59618H16.3999V2.93743Z" fill=""/>
                            </svg>
                            Orders
                        </a>
                    </li>
                    <!-- Menu Item Orders -->

                    <!-- Menu Item Users -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                           href="#"
                           :class="page.includes('users') && 'bg-graydark dark:bg-meta-4'">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z" fill=""/>
                                <path d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5031 1.71582 14.5125V16.875C1.71582 17.2125 1.99707 17.4938 2.33457 17.4938C2.67207 17.4938 2.95332 17.2125 2.95332 16.875V14.5125C2.95332 12.2188 4.87832 10.2938 7.17207 10.2938H10.8283C13.1221 10.2938 15.0471 12.2188 15.0471 14.5125V16.875C15.0471 17.2125 15.3283 17.4938 15.6658 17.4938C16.0033 17.4938 16.2846 17.2125 16.2846 16.875V14.5125C16.2846 11.5031 13.8377 9.05627 10.8283 9.05627Z" fill=""/>
                            </svg>
                            Users
                        </a>
                    </li>
                    <!-- Menu Item Users -->
                </ul>
            </div>

            <!-- Others Group -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-semibold text-bodydark2">OTHERS</h3>

                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Menu Item Settings -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                           href="#"
                           :class="page.includes('settings') && 'bg-graydark dark:bg-meta-4'">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299Z" fill=""/>
                                <path d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299Z" fill=""/>
                                <path d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822Z" fill=""/>
                                <path d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822Z" fill=""/>
                            </svg>
                            Settings
                        </a>
                    </li>
                    <!-- Menu Item Settings -->

                    <!-- Menu Item Logout -->
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4">
                                <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.1313 0.84375H7.6875C6.63 0.84375 5.76562 1.70812 5.76562 2.76562V6.1875C5.76562 6.525 6.0375 6.79688 6.375 6.79688C6.7125 6.79688 6.98438 6.525 6.98438 6.1875V2.76562C6.98438 2.38125 7.30312 2.0625 7.6875 2.0625H10.1313C10.5156 2.0625 10.8344 2.38125 10.8344 2.76562V15.2344C10.8344 15.6187 10.5156 15.9375 10.1313 15.9375H7.6875C7.30312 15.9375 6.98438 15.6187 6.98438 15.2344V11.8125C6.98438 11.475 6.7125 11.2031 6.375 11.2031C6.0375 11.2031 5.76562 11.475 5.76562 11.8125V15.2344C5.76562 16.2919 6.63 17.1562 7.6875 17.1562H10.1313C11.1888 17.1562 12.0531 16.2919 12.0531 15.2344V2.76562C12.0531 1.70812 11.1888 0.84375 10.1313 0.84375Z" fill=""/>
                                    <path d="M14.2219 8.15625L11.7781 5.7125C11.5312 5.46562 11.1375 5.46562 10.8906 5.7125C10.6437 5.95937 10.6437 6.35312 10.8906 6.6L12.5344 8.24375H2.8125C2.475 8.24375 2.20312 8.51562 2.20312 8.85312C2.20312 9.19062 2.475 9.4625 2.8125 9.4625H12.5344L10.8906 11.1062C10.6437 11.3531 10.6437 11.7469 10.8906 11.9937C11.0156 12.1187 11.175 12.1812 11.3344 12.1812C11.4937 12.1812 11.6531 12.1187 11.7781 11.9937L14.2219 9.55C14.4687 9.30312 14.4687 8.90937 14.2219 8.15625Z" fill=""/>
                                </svg>
                                Logout
                            </button>
                        </form>
                    </li>
                    <!-- Menu Item Logout -->
                </ul>
            </div>
        </nav>
        <!-- Sidebar Menu -->
    </div>
</aside>
<!-- ===== Sidebar End ===== -->