<div>
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav" id="drawer-navigation">
        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
            <ul class="space-y-2">

                <x-admin.menu-item
                    href="/admin/dashboard"
                    label="Dashboard"
                    icon="
                        <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z'/>
                        "
                />

                <x-admin.menu-item
                    href="/admin/about"
                    label="About"
                    icon="
                        <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M18 6H6m12 4H6m12 4H6m12 4H6'/>
                        "
                />

                <x-admin.menu-item
                    href="/admin/student"
                    label="Student"
                    icon="
                        <path stroke='currentColor' stroke-linecap='round' stroke-width='2' d='M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3a2.5 2.5 0 1 1 2-4.5M19.5 17h.5c.6 0 1-.4 1-1a3 3 0 0 0-3-3h-1m0-3a2.5 2.5 0 1 0-2-4.5m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3c0 .6-.4 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z'/>
                        "
                />

                <x-admin.menu-item
                    href="{{ route('admin.classroom') }}"
                    label="Classroom"
                    icon="
                        <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 6h16M4 10h16M4 14h16M4 18h16'/>
                        "
                />

                <x-admin.menu-item
                    href="/admin/subjects"
                    label="Subjects"
                    icon="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                />

                <x-admin.menu-item
                    href="/admin/teachers"
                    label="Teachers"
                    icon="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                />

            </ul>
        </div>
    </aside>
</div>
