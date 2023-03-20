<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                   

                        <div class="mt-5 md:col-span-3 md:mt-0">
                        <form action="#" method="POST">
                            <div class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                          
                                <div>
                                <label class="block text-sm font-medium leading-6 text-gray-900">Upload csv</label>
                                <form>
  <label class="block">
    <span class="sr-only">Choose profile photo</span>
    <input type="file" class="block w-full text-sm text-gray-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-md file:border-0
      file:text-sm file:font-semibold
      file:bg-blue-500 file:text-white
      hover:file:bg-blue-600
    "/>
  </label>
</form>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
