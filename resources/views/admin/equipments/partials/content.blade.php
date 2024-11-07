<div class="flex flex-col mt-6 my-4">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Id
                            </th>
                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Data da atividade
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Hora inicio
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Hora fim
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Equipamento
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Marca
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Número de série
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Responsável
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                CPF do Colaborador
                            </th>
                            <th Rg="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                CPF do Colaborador
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Empresa
                            </th>

                            {{-- <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Interações</th>

                            <th scope="col" class="relative py-3.5 px-4">
                                <span class="sr-only">Ver</span>
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                        <?php
                            //dd($services);
                        ?>
                        @foreach ($equipments as $equipment)
                        <tr>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $equipment->id }}
                            </td>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $equipment->activity_date }}
                            </td>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $equipment->input_time }}
                            </td>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $equipment->output_time }}
                            </td>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $equipment->equipment }}
                            </td>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $equipment->brand }}
                            </td>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $equipment->serial_number }}
                            </td>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $equipment->responsible }}
                            </td>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $equipment->cpf }}
                            </td>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $equipment->rg }}
                            </td>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $equipment->company }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
