@extends('layout.main') <!-- Подключаем шаблон layout.main -->

@section('content') <!-- Начинаем секцию content -->

<div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6">Список отчётов</h1>
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="px-4 py-2 border-b">ID</th>
                    <th class="px-4 py-2 border-b">Номер</th>
                    <th class="px-4 py-2 border-b">Описание</th>
                    <th class="px-4 py-2 border-b">Дата создания</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $report)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border-b">{{ $report->id }}</td>
                        <td class="px-4 py-2 border-b">{{ $report->number }}</td>
                        <td class="px-4 py-2 border-b">{{ $report->description }}</td>
                        <td class="px-4 py-2 border-b">{{ $report->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

@endsection <!-- Завершаем секцию -->