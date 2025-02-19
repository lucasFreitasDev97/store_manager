<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categorias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="">
                        <x-primary-button class="mb-4">
                            {{ __('Criar nova categoria') }}
                        </x-primary-button>
                    </a>
                    <table class="w-full border-collapse border border-gray-400 bg-white text-sm dark:border-gray-500 dark:bg-gray-800">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="w-1/3 border border-gray-300 p-4 text-left font-semibold text-gray-900 dark:border-gray-600 dark:text-gray-200">Nome</th>
                            <th class="w-1/3 border border-gray-300 p-4 text-left font-semibold text-gray-900 dark:border-gray-600 dark:text-gray-200">Status</th>
                            <th class="w-1/3 border border-gray-300 p-4 text-left font-semibold text-gray-900 dark:border-gray-600 dark:text-gray-200">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="border border-gray-300 p-4 text-gray-500 dark:border-gray-700 dark:text-gray-400"></td>
                            <td class="border border-gray-300 p-4 text-gray-500 dark:border-gray-700 dark:text-gray-400"></td>
                            <td class="border border-gray-300 p-4 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                <a href="#">Editar</a> |
                                <a href="#">Remover</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
