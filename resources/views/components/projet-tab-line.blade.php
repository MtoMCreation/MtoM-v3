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
                    <div class="text-xs text-gray-400">
                        {{ $projet->date_publication_order }}
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
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $projet->etat->id === 1 ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
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
