<div>
    <div class="w-6/12 self-center mt-8 ml-8">
        Show Tweets
    </div>

    <div class="w-6/12 self-center mt-8 ml-8">
        <livewire:components.guest.formguest>
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
</div>
