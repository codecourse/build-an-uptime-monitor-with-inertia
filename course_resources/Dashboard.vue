<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    site.com
                </h2>
                <div>
                    Site selector
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-lg text-gray-800 leading-tight">New endpoint</h2>

                <form class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex items-start p-3 mt-4 space-x-2">
                    <div class="grow">
                        <InputLabel for="location" value="Location" class="sr-only" />
                        <TextInput id="location" type="text" class="block w-full h-9 text-sm" placeholder="e.g. /pricing" />
                    </div>

                    <div>
                        <select name="frequency" id="frequency" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-9 leading-none text-sm">
                            <option value="">
                                1 minute
                            </option>
                        </select>
                    </div>

                    <PrimaryButton class="ml-4 shrink-0 h-9">
                        Add
                    </PrimaryButton>
                </form>

                <div class="mt-8 flex flex-col">
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                        Currently monitoring (0)
                    </h2>
                    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8 mt-3">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                <table class="min-w-full table-fixed divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="min-w-[12rem] pl-4 py-3.5 px-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                Location
                                            </th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Frequency
                                            </th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Last check
                                            </th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Last status
                                            </th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Uptime
                                            </th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Delete</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        Endpoint
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex flex-col">
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">Notification channels</h2>

                    <div class="grid grid-cols-3 gap-12 mt-4">

                    </div>
                </div>

                <div class="mt-8">
                    <button class="text-red-500 text-sm">Delete site</button>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
