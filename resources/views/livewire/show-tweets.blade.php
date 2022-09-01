<div>
    <div class="w-6/12 self-center mt-8 ml-8">
        Show Tweets
    </div>

    @if ($showinput)
        <div class="w-6/12 self-center mt-8 ml-8">
            <livewire:components.guest.formguest>
        </div>
    @endif
    <div class="w-6/12 self-center mt-8 ml-8">
        <button type="submit" wire:click='toggle'
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
            dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Exibir
        </button>
    </div>

    <table class="mt-8 text-sm text-center text-gray-500 dark:text-gray-400 w-11/12">
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
    {{ $tweets->links() }}
</div>
