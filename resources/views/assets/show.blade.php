<x-layout>
    <x-card>

        <form class="grid grid-cols-2 gap-4">
            <div class="mb-6">
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
              <input type="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->name}}" disabled>
            </div>
            <div class="mb-6">
              <label for="serialNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Serial Number</label>
              <input type="serialNumber" id="serialNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->serialNumber}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="assetNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asset Number</label>
                <input type="assetNumber" id="assetNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->assetNumber}}" > 
              </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <input type="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->description}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Manufacturer</label>
                <input type="manufacturer" id="manufacturer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->manufacturer}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="assetType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asset Type</label>
                <input type="assetType" id="assetType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->assetType}}" disabled> 
              </div>
            <div class="mb-6">
                <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                <input type="location" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->location}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="colour" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colour</label>
                <input type="colour" id="colour" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->colour}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="dateOfPurchase" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Of Purchase</label>
                <input type="dateOfPurchase" id="dateOfPurchase" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->dateOfPurchase}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="estimatedValue" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estimated Value</label>
                <input type="estimatedValue" id="estimatedValue" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->estimatedValue}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="dateOfLastInspection" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Of Last Inspection</label>
                <input type="dateOfLastInspection" id="dateOfLastInspection" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->dateOfLastInspection}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="barCode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bar Code</label>
                <input type="barCode" id="barCode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->barCode}}" disabled> 
            </div>
            <div class="mb-6">
                <label for="barCodeData" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bar Code Data</label>
                <input type="barCodeData" id="barCodeData" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$asset->barCodeData}}" disabled> 
            </div>

              
           
          </form>
          
       
 
       
  
    </x-card>
</x-layout>