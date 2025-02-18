<x-layouts.index :title="$title">
  <x-table :tableData="$tableData" />
  <div class="mt-4">
    <x-boton href="{{route('incomes.create')}}">Add income</x-boton>
  </div>
</x-layouts.index>