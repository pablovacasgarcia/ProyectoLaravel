<x-app-layout>
    <style>
        #calendar {
            max-width: 600px;
            margin: 0 auto;
            color: white;
        }
    </style>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var today = new Date();
            var selectedDate = null;

            var reservedDates = [
                @foreach($citas as $cita)
                    '{{ $cita->fecha }}',
                @endforeach
            ];

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                validRange: {
                    start: today.toISOString().split('T')[0],
                },
                events: reservedDates.map(function (date) {
                    return {
                        title: 'reservado',
                        start: date,
                        color: 'red',
                        textColor: 'black',
                        display: 'background',
                        selectable: false
                    };
                }),
                dateClick: function (info) {
                    // Comprobar si el día está reservado
                    var isReserved = reservedDates.includes(info.dateStr);
                    // Comprobar si el día es un domingo
                    var isSunday = info.date.getDay() === 0;

                    // Seleccionar el nuevo día si no está reservado y no es un domingo
                    if (!isReserved && !isSunday) {
                        // Desseleccionar el día anterior
                        if (selectedDate) {
                            var prevDayEl = document.querySelector('.selected-day');
                            if (prevDayEl) {
                                prevDayEl.style.backgroundColor = '';
                                prevDayEl.classList.remove('selected-day');
                            }
                        }
                        info.dayEl.style.backgroundColor = 'gainsboro';
                        info.dayEl.classList.add('selected-day');
                        document.getElementById('fecha').value = info.dateStr;
                        selectedDate = info.dateStr;
                    }
                }
            });

            calendar.render();
        });
    </script>


    </head>
    <body>
    <h2>Seleccionar fecha para cita</h2>
    <form action="{{ route('citas.store') }}" method="post">
        @csrf
        <input type="hidden" name="coche_id" value="{{ $coche_id }}">
        <input type="hidden" name="fecha" id="fecha">
        <div id="calendar"></div>
        <button type="submit">Guardar cita</button>
    </form>
    </body>
</x-app-layout>
