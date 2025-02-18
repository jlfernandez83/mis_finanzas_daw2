<x-layouts.index :title="$title">
  @if ($errors->any())
    <x-alert message="Parece que ha habido algunos problemas."/>
  @endif
<form class="max-w-sm mx-auto" action="{{route('incomes.store')}}" method='post'>
    @csrf
    <div class="mb-5">
      <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
      <input type="number" step="any" name="amount" id="amount" class="@error('amount') dark:bg-red-200 dark:border-2 border-red-500 dark:border-red-600 @else dark:bg-gray-700 border-gray-300 dark:border-gray-600 @enderror bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cantidad" required value="{{ old('amount')}}" />
      @error('amount')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
    </div>
    <div class="mb-5">
      <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
      <input type="date" name="date" id="date" class="@error('date') dark:bg-red-200 dark:border-2 border-red-500 dark:border-red-600 @else dark:bg-gray-700 border-gray-300 dark:border-gray-600 @enderror bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cantidad" required value="{{ old('date')}}" />
      @error('date')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
    </div>
    <div class="mb-5">
      <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría</label>
      <select name="category_id" id="categories" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option disabled selected>Categoría</option>
        @foreach ($categories as $category)
          <option value="{{$category->id}}">{{ucfirst($category->name)}}</option>    
        @endforeach
      </select>
      {{--<label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
      <input type="date" name="date" id="date" class="@error('date') dark:bg-red-200 dark:border-2 border-red-500 dark:border-red-600 @else dark:bg-gray-700 border-gray-300 dark:border-gray-600 @enderror bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cantidad" required value="{{ old('date')}}" />
      @error('date')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror--}}
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  
  </x-layouts.index>