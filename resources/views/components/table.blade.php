<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div
        class="bg-yellow-100 px-4 py-2 w-fit mx-auto mb-4 text-sm text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100 rounded-lg shadow-sm text-center">
        <p><span class="font-semibold">This is a demo to showcase <a href="https://inertiaui.com" target="_blank"
                                                                     class="font-bold underline">Inertia Table</a>.</span>
            The data will be reset every 30 minutes.</p></div>
    <div class="it-wrapper relative"><!---->
        <fieldset class="min-w-0 space-y-4 transition-opacity">
            <div class="it-topbar flex flex-col justify-between md:flex-row md:items-center md:space-x-4"><input
                    type="text"
                    class="it-text-input rounded-md border-gray-300 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-900 dark:text-zinc-300 dark:focus:border-blue-400 dark:focus:ring-blue-400 w-full md:max-w-md"
                    autofocus="" placeholder="Search...">
                <div class="mt-4 flex gap-4 md:mt-0">
                    <div data-headlessui-state="" class="it-dropdown it-actions-dropdown">
                        <button id="headlessui-menu-button-1" type="button" aria-haspopup="menu" aria-expanded="false"
                                data-headlessui-state="">
                            <div type="button" disabled="false"
                                 class="it-button inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-gray-300 bg-white text-gray-700 hover:text-gray-500 focus:ring-gray-500 hover:bg-gray-50 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-900 dark:text-zinc-300 dark:hover:bg-zinc-700 dark:focus:ring-offset-zinc-800 it-dropdown-button w-full">
                                <!---->
                                <div class="mr-2 size-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.867 19.125h.008v.008h-.008v-.008Z"></path>
                                    </svg>
                                </div>
                                <span>Actions</span></div>
                        </button>
                    </div><!---->
                    <div data-headlessui-state="" class="it-dropdown it-add-filter-dropdown">
                        <button id="headlessui-menu-button-2" type="button" aria-haspopup="menu" aria-expanded="false"
                                data-headlessui-state="">
                            <div type="button" disabled="false"
                                 class="it-button inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-gray-300 bg-white text-gray-700 hover:text-gray-500 focus:ring-gray-500 hover:bg-gray-50 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-900 dark:text-zinc-300 dark:hover:bg-zinc-700 dark:focus:ring-offset-zinc-800 it-dropdown-button w-full">
                                <!---->
                                <div class="mr-2 size-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z"></path>
                                    </svg>
                                </div>
                                <span>Filters</span></div>
                        </button>
                    </div>
                    <div data-headlessui-state="" class="it-dropdown it-toggle-column-dropdown">
                        <button id="headlessui-menu-button-3" type="button" aria-haspopup="menu" aria-expanded="false"
                                data-headlessui-state="">
                            <div type="button" disabled="false"
                                 class="it-button inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-gray-300 bg-white text-gray-700 hover:text-gray-500 focus:ring-gray-500 hover:bg-gray-50 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-900 dark:text-zinc-300 dark:hover:bg-zinc-700 dark:focus:ring-offset-zinc-800 it-dropdown-button w-full">
                                <!---->
                                <div class="mr-2 size-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    </svg>
                                </div>
                                <span>Columns</span></div>
                        </button>
                    </div>
                </div>
            </div><!---->
            <div class="rounded-md border dark:border-zinc-700">
                <div class="relative w-full overflow-x-auto overflow-y-hidden rounded-md dark:bg-zinc-900">
                    <table class="it-table w-full caption-bottom text-left transition-opacity dark:text-zinc-300">
                        <thead class="it-table-head">
                        <tr class="border-b transition-colors hover:bg-gray-100/50 dark:border-zinc-700 dark:hover:bg-zinc-900/50">
                            <th class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-all-checkbox"
                                                                 value="*"></th>
                            <th class="h-10 px-2 align-middle text-sm font-medium text-gray-500 dark:bg-zinc-900 dark:text-zinc-400">
                                <div class="flex items-center justify-start"><span class="font-semibold">ID</span></div>
                            </th>
                            <th class="h-10 px-2 align-middle text-sm font-medium text-gray-500 dark:bg-zinc-900 dark:text-zinc-400">
                                <div class="flex items-center justify-start">
                                    <div class="-ml-3">
                                        <div data-headlessui-state="" class="it-dropdown it-table-column-dropdown">
                                            <button id="headlessui-menu-button-4" type="button" aria-haspopup="menu"
                                                    aria-expanded="false" data-headlessui-state="">
                                                <div
                                                    class="inline-flex h-8 items-center justify-center whitespace-nowrap rounded-md px-3 font-semibold transition-colors hover:bg-gray-100 focus-visible:outline-none focus-visible:ring-1 dark:hover:bg-zinc-800 dark:focus-visible:ring-zinc-500 bg-gray-50 ring-1 ring-gray-300 dark:bg-zinc-800 dark:ring-zinc-500">
                                                    <span>Name</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="ml-2 size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <th class="h-10 px-2 align-middle text-sm font-medium text-gray-500 dark:bg-zinc-900 dark:text-zinc-400"
                                style="display: none;">
                                <div class="flex items-center justify-start">
                                    <div class="-ml-3">
                                        <div data-headlessui-state="" class="it-dropdown it-table-column-dropdown">
                                            <button id="headlessui-menu-button-5" type="button" aria-haspopup="menu"
                                                    aria-expanded="false" data-headlessui-state="">
                                                <div
                                                    class="inline-flex h-8 items-center justify-center whitespace-nowrap rounded-md px-3 font-semibold transition-colors hover:bg-gray-100 focus-visible:outline-none focus-visible:ring-1 dark:hover:bg-zinc-800 dark:focus-visible:ring-zinc-500">
                                                    <span>Company</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="ml-2 size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <th class="h-10 px-2 align-middle text-sm font-medium text-gray-500 dark:bg-zinc-900 dark:text-zinc-400">
                                <div class="flex items-center justify-start">
                                    <div class="-ml-3">
                                        <div data-headlessui-state="" class="it-dropdown it-table-column-dropdown">
                                            <button id="headlessui-menu-button-6" type="button" aria-haspopup="menu"
                                                    aria-expanded="false" data-headlessui-state="">
                                                <div
                                                    class="inline-flex h-8 items-center justify-center whitespace-nowrap rounded-md px-3 font-semibold transition-colors hover:bg-gray-100 focus-visible:outline-none focus-visible:ring-1 dark:hover:bg-zinc-800 dark:focus-visible:ring-zinc-500">
                                                    <span>Login Count</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="ml-2 size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <th class="h-10 px-2 align-middle text-sm font-medium text-gray-500 dark:bg-zinc-900 dark:text-zinc-400">
                                <div class="flex items-center justify-start">
                                    <div class="-ml-3">
                                        <div data-headlessui-state="" class="it-dropdown it-table-column-dropdown">
                                            <button id="headlessui-menu-button-7" type="button" aria-haspopup="menu"
                                                    aria-expanded="false" data-headlessui-state="">
                                                <div
                                                    class="inline-flex h-8 items-center justify-center whitespace-nowrap rounded-md px-3 font-semibold transition-colors hover:bg-gray-100 focus-visible:outline-none focus-visible:ring-1 dark:hover:bg-zinc-800 dark:focus-visible:ring-zinc-500">
                                                    <span>Is Admin</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="ml-2 size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <th class="h-10 px-2 align-middle text-sm font-medium text-gray-500 dark:bg-zinc-900 dark:text-zinc-400"
                                style="display: none;">
                                <div class="flex items-center justify-start">
                                    <div class="-ml-3">
                                        <div data-headlessui-state="" class="it-dropdown it-table-column-dropdown">
                                            <button id="headlessui-menu-button-8" type="button" aria-haspopup="menu"
                                                    aria-expanded="false" data-headlessui-state="">
                                                <div
                                                    class="inline-flex h-8 items-center justify-center whitespace-nowrap rounded-md px-3 font-semibold transition-colors hover:bg-gray-100 focus-visible:outline-none focus-visible:ring-1 dark:hover:bg-zinc-800 dark:focus-visible:ring-zinc-500">
                                                    <span>Email Verified At</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="ml-2 size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="it-table-body [&amp;_tr:last-child]:border-0">
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="418"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>418</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Abbigail Kuhlman</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Fadel, Brown and Monahan</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>567</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="152"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>152</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Abby Keebler</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Wolf, Mills and Stamm</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>695</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="214"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>214</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Abe Lesch</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Wilderman Inc</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>2431</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Yes</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="437"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>437</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Abigail Kassulke</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Farrell, Adams and Mohr</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>582</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="442"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>442</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Adalberto Kreiger</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Hodkiewicz Ltd</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>1300</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="292"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>292</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Adalberto Pfeffer</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Schmeler LLC</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>1883</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="346"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>346</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Addie Tremblay</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Wolf, Mills and Stamm</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>2110</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="313"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>313</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Adolfo Konopelski</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Jakubowski Group</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>2495</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="72"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>72</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Agustin Turcotte</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Fadel, Brown and Monahan</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>1777</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="70"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>70</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Alberta Ruecker</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Wilderman Inc</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>54</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="332"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>332</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Albina Kulas</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Hahn-Carter</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>879</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="114"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>114</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Aleen Kunze MD</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Harber, Grimes and VonRueden</span>
                                </div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>1100</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Yes</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="79"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>79</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Alexandro McDermott</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Howe PLC</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>1036</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Yes</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="59"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>59</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Alfred Wilkinson</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Ullrich-Tremblay</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>685</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-gray-100/50 data-[state=selected]:bg-gray-100 dark:border-zinc-700 dark:hover:bg-zinc-950 dark:data-[state=selected]:bg-zinc-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                                                 class="it-checkbox-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-zinc-800 it-toggle-item-checkbox"
                                                                 value="291"></td>
                            <td data-column="id" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>291</span></div>
                            </td>
                            <td data-column="name" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>Alvera Lemke Jr.</span></div>
                            </td>
                            <td data-column="company.name" class="whitespace-pre p-2 align-middle dark:text-zinc-300"
                                style="display: none;">
                                <div class="flex items-center justify-start"><span>Simonis-Robel</span></div>
                            </td>
                            <td data-column="login_count" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>733</span></div>
                            </td>
                            <td data-column="is_admin" class="whitespace-pre p-2 align-middle dark:text-zinc-300">
                                <div class="flex items-center justify-start"><span>No</span></div>
                            </td>
                            <td data-column="email_verified_at"
                                class="whitespace-pre p-2 align-middle dark:text-zinc-300" style="display: none;">
                                <div class="flex items-center justify-start"><span></span></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-col justify-between px-2 text-sm md:flex-row md:items-center dark:text-zinc-300">
                <div class="mb-1 flex-1 font-medium md:mb-0 md:w-auto"><p>No rows selected.</p></div>
                <div class="it-pagination flex w-full justify-between space-x-6 md:w-auto md:items-center lg:space-x-8">
                    <div class="flex flex-col md:flex-row md:items-center"><p class="mb-1 font-medium md:mb-0 md:mr-2">
                            Rows per page</p><select
                            class="it-select-input rounded-md border-gray-300 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-900 dark:text-zinc-300 dark:focus:border-blue-400 dark:focus:ring-blue-400 it-pagination-per-page-select">
                            <option value="15">15</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select></div>
                    <div class="flex flex-col md:flex-row md:items-center">
                        <div class="mb-1 font-medium md:mb-0 md:w-[100px]">Page 1 of 34</div>
                        <div class="flex items-center space-x-2">
                            <button type="button" disabled=""
                                    class="it-button inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 cursor-not-allowed opacity-50 dark:opacity-50 it-default-button border-gray-300 bg-white text-gray-700 hover:text-gray-500 focus:ring-gray-500 hover:bg-gray-50 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-900 dark:text-zinc-300 dark:hover:bg-zinc-700 dark:focus:ring-offset-zinc-800 it-pagination-first-page-button">
                                <span class="sr-only">Go to first page</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5"></path>
                                </svg>
                            </button>
                            <button type="button" disabled=""
                                    class="it-button inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 cursor-not-allowed opacity-50 dark:opacity-50 it-default-button border-gray-300 bg-white text-gray-700 hover:text-gray-500 focus:ring-gray-500 hover:bg-gray-50 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-900 dark:text-zinc-300 dark:hover:bg-zinc-700 dark:focus:ring-offset-zinc-800 it-pagination-previous-page-button">
                                <span class="sr-only">Go to previous page</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.75 19.5 8.25 12l7.5-7.5"></path>
                                </svg>
                            </button>
                            <button type="button"
                                    class="it-button inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-gray-300 bg-white text-gray-700 hover:text-gray-500 focus:ring-gray-500 hover:bg-gray-50 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-900 dark:text-zinc-300 dark:hover:bg-zinc-700 dark:focus:ring-offset-zinc-800 it-pagination-next-page-button">
                                <span class="sr-only">Go to next page</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
                                </svg>
                            </button>
                            <button type="button"
                                    class="it-button inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-gray-300 bg-white text-gray-700 hover:text-gray-500 focus:ring-gray-500 hover:bg-gray-50 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-900 dark:text-zinc-300 dark:hover:bg-zinc-700 dark:focus:ring-offset-zinc-800 it-pagination-last-page-button">
                                <span class="sr-only">Go to last page</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
