<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver notas del Alumno
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col py-3">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Criterio</th>
                                        <th>Calificacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- {{dd($notas)}} --}}
                                    @foreach ($notas as $nota)
                                        @foreach ($nota->notas as $criterio)
                                            <tr>
                                                <td>{{ $criterio->ccee->ce }}</td>
                                                <td>{{ $criterio->nota }}</td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
