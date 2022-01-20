<div x-data="{ open: false }">

    <div x-show="open" class="fixed bg-red-500 px-10 py-4 rounded" style="top: 50%; left: 50%">Supprimer</div>
{{--    <button @click="open = !open" class="text-red-600 hover:text-red-900">Supprimer</button>--}}

    <tr class="hover:bg-gray-50 transition">
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="{{ asset($projet->logo) }}" alt="">
                </div>
                <div class="ml-4">
                    <div class="text-sm font-bold text-gray-900">
                        {{ $projet->client }}
                    </div>
                    <div class="text-sm text-gray-500">
                        {{ $projet->date_publication }}
                    </div>
                    <div class="text-xs text-gray-400 flex items-center space-x-2">
                        <span>{{ $projet->date_publication_order }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-3 {{ $projet->site_reference ? 'text-green-400' : 'text-red-400' }}"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>

                    </div>
                </div>
            </div>
        </td>
        <td class="px-6 py-4 whitespace">
            <div class="text-sm text-gray-900">{!! \Illuminate\Support\Str::limit($projet->demande, 50) !!}</div>
            <div class="">
                @foreach($projet->categories as $categorie)
                    <span class="inline-block text-xs text-gray-500 bg-gray-200 px-3 py-1 rounded-full">{{ $categorie->nom }}</span>
                @endforeach
            </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-3 inline-flex text-xs leading-5 font-semibold rounded-full {{ $projet->etat->id === 1 ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
                {{ $projet->etat->nom }}
            </span>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <a data-turbolinks="false"
               href="{{ route('projet.edit', $projet) }}"
               class="text-indigo-600 hover:text-indigo-900">Modifier</a>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium" x-data="{ open: false }">
            <form action="{{ route('projet.delete', $projet) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:text-red-900">Supprimer</button>
            </form>
        </td>
    </tr>

</div>
