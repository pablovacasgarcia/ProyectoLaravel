<x-app-layout>
    <style>
        #calendar {
            max-width: 600px;
            margin: 0 auto;
            color: white;
        }
        #calendar .fc-day:hover {
            background-color: rgba(129, 129, 129, 0.56); /* Cambia este color al color deseado para el hover */
            cursor: pointer;
        }

        h2{
            font-size: 2rem;
            color: white;
            text-align: center;
            margin-top: 5px;
            margin-bottom: 20px;
        }
        .boton{
            border: 1px solid white;
            box-sizing: border-box;
            background-color: white;
            color: rgb(17 24 39 / var(--tw-bg-opacity));
            width: 7rem !important;
            border-radius: 10px;
            width: 200px;
            margin-top: 10px;
            margin-left: 700px

        }
        .boton:hover{
            background-color: rgb(17 24 39 / var(--tw-bg-opacity));
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
    <h2>Seleccionar fecha para cita:</h2>
    <form action="{{ route('citas.store') }}" method="post">
        @csrf
        <input type="hidden" name="coche_id" value="{{ $coche_id }}">
        <input type="hidden" name="fecha" id="fecha">
        <div id="calendar"></div>
        <button class="boton" type="submit">Guardar cita</button>
    </form>
    </body>
</x-app-layout>
