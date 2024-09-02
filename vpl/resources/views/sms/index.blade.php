@extends('master-layout')
@section('title', 'My Numbers')

@section('content')

<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div class="flex justify-between items-center">
    <h3 class="px-1 text-lg leading-6 font-medium text-gray-900">SMS Service</h3>
  </div>
  <form action="" method="GET">
    <div class="mt-4 flex flex-wrap gap-4">
      <div style="width: 250px;">
        <label for="bill-type-2" class="block text-sm font-medium text-gray-700">Numbers</label>
        <div class="mt-1">
          <select id="bill-type-2" name="bill-type-2" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md">
            <option selected value="1234">All Numbers</option>
            <option value="1">1636723238238</option>
            <option value="1">4456655335344</option>
            <option value="1">1636723245454</option>
          </select>
        </div>
      </div>

      <div class="flex items-end">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">Search</button>
      </div>
      <div class="flex items-end ml-auto px-4">
        <a href="{{ url('/send-sms')}}" class="inline-flex justify-center py-2 px-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">Send SMS</a>
      </div>
    </div>
  </form>
</div>

<div class="w-full my-8 p-6 rounded-md shadow bg-white">
    <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900 ml-2 mb-1.25">SMS Inbox</h3>
    </div>
    <div class="mt-5 flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                @foreach(['S.No.', 'Number', 'From', 'Message','Date/Time',  'Action'] as $header)
                                    <th scope="col" class="px-8 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                        {{ $header }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-8 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">164554434334</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14534332332</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Tesing Message</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">21-May-2024</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="bg-cyan-600 text-white px-4 py-2 rounded hover:bg-cyan-700">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">445665533534</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14534332332</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Tesing Message</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">21-May-2024</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="bg-cyan-600 text-white px-4 py-2 rounded hover:bg-cyan-700">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">164554434338</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14534332332</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Tesing Message</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">21-May-2024</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="bg-cyan-600 text-white px-4 py-2 rounded hover:bg-cyan-700">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection