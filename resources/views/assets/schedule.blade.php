<x-layout>
    <div class="sm:ml-64 mt-10 pl-5 inline-flex text-xs">
        <a href="/" class="inline-flex hover:text-blue-900 hover:underline underline-offset-2"><svg class="pr-1" fill="none" stroke="currentColor" stroke-width="1.5" width="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
        </svg>
        <span class="flex-1 ml-1 whitespace-nowrap">Home</span>
        </a>
        <span class="flex-1 px-1">></span>
        <a href="/assets" class="inline-flex hover:text-blue-900 hover:underline underline-offset-2"><svg aria-hidden="true" class=" text-gray-100 " fill="none" stroke="currentColor" width="15" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
        <span class="flex-1 ml-1 whitespace-nowrap ">Asset Register</span>
        </a>
        <span class="flex-1 px-1">></span>
        <a href="/assets/{{$asset->id}}" class="inline-flex hover:text-blue-900 hover:underline underline-offset-2"><svg class="pr-1" fill="none" stroke="currentColor" stroke-width="1.5" width="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
        <span class="flex-1 ml-1 whitespace-nowrap ">{{$asset->name}}</span>
        </a>  
        <span class="flex-1 px-1">></span>
        <a href="#" class="inline-flex hover:text-blue-900 hover:underline underline-offset-2"><svg aria-hidden="true"  class="pr-1" fill="none" stroke="currentColor" stroke-width="1.5" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
        <span class="flex-1 ml-1 whitespace-nowrap ">Schedule</span>
        </a>  
      </div>
    <x-card>
        <h2 class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Asset Details</h2>
          <br>
        <form class="grid grid-cols-2 gap-4 ">
            <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="name" id="name" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " value="{{$asset->name}}" disabled>
            </div>
            <div class="mb-6">
            <label for="serialNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Serial Number</label>
            <input type="serialNumber" id="serialNumber" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->serialNumber}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="assetNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asset Number</label>
                <input type="assetNumber" id="assetNumber" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->assetNumber}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="assignedUser" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Assigned User</label>
                <input type="assignedUser" id="assignedUser" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->assignedUser}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <input type="description" id="description" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->description}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Manufacturer</label>
                <input type="manufacturer" id="manufacturer" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->manufacturer}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="assetType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asset Type</label>
                <input type="assetType" id="assetType" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->assetType}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="colour" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colour</label>
                <input type="colour" id="colour" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->colour}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="site" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Site</label>
                <input type="site" id="site" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->site}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                <input type="location" id="location" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->location}}" disabled> 
            </div>
            
            
        </form>
    </x-card>

    <x-card>
        <h2 class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Book Your Dates</h2>
        <br>
        <form method="POST" action="/assets/{{$asset->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid md:grid-cols-2 md:gap-6">

                <div class="mb-6">
                    <label for="dateOfPurchase" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                    <input type="date" id="startDate" name="startDate" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  > 
                    @error('startDate')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>

                <div class="mb-6">
                    <label for="dateOfPurchase" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
                    <input type="date" id="dateOfPurchase" name="dateOfPurchase" class="bg-white shadow border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" > 
                    @error('dateOfPurchase')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
                  
            </div>
            <button type="submit" class="text-white shadow-md bg-blue-800 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </x-card>
</x-layout>