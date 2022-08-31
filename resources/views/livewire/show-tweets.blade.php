<div>
    Show Tweets

    <input type="text" name="message"  id="message" wire:model='message'
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-96 p-2.5 dark:bg-gray-700
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" >

    <div class="overflow-x-auto relative">

    </div>
    <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="py-3 px-6 text-left">Nome</th>
              <th scope="col" class="py-3 px-6 text-left">Tweet</th>
            </tr>
          </thead>

        @forelse ($tweets as $tweet)
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-left whitespace-nowrap dark:text-white">{{ $tweet->user->name }}</th>
                <td class="py-4 px-6 text-left">{{ $tweet->content }}</td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        </tbody>
        @empty
            Não existe nenhum Tweet
        @endforelse
    </table>


</div>
