<x-app-layout>
    <x-slot name="header">
        {{ __('Extensions') }}
    </x-slot>

    {{-- <div class="p-4 bg-white rounded-lg shadow-xs">
        {{ __('You are logged in!') }}
    </div> --}}
    <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
        <div class="overflow-x-auto w-full">
            <table class="w-full whitespace-no-wrap">
                <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                    <th class="px-4 py-3">#</th>

                    <th class="px-4 py-3">Id</th>
                    <th class="px-4 py-3">Campus</th>
                    <th class="px-4 py-3">Ext_no</th>
                    <th class="px-4 py-3">Owner_Assigned</th>
                    <th class="px-4 py-3">Department</th>
                    <th class="px-4 py-3">Action</th>



                </tr>
                </thead>
                <tbody class="bg-white divide-y">
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 text-sm">
                           <input type="checkbox" name="" id="">
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{" 1" }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{" Main" }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{" 1002" }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{" VC" }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{" VC Office" }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg>
                        
                        
                            
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <div class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
            {{-- {{ $users->links() }} --}}
        </div>
    </div>

</div>
</x-app-layout>