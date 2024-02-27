<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    
                                   
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Sl.
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Added By
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Table rows go here -->
                               @foreach ($tasks as $task )
                               <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- Title column -->
                                    <div class="text-sm text-gray-900">{{ $task->id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- Title column -->
                                    <div class="text-sm text-gray-900">{{ $task->user["name"] }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- Title column -->
                                    <div class="text-sm text-gray-900">{{ $task->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- Action column with buttons -->
                                    <div class="flex items-center space-x-4">
                                        {{-- @can('task_edit') --}}
                                        {{-- @can('update', $task)
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Edit
                                        </button>
                                        @endcan --}}
                                        {{-- @can('task_delete') --}}
                                        {{-- @can('delete', $task)
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                        @endcan --}}
                                        
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Edit
                                        </button>
                                        
                                    </div>
                                </td>
                            </tr>
                               @endforeach
                                <!-- Additional rows go here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
