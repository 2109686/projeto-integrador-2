<x-alert/>
@csrf()

<input type="date" id="activity_date" name="activity_date" placeholder="Data" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<input type="time" id="input_time" name="input_time" placeholder="Hora de Entrada" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<input type="time" id="output_time" name="output_time" placeholder="Hora de Saída" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<input type="text" id="equipment" name="equipment" placeholder="Equipamento" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<input type="text" id="brand" name="brand" placeholder="Marca" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<input type="text" id="serial_number" name="serial_number" placeholder="Número de série" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<input type="text" id="responsible" name="responsible" placeholder="Responsável pela atividade" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<label for="cpf">CPF:</label>
<input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" maxlength="14" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite um CPF no formato: 000.000.000-00" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<label for="cpf">RG:</label>
<input type="text" id="rg" name="rg" placeholder="XX.XXX.XXX-X" maxlength="14" pattern="\d{2}\.\d{3}\.\d{3}-\d{1}" title="Digite um RG no formato: 00.000.000-0" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<input type="text" id="company" name="company" placeholder="Empresa" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

{{-- <input type="text" placeholder="Assuntooooo" name="subject" value="{{ $support->subject ?? old('subject') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<textarea name="body" cols="30" rows="5" placeholder="Descrição" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{{ $support->body ?? old('body') }}</textarea> --}}
<button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Salvar os dados</button>
